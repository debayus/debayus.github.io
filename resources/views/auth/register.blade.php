@extends('layouts.login')

@section('content')

<div class="text-center mb-3">
    <i class="icon-plus3 icon-2x text-success border-success border-3 rounded-round p-3 mb-3 mt-1"></i>
    <h5 class="mb-0">Create account</h5>
    <span class="d-block text-muted">All fields are required</span>
</div>
<div class="form-group text-center text-muted content-divider">
    <span class="px-2">Your credentials</span>
</div>
<form class="login-form" method="POST" action="{{ route('register') }}">
    @csrf

    <div class="form-group form-group-feedback form-group-feedback-left">
        <input id="name" placeholder="Name" type="text" class="form-control @error('name') border-danger @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        <div class="form-control-feedback">
            <i class="icon-user-check text-muted"></i>
        </div>
        @error('name')
            <span class="form-text text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group form-group-feedback form-group-feedback-left">
        <input id="email" placeholder="Email" type="email" class="form-control @error('email') border-danger @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        <div class="form-control-feedback">
            <i class="icon-envelop text-muted"></i>
        </div>
        @error('email')
            <span class="form-text text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group form-group-feedback form-group-feedback-left">
        <input id="password" placeholder="Password" type="password" class="form-control @error('password') border-danger @enderror" name="password" required autocomplete="new-password">
        <div class="form-control-feedback">
            <i class="icon-user-lock text-muted"></i>
        </div>
        @error('password')
            <span class="form-text text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group form-group-feedback form-group-feedback-left">
        <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        <div class="form-control-feedback">
            <i class="icon-check text-muted"></i>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn bg-teal-400 btn-block">Register <i class="icon-circle-right2 ml-2"></i></button>
    </div>
</form>
<span class="form-text text-center text-muted">
    <a href="{{ route('login') }}">Login</a>
</span>

@endsection
