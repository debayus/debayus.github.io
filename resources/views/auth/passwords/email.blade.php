@extends('layouts.login')

@section('content')
<div class="text-center mb-3">
    <i class="icon-spinner11 icon-2x text-warning border-warning border-3 rounded-round p-3 mb-3 mt-1"></i>
    <h5 class="mb-0">Password recovery</h5>
</div>
<div class="form-group text-center text-muted content-divider">
    <span class="px-2">We'll send you instructions in email</span>
</div>
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<form class="login-form" method="POST" action="{{ route('password.email') }}">
    @csrf
    <div class="form-group form-group-feedback form-group-feedback-right">
        <input id="email" placeholder="Email" type="email" class="form-control @error('email') border-danger @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
        <div class="form-control-feedback">
            <i class="icon-mail5 text-muted"></i>
        </div>
        @error('email')
            <span class="form-text text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <button type="submit" class="btn bg-blue btn-block">Reset password <i class="icon-spinner11 mr-2"></i></button>
    </div>
</form>
<span class="form-text text-center text-muted">
    <a href="{{ route('login') }}"">Login</a>
</span>
@endsection
