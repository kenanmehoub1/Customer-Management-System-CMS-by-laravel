@extends('admin.layouts.auth')

@section('auth-title', 'Forgot your password?')

@section('auth-content')
<form action="{{ url('/admin/forgot/password') }}" method="post">
    @csrf

    <div class="mb-3 text-center">
        <p class="text-muted">Enter your email address and we will send you a link to reset your password.</p>
    </div>

    <div class="input-group mb-3">
        <div class="input-group-text"><span class="bi bi-envelope"></span></div>
        <input type="email" name="email" value="{{ old('email') }}"
               class="form-control @error('email') is-invalid @enderror"
               placeholder="Email" required autofocus>
    </div>
    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <div class="d-grid gap-2 mb-3">
        <button type="submit" class="btn btn-primary btn-lg">Send Reset Link</button>
    </div>

    
</form>
@endsection

@section('auth-footer')
<div class="d-flex justify-content-between">
    <a href="{{ url('/admin/login') }}">Back to login</a>
    <a href="{{ url('/admin/register') }}">Create account</a>
</div>
@endsection