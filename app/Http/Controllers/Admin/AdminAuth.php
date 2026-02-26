<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;

use App\Http\Requests\registerRequest;
use App\Http\Requests\verifyCodeRequest;
use App\Http\Requests\loginRequest;
use App\Traits\generateCodeTrait;
use App\Traits\FileHandlerTrait;
use App\Events\VerifyUserEvent;
use App\Events\forgotPasswordEvent;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Mail\SendOtpMail;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\admin;
use App\Models\token;

class AdminAuth extends Controller
{
    use generateCodeTrait,FileHandlerTrait;

    public function login(){
        return view('admin.login');
    }

    public function dologin(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'The email field is required',
            'email.email' => 'Please enter a valid email address',
            'password.required' => 'The password field is required',
            
        ]);
        $admin=admin::where('email',$request->email)->first();

        if(!$admin){
        return redirect('admin/login')->with('error','there is no admin');
        }

        if ($admin->email_verified == 0) {
            return redirect('admin/login')->with('error','Email not verified. Please verify your email to log in.');
        }
        
        $Rememberme = request('Rememberme') == 1 ? true : false;
        
        if(auth()->guard('admin')->attempt(['email' => request('email'), 'password' => request('password')], $Rememberme)){
         return redirect('/admin/home/'.$admin->id);
            //return view('admin.home',compact('admin'));

        } else {
            return redirect('admin/login')->withErrors(['email' => trans('admin.errorlogin')]);
        }
    }
    public function home($id){
        $admin=admin::find($id);
        if(!$admin){
        return redirect('admin/login')->with('error','admin not found');
        }
        return view('admin.home',compact('admin'));
    }



    public function registerPage(){
        return view('admin.register');
    }

    public function register(registerRequest $request){
        $fields = $request->validated();
$profilePhotoPath = null;

    $profilePhoto = $request->file('profile_photo');



    // إنشاء اسم فريد للملف
    $fileName = $this->generateUniqueName($profilePhoto);

    // نقل الملف إلى الدليل المطلوب
    $profilePhoto->move(public_path('profile_photos'), $fileName);

    // حفظ المسار النسبي فقط (للاستخدام في قاعدة البيانات وعرض الصور)
    $profilePhotoPath = 'profile_photos/' . $fileName;


      //  $file->move(public_path('images'), $filename);

     //  $profilePhoto = $request->file('profile_photo');
   //    $profilePhotoPath = $profilePhoto?->storeAs('profile_photo', $this->generateUniqueName($profilePhoto), 'public');

        // Create a new admin
        $code = $this->generateCode();

        $admin = admin::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'phone_number' => $fields['phone_number'],
            'profile_photo' => $profilePhotoPath,
            'password' => Hash::make($fields['password']),
            'email_verification_code' => $code,
            'email_verified' => false,
        ]);

        if (is_null($admin)) {
            return redirect('admin/login')->withErrors('access error occurred.');
        }


        $token = $admin->createToken('myapptoken', ['*'], Carbon::now()->addDays(3))->plainTextToken;

        //we built a database for token
       token::create([
            'admin_id' => $admin->id,
            'token' => $token,
            'expired_at' => Carbon::now()->addDays(3)
        ]);

        event(new \App\Events\VerifyUserEvent($admin, $code, $token));

            \Log::info('Dispatching event for: ' . $admin->email);
    event(new \App\Events\VerifyUserEvent($admin, $code, $token));
    \Log::info('Event dispatched for: ' . $admin->email);
        return redirect('admin/login')->with('success','check your email');
    }

    public function verifyEmailCode(verifyCodeRequest $request, $token = null) {
    $request->validated();

    // البحث عن المدير باستخدام التوكن بدلاً من admin_id
    $admin = admin::where('id', $request->admin_id)->first();





    if (!$admin) {
        return redirect('admin/login')->with('error', 'المدير غير موجود');
    }

    // التحقق من صحة الكود (بدون استخدام عنوان IP)
    if ($request->code !== $admin->email_verification_code) {
        return redirect('admin/login')->withErrors('كود التحقق غير صحيح');
    }

    // تحديث حالة المدير
    $admin->email_verified = true;
    $admin->email_verification_code = null;
    $admin->save();




    return redirect('admin/login')->with('success', 'تم تأكيد بريدك الإلكتروني بنجاح');
}

    public function logout(){
        auth()->guard('admin')->logout();
        return redirect('admin/login');
    }

    public function forgot_password(){
        return view('admin.forgot_password');
    }
    public function doForgot_password(Request $request){
    $request->validate([
            'email' => 'required|email',
        ], [
            'email.required' => 'The email field is required',
            'email.email' => 'Please enter a valid email address',
           ]);

           $admin=admin::where('email',$request->email)->first();

           if(!$admin){
           return redirect('/admin/forgot/password')->with('error','This email address is not registered.');
           }
        $code = $this->generateCode();
        $admin->update([
         'email_verification_code' => $code,
            'email_verified' => false,
        ]);
        event(new \App\Events\forgotPasswordEvent($admin, $code));
        return redirect('admin/forgot/password')->with('success','check your email');
    }

    public function ChangePassword(Request $request){
    $admin=admin::find($request->admin_id);

    if($admin->email_verification_code !== $request->code){
    return redirect('admin/forgot/password')->with('error','there is error in your  code');
    }

    return view('admin.ChangePassword', compact('admin'));

    }
    public function doChangePassword(Request $request,$id){
    $request->validate([
    'password'=>'required',
    ]);
    $admin=admin::find($id);
    if(!$admin){
    return redirect->back()->with('error','the admin not found');
    }
    try{
    $admin->update([
    'password'=>Hash::make($request->password),
   'email_verification_code' => null,
    'email_verified' => true,
    ]);

    return redirect('admin/login')->with('success','Password changed successfully');
    }catch (\Exception $e){
    return redirect()->back()->with('error','An error occurred while updating the password.');
    }



    }







}
