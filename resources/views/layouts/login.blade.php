<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'Mahas') }}</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="/template/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="/template/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/template/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="/template/assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="/template/assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="/template/assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->
    <!-- Core JS files -->
    <script src="/template/global_assets/js/main/jquery.min.js"></script>
    <script src="/template/global_assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="/template/global_assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->
    <!-- Theme JS files -->
    <script src="/template/global_assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script src="/template/assets/js/app.js"></script>
    <!-- /theme JS files -->

</head>

<body class="bg-slate-800">

    <!-- Page content -->
    <div class="page-content" style="background: url(/template/global_assets/images/login_cover.jpg) no-repeat; background-size: cover;">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content d-flex justify-content-center align-items-center">

                <!-- Login card -->
                <div class="card mb-0">
                    <div class="card-body">
                        @yield('content')
                        <span class="form-text text-center text-muted">
                            <a href="https://debayus.mahas.my.id/" target="_blank">Gede Bayu</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
