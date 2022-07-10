<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? '@debayus' }} - Gede Bayu</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="/template/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="/template/global_assets/css/icons/fontawesome/styles.min.css" rel="stylesheet" type="text/css">
    <link href="/template/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/template/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="/template/assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="/template/assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="/template/assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <link href="/lib/mahas/dist/css/mahas.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->
    <!-- Core JS files -->
    <script src="/template/global_assets/js/main/jquery.min.js"></script>
    <script src="/template/global_assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="/template/global_assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->
    <!-- Theme JS files -->
    <script src="/template/global_assets/js/plugins/editors/ace/ace.js"></script>
    <script src="/template/global_assets/js/plugins/forms/selects/select2.min.js"></script>
    <script src="/template/global_assets/js/plugins/cleave.min.js"></script>
    <script src="/template/assets/js/app.js"></script>
    <script src="/lib/mahas/dist/js/mahas.js"></script>
    <!-- /theme JS files -->
</head>
<body>
    <div class="navbar navbar-expand-md navbar-dark">
        <div class="navbar-brand">
            <a class="d-inline-block" href="/admin">
                <label class="home-brand-label">Gede Bayu</label>
            </a>
        </div>

        <div class="d-md-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                <i class="icon-tree5"></i>
            </button>
            <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
                <i class="icon-paragraph-justify3"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                        <i class="icon-paragraph-justify3"></i>
                    </a>
                </li>
            </ul>
            <span class="ml-md-3 mr-md-auto"></span>
            <ul class="navbar-nav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown dropdown-user">
                        <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                            <span>Username</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="/account/manage" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
                            <a href="javascript:document.getElementById('formlogout').submit();" class="dropdown-item">
                                <i class="icon-switch2"></i> Logout
                            </a>
                            <form id="formlogout" class="hidden" method="POST" action="/account/logout"></form>
                        </div>
                    </li>
                </ul>
            </ul>
        </div>
    </div>
    <div class="page-content">
        <div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">
            <div class="sidebar-mobile-toggler text-center">
                <a href="#" class="sidebar-mobile-main-toggle">
                    <i class="icon-arrow-left8"></i>
                </a>
                Navigation
                <a href="#" class="sidebar-mobile-expand">
                    <i class="icon-screen-full"></i>
                    <i class="icon-screen-normal"></i>
                </a>
            </div>
            <div class="sidebar-content">
                <div class="card card-sidebar-mobile">
                    <ul class="nav nav-sidebar" data-nav-type="accordion">
                        <li class="nav-item"><a href="/admin" class="nav-link"><i class="icon-home"></i> <span>Home</span></a></li>
                        <li class="nav-item"><a href="/admin/galleries" class="nav-link"><i class="icon-images3"></i> <span>Galleries</span></a></li>
                        <li class="nav-item"><a href="/admin/tags" class="nav-link"><i class="icon-archive"></i> <span>Tags</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="content-wrapper">
            <div class="page-header page-header-light">
                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a href="/admin" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                            {{-- @if (ViewData["Breadcrumb"] != null)
                            {
                                foreach (var i in (List<SelectListItem>)ViewData["Breadcrumb"])
                                {
                                    if (i.Value == "active")
                                    {<span class="breadcrumb-item active">@i.Text</span> }
                                    else
                                    { <a href="@i.Value" class="breadcrumb-item">@i.Text</a>}
                                }
                            } --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                {{ $slot }}
            </div>
            <div class="navbar navbar-expand-lg navbar-light">
                <div class="text-center w-100">
                    &copy; 2020 - PalapaNet by <a href="https://debayus.mahas.my.id/">Gede Bayu</a>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
