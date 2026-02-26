@extends('admin.layouts.auth')

@section('auth-title', 'Create new account')

@section('auth-content')
<form action="{{ url('/admin/register') }}" method="post" enctype="multipart/form-data">
    @csrf
    
    <!-- حقل الاسم -->
    <div class="input-group mb-3">
        <div class="input-group-text"><span class="bi bi-person"></span></div>
        <input type="text" name="name" value="{{ old('name') }}" 
               class="form-control @error('name') is-invalid @enderror" 
               placeholder="Full Name" required>
    </div>
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    <!-- حقل البريد الإلكتروني -->
    <div class="input-group mb-3">
        <div class="input-group-text"><span class="bi bi-envelope"></span></div>
        <input type="email" name="email" value="{{ old('email') }}" 
               class="form-control @error('email') is-invalid @enderror" 
               placeholder="Email Address" required>
    </div>
    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    <!-- حقل رقم الهاتف -->
    <div class="input-group mb-3">
        <div class="input-group-text"><span class="bi bi-telephone-fill"></span></div>
        <input type="text" name="phone_number" value="{{ old('phone_number') }}" 
               class="form-control @error('phone_number') is-invalid @enderror" 
               placeholder="Phone Number" required>
    </div>
    @error('phone_number')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    <!-- حقل الصورة الشخصية -->
    <div class="input-group mb-3">
        <div class="input-group-text"><span class="bi bi-camera-fill"></span></div>
        <input type="file" name="profile_photo" value="{{ old('profile_photo')}}"
               class="form-control @error('profile_photo') is-invalid @enderror" 
               accept="image/jpeg,image/png,image/jpg,image/gif" >
    </div>
    @error('profile_photo')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    
    <!-- حقل كلمة المرور -->
    <div class="input-group mb-3">
        <div class="input-group-text"><span class="bi bi-lock"></span></div>
        <input type="password" name="password" 
               class="form-control @error('password') is-invalid @enderror" 
               placeholder="Password" required>
    </div>
    @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    <!-- تأكيد كلمة المرور -->
    <div class="input-group mb-3">
        <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
        <input type="password" name="password_confirmation" 
               class="form-control" 
               placeholder="Confirm Password" required>
    </div>
    
    <!-- زر التسجيل -->
    <div class="d-grid gap-2 mb-3">
        <button type="submit" class="btn btn-success btn-lg">
            <i class="bi bi-person-plus"></i> Register
        </button>
    </div>
</form>
@endsection

@section('auth-footer')
<div class="d-flex justify-content-center">
    <a href="{{ url('/admin/login') }}">Already have an account? Sign in</a>
</div>
@endsection