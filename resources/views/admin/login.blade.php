@extends('admin.layouts.auth')

@section('auth-title', 'Sign in to your account')

@section('auth-content')
<form action="{{url('/admin/login')}}" method="post">
    @csrf
    
    <div class="input-group mb-3">
        <div class="input-group-text"><span class="bi bi-envelope"></span></div>
        <input type="email" name="email" value="{{old('email')}}" 
               class="form-control @error('email') is-invalid @enderror" 
               placeholder="Email" required>
    </div>
    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    <div class="input-group mb-3">
        <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
        <input type="password" name="password" 
               class="form-control @error('password') is-invalid @enderror" 
               placeholder="Password" required>
    </div>
    @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="row mb-3">
        <div class="col-6">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" name="remember" id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault">Remember Me</label>
            </div>
        </div>
        <div class="col-6 text-end">
            <a href="{{url('admin/forgot/password')}}">Forgot Password?</a>
        </div>
    </div>
    
    <div class="d-grid gap-2 mb-3">
        <button type="submit" class="btn btn-primary btn-lg">Sign In</button>
    </div>
</form>
@endsection

@section('auth-footer')
<div class="d-flex justify-content-center">
   
    <a href="{{ url('/admin/register') }}">Create account</a>
</div>
@endsection