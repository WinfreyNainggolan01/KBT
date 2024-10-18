<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login - KBT </title>
  <link rel="stylesheet" href="{{ asset ('vendor/assets/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset ('vendor/assets/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{ asset ('vendor/assets/css/vertical-layout-light/style.css')}}">
  <link rel="shortcut icon" href="{{ asset ('vendor/assets/images/favicon.png')}}" />
  @vite('resources/css/app.css')
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo justify-center text-center">
                    <img src="{{ asset('img/KBT.png') }}" alt="logo" class="mx-auto">
                  </div>
                  <div class="text-center">
                    <span class="block text-2xl font-bold text-gray-800">Hello! let's get started</span>
                    <span class="block text-lg font-light text-gray-500 mt-2">Sign in to continue.</span>
                  </div>
              <form class="pt-3">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3 d-grid gap-2">
                  <a class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn" href="../../index.html">SIGN IN</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</body>
</html>
