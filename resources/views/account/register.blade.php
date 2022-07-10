<x-layout_login>
    <x-slot:title>Register</x-slot>

    <div class="text-center mb-3">
        <i class="icon-plus3 icon-2x text-success border-success border-3 rounded-round p-3 mb-3 mt-1"></i>
        <h5 class="mb-0">Create account</h5>
        <span class="d-block text-muted">All fields are required</span>
    </div>
    <div class="form-group text-center text-muted content-divider">
        <span class="px-2">Your credentials</span>
    </div>
    <form class="login-form" id="account" method="post">
        <div class="form-group form-group-feedback form-group-feedback-left">
            <input type="text" name="username" class="form-control" placeholder="Username">
            <div class="form-control-feedback">
                <i class="icon-user-check text-muted"></i>
            </div>
        </div>
        <div class="form-group form-group-feedback form-group-feedback-left">
            <input type="text" name="email" class="form-control" placeholder="Email">
            <div class="form-control-feedback">
                <i class="icon-envelop text-muted"></i>
            </div>
        </div>
        <div class="form-group form-group-feedback form-group-feedback-left">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <div class="form-control-feedback">
                <i class="icon-user-lock text-muted"></i>
            </div>
        </div>
        <div class="form-group form-group-feedback form-group-feedback-left">
            <input type="password" name="confirmPassword" class="form-control" placeholder="Confirm Password">
            <div class="form-control-feedback">
                <i class="icon-check text-muted"></i>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn bg-teal-400 btn-block">Register <i class="icon-circle-right2 ml-2"></i></button>
        </div>
    </form>
    <span class="form-text text-center text-muted">
        <a href="/account/login">Login</a>
    </span>

</x-layout>
