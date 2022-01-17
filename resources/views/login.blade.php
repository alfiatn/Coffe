<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin nKopi</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{url('public/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{url('public/assets/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{url('public/assets/vendors/css/vendor.bundle.addons.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{url('public/assets/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{url('public/assets/images/favicon.png')}}" />
</head>


<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
          <h2 class="text-center mb-4">Login</h2>
            <div class="auto-form-wrapper">
            @if(Session::has('alert_message'))
              <div class="alert alert-success">
                 <strong>{{ Session::get('alert_message') }}</strong>
              </div>
            @endif
              <form class="login" action="{{ url('/loginPost') }}" method="post">
              {{ csrf_field() }}
                <div class="form-group">
                  <label class="label">Email</label>
                  <div class="input-group">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Username">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Password</label>
                  <div class="input-group">
                    <input type="password" id="password" name="password" class="form-control" placeholder="*********">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary submit-btn btn-block">Login</button>
                </div>
               
              
                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold">Not a member ?</span>
                  <a href="{{url('register')}}" class="text-black text-small">Create new account</a>
                </div>
              </form>
            </div>
            <ul class="auth-footer">
              <li>
                <a href="#">Conditions</a>
              </li>
              <li>
                <a href="#">Help</a>
              </li>
              <li>
                <a href="#">Terms</a>
              </li>
            </ul>
            <p class="footer-text text-center">copyright © 2018 Bootstrapdash. All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{url('public/assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{url('public/assets/vendors/js/vendor.bundle.addons.js')}}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{url('public/assets/js/off-canvas.js')}}"></script>
  <script src="{{url('public/assets/js/misc.js')}}"></script>
  <!-- endinject -->
</body>

</html>