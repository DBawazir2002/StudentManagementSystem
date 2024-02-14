<!DOCTYPE html>
<html lang="en">
  <head>

    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('user/vendors/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('user/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('user/vendors/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('user/vendors/chartist/chartist.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/vendors/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/vendors/select2-bootstrap-theme/select2-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/vendors/chartist/chartist.min.css')}}">
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('user/css/style.css')}}">
    <!-- End layout styles -->
</head>
<body>
  <div class="container-scroller">
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="{{route('student')}}">
            <strong style="color: white;">SMS</strong>
          </a>
          <a class="navbar-brand brand-logo-mini" href="{{route('student')}}"><img src="{{asset('user/images/logo-mini.svg')}}" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
            <h5 class="mb-0 font-weight-medium d-none d-lg-flex">{{auth('student')->user()->name}} Welcome dashboard!</h5>
            <ul class="navbar-nav navbar-nav-right ml-auto">
              <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
                <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <img class="img-xs rounded-circle ml-2" src="{{asset('storage/studentProfileImage/default.jpg')}}" alt="Profile image"> <span class="font-weight-normal"> {{auth('student')->user()->name}} </span></a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                  <div class="dropdown-header text-center">
                    <img class="img-md rounded-circle" src="{{asset('storage/studentProfileImage/default.jpg')}}" alt="Profile image" width="250" height="250" />
                    <p class="mb-1 mt-3">{{auth('student')->user()->name}}</p>
                    <p class="font-weight-light text-muted mb-0">{{auth('student')->user()->email}}</p>
                  </div>
                  <a class="dropdown-item" href="{{route('student.profile')}}"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile</a>
                  <a class="dropdown-item" href="{{route('student.changePasswordForm')}}"><i class="dropdown-item-icon icon-energy text-primary"></i> Setting</a>
                  <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button class="dropdown-item"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</button>
                   </form>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="icon-menu"></span>
            </button>
          </div>
        </nav>
        <div class="container-fluid page-body-wrapper">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                  <li class="nav-item nav-profile">
                    <a href="#" class="nav-link">
                      <div class="profile-image">
                        <img class="img-xs rounded-circle" src="{{asset('storage/studentProfileImage/default.jpg')}}" alt="profile image">
                        <div class="dot-indicator bg-success"></div>
                      </div>
                      <div class="text-wrapper">
                        <p class="profile-name">{{auth('student')->user()->name}}</p>
                  <p class="designation">{{auth('student')->user()->email}}
                </div>
              </a>
            </li>

            <li class="nav-item nav-category">
                <span class="nav-link">Dashboard</span>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('student')}}">
                  <span class="menu-title">Dashboard</span>
                  <i class="icon-screen-desktop menu-icon"></i>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{route('student.notices')}}">
                  <span class="menu-title">View Notice</span>
                  <i class="icon-book-open menu-icon"></i>
                </a>
              </li>


            </ul>
          </nav>

          @yield('content')

          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block" style="color: blue;">Student  Management System</span>

            </div>
          </footer>

        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('user/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('user/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('user/vendors/moment/moment.min.js')}}"></script>
    <script src="{{asset('user/vendors/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('user/vendors/chartist/chartist.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('user/js/off-canvas.js')}}"></script>
    <script src="{{asset('user/js/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('user/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
  </body>
</html>
