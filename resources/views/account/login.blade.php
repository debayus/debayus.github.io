<x-layout_login>
    <x-slot:title>Login</x-slot>

    <div class="text-center mb-3">
        <i class="icon-people icon-2x text-warning-400 border-warning-400 border-3 rounded-round p-3 mb-3 mt-1"></i>
        <h5 class="mb-0">Login to your account</h5>
    </div>
    <div class="form-group text-center text-muted content-divider">
        <span class="px-2">Your credentials</span>
    </div>
    <form class="login-form" id="account" method="post">
        <div class="form-group form-group-feedback form-group-feedback-left">
            <input type="text" name="username" required class="form-control" placeholder="Username">
            <div class="form-control-feedback">
                <i class="icon-user text-muted"></i>
            </div>
        </div>
        <div class="form-group form-group-feedback form-group-feedback-left">
            <input name="password" type="password" required class="form-control" placeholder="Password">
            <div class="form-control-feedback">
                <i class="icon-lock2 text-muted"></i>
            </div>
        </div>
        <div class="form-group d-flex align-items-center">
            <div class="form-check mb-0">
                <div class="form-check-label">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Remember
                    </label>
                </div>
            </div>
            <a href="/account/forgotPassword" class="ml-auto">Forgot password?</a>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 ml-2"></i></button>
        </div>
    </form>
    <span class="form-text text-center text-muted">
        <a href="/account/register">Register</a>
    </span>

</x-layout>
