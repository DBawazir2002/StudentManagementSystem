<!DOCTYPE html>
<html lang="en">
  <head>

    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('admin/vendors/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('admin/vendors/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/chartist/chartist.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/select2-bootstrap-theme/select2-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/chartist/chartist.min.css')}}">
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
    <!-- End layout styles -->
</head>
<body>
  <div class="container-scroller">
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="{{route('admin')}}">
            <strong style="color: white;">SMS</strong>
          </a>
          <a class="navbar-brand brand-logo-mini" href="{{route('admin')}}"><img src="{{asset('admin/images/logo-mini.svg')}}" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
            <h5 class="mb-0 font-weight-medium d-none d-lg-flex">{{Auth::user()->name}} Welcome dashboard!</h5>
            <ul class="navbar-nav navbar-nav-right ml-auto">
              <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
                <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <img class="img-xs rounded-circle ml-2" src="{{asset('admin/images/faces/face8.jpg')}}" alt="Profile image"> <span class="font-weight-normal"> {{Auth::user()->name}} </span></a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                  <div class="dropdown-header text-center">
                    <img class="img-md rounded-circle" src="{{asset('admin/images/faces/face8.jpg')}}" alt="Profile image">
                    <p class="mb-1 mt-3">{{Auth::user()->name}}</p>
                    <p class="font-weight-light text-muted mb-0">{{Auth::user()->email}}</p>
                  </div>
                  <a class="dropdown-item" href="{{url('/admin/profile')}}"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile</a>
                  {{-- <a class="dropdown-item" href="change-password.php"><i class="dropdown-item-icon icon-energy text-primary"></i> Setting</a> --}}
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
                        <img class="img-xs rounded-circle" src="{{asset('admin/images/faces/face8.jpg')}}" alt="profile image">
                        <div class="dot-indicator bg-success"></div>
                      </div>
                      <div class="text-wrapper">
                        <p class="profile-name">{{Auth::user()->name}}</p>
                  <p class="designation">{{Auth::user()->email}}
                </div>
              </a>
            </li>

            <li class="nav-item nav-category">
                <span class="nav-link">Dashboard</span>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('admin')}}">
                  <span class="menu-title">Dashboard</span>
                  <i class="icon-screen-desktop menu-icon"></i>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                  <span class="menu-title">Class</span>
                  <i class="icon-layers menu-icon"></i>
                </a>
                <div class="collapse" id="ui-basic">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{url('/admin/classStudies/create')}}">Add Class</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{url('/admin/classStudies')}}">Manage Class</a></li>
                  </ul>
                </div>
              </li>

              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
                  <span class="menu-title">Students</span>
                  <i class="icon-people menu-icon"></i>
                </a>
                <div class="collapse" id="ui-basic1">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('students.create')}}">Add Students</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('students.index')}}">Manage Students</a></li>
                  </ul>
                </div>
              </li>

              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                  <span class="menu-title">Notice</span>
                  <i class="icon-doc menu-icon"></i>
                </a>
                <div class="collapse" id="auth">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('notices.create')}}"> Add Notice </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('notices.index')}}"> Manage Notice </a></li>
                  </ul>
                </div>
              </li>

              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#auth1" aria-expanded="false" aria-controls="auth">
                  <span class="menu-title">Public Notice</span>
                  <i class="icon-doc menu-icon"></i>
                </a>
                <div class="collapse" id="auth1">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('publicNotices.create')}}"> Add Public Notice </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('publicNotices.index')}}"> Manage Public Notice </a></li>
                  </ul>
                </div>

              <li class="nav-item">
                <a class="nav-link" href="{{url('/admin/search')}}">
                  <span class="menu-title">Search</span>
                  <i class="icon-magnifier menu-icon"></i>
                </a>
              </li>
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
    <script src="{{asset('admin/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('admin/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admin/vendors/moment/moment.min.js')}}"></script>
    <script src="{{asset('admin/vendors/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('admin/vendors/chartist/chartist.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('admin/js/off-canvas.js')}}"></script>
    <script src="{{asset('admin/js/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('admin/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
  </body>
</html>
