<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/@fortawesome/fontawesome-free/css/all.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/sweet-alert/sweetalert2.min.css') }}">


@yield('css')

<!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}"/>
</head>
<body>
<div class="container-scroller">
    <!-- partial:../../partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <a class="sidebar-brand brand-logo" href="{{ route('admin.index') }}">
                <img src="{{ asset('assets/images/logo.svg') }}" alt="logo"/>
            </a>
            <a class="sidebar-brand brand-logo-mini" href="{{ route('admin.index') }}">
                <img src="{{ asset('assets/images/logo-mini.svg') }}" alt="logo"/>
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item profile">
                <div class="profile-desc">
                    <div class="profile-pic">
                        <div class="count-indicator">
                            <img class="img-xs rounded-circle " src="{{ asset('assets/images/faces/mahoo.jpg') }}"
                                 alt="">
                            <span class="count bg-success"></span>
                        </div>
                        <div class="profile-name">
                            <h5 class="mb-0 font-weight-normal">{{ auth()->user()->name }}</h5>
                            <span>ADM??N</span>
                        </div>
                    </div>

            <li class="nav-item menu-items {{ Route::is('admin.index') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.index') }}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
                    <span class="menu-title">Admin Panel</span>
                </a>
            </li>


            <li class="nav-item menu-items {{ Route::is('admin.education.list') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.education.list') }}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                    <span class="menu-title">E??itim Bilgileri</span>
                </a>
            </li>

            <li class="nav-item menu-items {{ Route::is('admin.experience.list') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.experience.list') }}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                    <span class="menu-title">Deneyim Bilgileri</span>
                </a>
            </li>

            <li class="nav-item menu-items {{ Route::is('personalInformation.index') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('personalInformation.index') }}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                    <span class="menu-title">Ki??isel Bilgiler</span>
                </a>
            </li>

            <li class="nav-item menu-items {{ Route::is('admin.socialMedia.list') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.socialMedia.list') }}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                    <span class="menu-title">Sosyal Medya</span>
                </a>
            </li>

            <li class="nav-item menu-items {{ Route::is('portfolio.index') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('portfolio.index') }}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                    <span class="menu-title">Portfolio Y??netimi</span>
                </a>
            </li>



        </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                <a class="navbar-brand brand-logo-mini" href="../../index.html"><img
                        src="../../assets/images/logo-mini.svg" alt="logo"/></a>
            </div>
            <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>

                <ul class="navbar-nav navbar-nav-right">

                    <li class="nav-item dropdown">
                        <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                            <div class="navbar-profile">
                                <img class="img-xs rounded-circle" src="../../assets/images/faces/mahoo.jpg" alt="">
                                <p class="mb-0 d-none d-sm-block navbar-profile-name">{{ auth()->user()->name }}</p>
                                <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                             aria-labelledby="profileDropdown">
                             <div>
                            <a class="dropdown-item preview-item" href="{{ route('index') }}"><i class="fab fa-slack-hash"></i>Sayfaya Git</a>
                             </div>
                            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                    <span class="mdi mdi-format-line-spacing"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @yield('content')
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ?? {{ date('Y') }} <a
                            href="https://www.linkedin.com/in/mahmut-can-%C3%B6zgan-8a08501b0/" target="_blank">Mahmut Can ??zgan</a>. T??m Haklar?? Sakl??d??r.</span>
                    <span class="text-muted float-none float-sm-right d-block mt-1 mt-sm-0 text-center">T??rkiye / Ankara<i
                            class="mdi mdi-heart text-danger"></i></span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('assets/js/misc.js') }}"></script>
<script src="{{ asset('assets/js/settings.js') }}"></script>
<script src="{{ asset('assets/js/todolist.js') }}"></script>
<script src="{{ asset('assets/sweet-alert/sweetalert2.all.min.js') }}"></script>
@include('sweetalert::alert')
@yield('js')
<!-- endinject -->
<!-- Custom js for this page -->
<!-- End custom js for this page -->
</body>
</html>
