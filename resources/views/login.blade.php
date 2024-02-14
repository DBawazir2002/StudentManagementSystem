<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Student  Management System|| Login Page</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('admin/vendors/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">

  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">

            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="{{asset('admin/images/logo.svg')}}">
                </div>
                <h4>Hello! let's get started</h4>
                <h6 class="font-weight-light">Sign in to continue.</h6>
                @if (session('message'))
                    <div>
                        <h4 class="text-danger">{{session('message')}}</h4>
                    </div>
                @endif
                @forelse ($errors as $item)
                     {{$item}}
                @empty

                @endforelse
                <form class="pt-3" id="login" method="post" name="login" action="{{route('login')}}">
                    @csrf
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" placeholder="enter your email" required="true" name="email">
                    @error('email')
                                    <div>
                                        <span class="text-danger text-small">{{$message}}</span>
                                    </div>
                    @enderror
                  </div>
                  <div class="form-group">

                    <input type="password" class="form-control form-control-lg" placeholder="enter your password" name="password" required="true">
                    @error('password')
                                    <div>
                                        <span class="text-danger text-small">{{$message}}</span>
                                    </div>
                    @enderror
                  </div>
                  <div class="mt-3">
                    <button class="btn btn-success btn-block loginbtn" name="login" type="submit">Login</button>
                  </div><br>
                  <div class="mb-2">
                    <a href="/" class="btn btn-block btn-facebook auth-form-btn">
                      <i class="icon-social-home mr-2"></i>Back Home </a>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('admin/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('admin/js/off-canvas.js')}}"></script>
    <script src="{{asset('admin/js/misc.js')}}"></script>
    <!-- endinject -->
  </body>
</html>
