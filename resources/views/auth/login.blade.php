@extends('layouts.login')

@section('content')

<div class="text-center mb-3">
    <i class="icon-people icon-2x text-warning-400 border-warning-400 border-3 rounded-round p-3 mb-3 mt-1"></i>
    <h5 class="mb-0">Login to your account</h5>
</div>
<div class="form-group text-center text-muted content-divider">
    <span class="px-2">Your credentials</span>
</div>
<form class="login-form" method="POST" action="{{ route('login') }}">
    @csrf

    <div class="form-group form-group-feedback form-group-feedback-left">
        <input type="text" id="email" type="email" required name="email" class="form-control @error('email') border-danger @enderror" placeholder="Username" value="{{ old('email') }}" autocomplete="email" autofocus>
        <div class="form-control-feedback">
            <i class="icon-user text-muted"></i>
        </div>
        @error('email')
            <span class="form-text text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group form-group-feedback form-group-feedback-left">
        <input id="password" name="password" type="password" required class="form-control @error('email') border-danger @enderror" placeholder="Password" autocomplete="current-password">
        <div class="form-control-feedback">
            <i class="icon-lock2 text-muted"></i>
        </div>
        @error('password')
            <span class="form-text text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group d-flex align-items-center">
        <div class="form-check mb-0">
            <div class="form-check-label">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    Remember
                </label>
            </div>
        </div>
        <a href="{{ route('password.request') }}" class="ml-auto">Forgot password?</a>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 ml-2"></i></button>
    </div>
</form>
<span class="form-text text-center text-muted">
    <a href="{{ route('register') }}">Register</a>
</span>

@endsection
