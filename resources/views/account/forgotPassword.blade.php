<x-layout_login>
    <x-slot:title>Forgot Password</x-slot>

    <div class="text-center mb-3">
        <i class="icon-spinner11 icon-2x text-warning border-warning border-3 rounded-round p-3 mb-3 mt-1"></i>
        <h5 class="mb-0">Password recovery</h5>
    </div>
    <div class="form-group text-center text-muted content-divider">
        <span class="px-2">We'll send you instructions in email</span>
    </div>
    <form class="login-form" id="account" method="post">
        <div class="form-group form-group-feedback form-group-feedback-right">
            <input type="email" name="email" class="form-control" placeholder="Your email">
            <div class="form-control-feedback">
                <i class="icon-mail5 text-muted"></i>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn bg-blue btn-block">Reset password <i class="icon-spinner11 mr-2"></i></button>
        </div>
    </form>
    <span class="form-text text-center text-muted">
        <a href="/account/login">Login</a>
    </span>

</x-layout>
