<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>JustDo Admin</title>
  <link rel="stylesheet" href="{{ asset('vendorAdmin/assets/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{ asset('vendorAdmin/assets/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{ asset('vendorAdmin/assets/css/vertical-layout-light/style.css')}}">

  <link rel="shortcut icon" href="{{ asset('vendorAdmin/assets/images/favicon.png')}}" />
  @vite('resources/css/app.css')
</head>
<body>
    
  <div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo me-5" href="index.html"><img src="{{ asset('img/KBT.png') }}" class="h-20 w-auto" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="https://demo.bootstrapdash.com/justdo/themes/assets/images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav navbar-nav-right">


          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <img src="{{ asset('vendorAdmin/assets/images/faces/face28.jpg') }}" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              
              <!-- Form logout -->
              <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="dropdown-item">
                  <i class="ti-power-off text-primary"></i>
                  Logout
                </button>
              </form>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="ti-layout-grid2"></span>
        </button>
      </div>
    </nav>

    <div class="container-fluid page-body-wrapper">

      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="ti-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/widgets/widgets.html">
              <i class="ti-settings menu-icon"></i>
              <span class="menu-title">Users</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="pages/widgets/widgets.html">
              <i class="ti-settings menu-icon"></i>
              <span class="menu-title">Booking</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="pages/widgets/widgets.html">
              <i class="ti-settings menu-icon"></i>
              <span class="menu-title">Tickets</span>
            </a>
          </li>



        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-5 mb-4 mb-xl-0">
                  <!-- Teks Welcome dengan tampilan menarik -->
                  <h4 class="text-3xl font-extrabold">
                  Hi, Welcomeback!
                  </h4>
                  <h4 class="text-lg font-normal text-gray-600 hover:text-indigo-600 transition-colors duration-300">
                    KBT Dashboard
                  </h4>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Total Users</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">200</h3>
                    <i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                  <p class="mb-0 mt-2 text-warning">2.00% <span class="text-black ms-1"><small>(30 days)</small></span></p>
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Total Tickets</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">13</h3>
                    <i class="ti-user icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                  <p class="mb-0 mt-2 text-danger">0.22% <span class="text-black ms-1"><small>(30 days)</small></span></p>
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Total Revenue</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">Rp. 3.000.000</h3>
                    <i class="ti-agenda icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                  <p class="mb-0 mt-2 text-warning">10.00%<span class="text-black ms-1"><small>(30 days)</small></span></p>
                </div>
              </div>
            </div>

            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Total Purchase</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">23</h3>
                    <i class="ti-agenda icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                  <p class="mb-0 mt-2 text-danger">3.00%<span class="text-black ms-1"><small>(30 days)</small></span></p>
                </div>
              </div>
            </div>
          </div>

          {{-- CHART IMPLEMENTATTON --}}
          
              <div class="card">
                <div class="card-body">
                  <p class="card-title
                  mb-0">Ticket Trends</p>
                  <div id="chart"></div>
                </div>
              </div>
            





          <div class="row py-4">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">Top Destination</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Number</th>
                          <th>Destination</th>
                          <th>User</th>
                        </tr>  
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Medan</td>
                          <td class="fw-bold">34</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Parapat</td>
                          <td class="fw-bold">29</td>
                          
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Siantar</td>
                          <td class="fw-bold">24</td>
                          
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Balige</td>
                          <td class="fw-bold">18</td>
                          
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>Tarutung</td>
                          <td class="fw-bold">12</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
  <div class="d-sm-flex justify-content-center justify-content-sm-between">
    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024 <a href="https://www.bootstrapdash.com/" target="_blank">Koperasi Bintang Tapanuli</a>. All rights reserved.</span>
    
  </div>
</footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->


  <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.54.1/apexcharts.min.js" integrity="sha512-yR5RFcmaHqsGbB9WPG104Fk3+x2s9fMYCgA09VaRT2Lqpay6oNhKldYsZKU/rpYqbsNVhN5+RTbQBSd9+DhL6g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.54.1/apexcharts.min.css" integrity="sha512-a+TagZggv1pq6n/4xBSDjlpi8MQMsH0OAF2rlFOKifNKlAjk30uAg/EJeRBuL76Zq4dYLHa0ezegidxDgHzjMA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script>
    var options = {
          series: [{
            name: "Desktops",
            data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
        }],
          chart: {
          height: 350,
          type: 'line',
          zoom: {
            enabled: false
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'straight'
        },
        title: {
          text: 'Ticket Trends by Month',
          align: 'left'
        },
        grid: {
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.5
          },
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
  </script>
  <!-- plugins:js -->
  <script src="{{ asset('vendorAdmin/assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('vendorAdmin/assets/vendors/chart.js')}}/Chart.min.js')}}"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('vendorAdmin/assets/js/off-canvas.js')}}"></script>
  <script src="{{ asset('vendorAdmin/assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{ asset('vendorAdmin/assets/js/template.js')}}"></script>
  <script src="{{ asset('vendorAdmin/assets/js/settings.js')}}"></script>
  <script src="{{ asset('vendorAdmin/assets/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('vendorAdmin/assets/js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from demo.bootstrapdash.com/justdo/themes/vertical-default-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jun 2024 17:38:42 GMT -->
</html>

