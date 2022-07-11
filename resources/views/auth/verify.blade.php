@extends('layouts.login')

@section('content')
<div class="text-center mb-3">
    <i class="icon-spinner11 icon-2x text-warning border-warning border-3 rounded-round p-3 mb-3 mt-1"></i>
    <h5 class="mb-0">Verify</h5>
</div>
<div class="form-group text-center text-muted content-divider">
    <span class="px-2">Verify Your Email Address</span>
</div>
{{ __('Before proceeding, please check your email for a verification link.') }}
{{ __('If you did not receive the email') }},
@if (session('resent'))
    <div class="alert alert-success" role="alert">
        {{ __('A fresh verification link has been sent to your email address.') }}
    </div>
@endif
<form class="login-form" method="POST" action="{{ route('verification.resend') }}">
    @csrf
    <div class="form-group">
        <button type="submit" class="btn bg-blue btn-block">{{ __('click here to request another') }} <i class="icon-spinner11 mr-2"></i></button>
    </div>
</form>
<span class="form-text text-center text-muted">
    <a href="{{ route('login') }}"">Login</a>
</span>
@endsection

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
