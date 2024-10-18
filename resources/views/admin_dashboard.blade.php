<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.bootstrapdash.com/justdo/themes/vertical-default-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jun 2024 17:37:30 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>JustDo Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('vendor/assets/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{ asset('vendor/assets/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('vendor/assets/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('vendor/assets/images/favicon.png')}}" />
  @vite('resources/css/app.css')
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo me-5" href="index.html"><img src="https://demo.bootstrapdash.com/justdo/themes/assets/images/logo.svg" class="me-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="https://demo.bootstrapdash.com/justdo/themes/assets/images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
          <span class="ti-layout-grid2"></span>
        </button>
        <ul class="navbar-nav me-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="ti-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown me-1">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-bs-toggle="dropdown">
              <i class="ti-email mx-0"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <p class="mb-0 fw-normal float-start dropdown-header">Messages</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="{{ asset('vendor/assets/images/faces/face4.jpg') }}" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis fw-normal">David Grey
                  </h6>
                  <p class="fw-light small-text text-muted mb-0">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="{{ asset('vendor/assets/images/faces/face2.jpg') }}" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis fw-normal">Tim Cook
                  </h6>
                  <p class="fw-light small-text text-muted mb-0">
                    New product launch
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="{{ asset('vendor/assets/images/faces/face3.jpg') }}" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis fw-normal"> Johnson
                  </h6>
                  <p class="fw-light small-text text-muted mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i class="ti-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 fw-normal float-start dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal">Application Error</h6>
                  <p class="fw-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal">Settings</h6>
                  <p class="fw-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal">New user registration</h6>
                  <p class="fw-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <img src="{{ asset('vendor/assets/images/faces/face28.jpg') }}" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="ti-more"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="ti-layout-grid2"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 fw-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 fw-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 ps-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pe-3 fw-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="{{ asset('vendor/assets/images/faces/face1.jpg') }}" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="{{ asset('vendor/assets/images/faces/face2.jpg') }}" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="{{ asset('vendor/assets/images/faces/face3.jpg') }}" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="{{ asset('vendor/assets/images/faces/face4.jpg') }}" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="{{ asset('vendor/assets/images/faces/face5.jpg') }}" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="{{ asset('vendor/assets/images/faces/face6.jpg') }}" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
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
              <span class="menu-title">Widgets</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="ti-palette menu-icon"></i>
              <span class="menu-title">UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/accordions.html">Accordions</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/badges.html">Badges</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/modals.html">Modals</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/progress.html">Progress bar</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/pagination.html">Pagination</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tabs.html">Tabs</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tooltips.html">Tooltips</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
              <i class="ti-view-list menu-icon"></i>
              <span class="menu-title">Advanced UI</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-advanced">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dragula.html">Dragula</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/clipboard.html">Clipboard</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/context-menu.html">Context menu</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/slider.html">Sliders</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/carousel.html">Carousel</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/colcade.html">Colcade</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/loaders.html">Loaders</a></li>
              </ul>
            </div>
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
                  <h4 class="fw-bold">Hi, Welcomeback!</h4>
                  <h4 class="fw-normal mb-0">JustDo Dashboard,</h4>
                </div>
                <div class="col-12 col-xl-7">
                  <div class="d-flex align-items-center justify-content-between flex-wrap">
                    <div class="border-right pe-4 mb-3 mb-xl-0">
                      <p class="text-muted">Balance</p>
                      <h4 class="mb-0 fw-bold">$40079.60 M</h4>
                    </div>
                    <div class="border-right pe-4 mb-3 mb-xl-0">
                      <p class="text-muted">Today’s profit</p>
                      <h4 class="mb-0 fw-bold">$175.00 M</h4>
                    </div>
                    <div class="border-right pe-4 mb-3 mb-xl-0">
                      <p class="text-muted">Purchases</p>
                      <h4 class="mb-0 fw-bold">4006</h4>
                    </div>
                    <div class="pe-3 mb-3 mb-xl-0">
                      <p class="text-muted">Downloads</p>
                      <h4 class="mb-0 fw-bold">4006</h4>
                    </div>
                    <div class="mb-3 mb-xl-0">
                      <button class="btn btn-warning rounded-0 text-white">Downloads</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Number of Meetings</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">34040</h3>
                    <i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                  <p class="mb-0 mt-2 text-warning">2.00% <span class="text-black ms-1"><small>(30 days)</small></span></p>
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Number of Clients</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">47033</h3>
                    <i class="ti-user icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                  <p class="mb-0 mt-2 text-danger">0.22% <span class="text-black ms-1"><small>(30 days)</small></span></p>
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Today’s Bookings</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">40016</h3>
                    <i class="ti-agenda icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                  <p class="mb-0 mt-2 text-success">10.00%<span class="text-black ms-1"><small>(30 days)</small></span></p>
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Total Items Bookings</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">61344</h3>
                    <i class="ti-layers-alt icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                  <p class="mb-0 mt-2 text-success">22.00%<span class="text-black ms-1"><small>(30 days)</small></span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="card bg-primary border-0 position-relative">
                <div class="card-body">
                  <p class="card-title text-white">Performance Overview</p>
                  <div id="performanceOverview" class="carousel slide performance-overview-carousel position-static pt-2" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="row">
                          <div class="col-md-4 item">
                            <div class="d-flex flex-column flex-xl-row mt-4 mt-md-0">
                              <div class="icon icon-a text-white me-3">
                                <i class="ti-cup icon-lg ms-3"></i>
                              </div>
                              <div class="content text-white">
                                <div class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                                  <h3 class="fw-light me-2 mb-1">Revenue</h3>
                                  <h3 class="mb-0">34040</h3>
                                </div>
                                <div class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                                  <h5 class="mb-0">+34040</h5>
                                  <div class="d-flex align-items-center">
                                    <i class="ti-angle-down me-2"></i>
                                    <h5 class="mb-0">0.036%</h5>
                                  </div>  
                                </div>
                                <p class="text-white fw-light pe-lg-2 pe-xl-5">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 item">
                            <div class="d-flex flex-column flex-xl-row mt-5 mt-md-0">
                              <div class="icon icon-b text-white me-3">
                                <i class="ti-bar-chart icon-lg ms-3"></i>
                              </div>
                              <div class="content text-white">
                                <div class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                                  <h3 class="fw-light me-2 mb-1">Sales</h3>
                                  <h3 class="mb-0">$9672471</h3>
                                </div>
                                <div class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                                  <h5 class="mb-0">-7.34567</h5>
                                  <div class="d-flex align-items-center">
                                    <i class="ti-angle-down me-2"></i>
                                    <h5 class="mb-0">2.036%</h5>
                                  </div>  
                                </div>
                                <p class="text-white fw-light pe-lg-2 pe-xl-5">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 item">
                            <div class="d-flex flex-column flex-xl-row mt-5 mt-md-0">
                              <div class="icon icon-c text-white me-3">
                                <i class="ti-shopping-cart-full icon-lg ms-3"></i>
                              </div>
                              <div class="content text-white">
                                <div class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                                  <h3 class="fw-light me-2 mb-1">Purchases</h3>
                                  <h3 class="mb-0">6358</h3>
                                </div>
                                <div class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                                  <h5 class="mb-0">+9082</h5>
                                  <div class="d-flex align-items-center">
                                    <i class="ti-angle-down me-2"></i>
                                    <h5 class="mb-0">35.54%</h5>
                                  </div>  
                                </div>
                                <p class="text-white fw-light pe-lg-2 pe-xl-5">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="row">
                          <div class="col-md-4 item">
                            <div class="d-flex flex-column flex-xl-row mt-4 mt-md-0">
                              <div class="icon icon-a text-white me-3">
                                <i class="ti-cup icon-lg ms-3"></i>
                              </div>
                              <div class="content text-white">
                                <div class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                                  <h3 class="fw-light me-2 mb-1">Clients</h3>
                                  <h3 class="mb-0">49076</h3>
                                </div>
                                <div class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                                  <h5 class="mb-0">+59238</h5>
                                  <div class="d-flex align-items-center">
                                    <i class="ti-angle-down me-2"></i>
                                    <h5 class="mb-0">0.056%</h5>
                                  </div>  
                                </div>
                                <p class="text-white fw-light pe-lg-2 pe-xl-5">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 item">
                            <div class="d-flex flex-column flex-xl-row mt-5 mt-md-0">
                              <div class="icon icon-b text-white me-3">
                                <i class="ti-bar-chart icon-lg ms-3"></i>
                              </div>
                              <div class="content text-white">
                                <div class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                                  <h3 class="fw-light me-2 mb-1">Order</h3>
                                  <h3 class="mb-0">$308656</h3>
                                </div>
                                <div class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                                  <h5 class="mb-0">-6.20967</h5>
                                  <div class="d-flex align-items-center">
                                    <i class="ti-angle-down me-2"></i>
                                    <h5 class="mb-0">2.389%</h5>
                                  </div>  
                                </div>
                                <p class="text-white fw-light pe-lg-2 pe-xl-5">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 item">
                            <div class="d-flex flex-column flex-xl-row mt-5 mt-md-0">
                              <div class="icon icon-c text-white me-3">
                                <i class="ti-shopping-cart-full icon-lg ms-3"></i>
                              </div>
                              <div class="content text-white">
                                <div class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                                  <h3 class="fw-light me-2 mb-1">Purchases</h3>
                                  <h3 class="mb-0">6358</h3>
                                </div>
                                <div class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                                  <h5 class="mb-0">+9082</h5>
                                  <div class="d-flex align-items-center">
                                    <i class="ti-angle-down me-2"></i>
                                    <h5 class="mb-0">35.54%</h5>
                                  </div>  
                                </div>
                                <p class="text-white fw-light pe-lg-2 pe-xl-5">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#performanceOverview" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      
                    </a>
                    <a class="carousel-control-next" href="#performanceOverview" role="button" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Order and Downloads</p>
                  <p class="text-muted fw-light">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                  <div class="d-flex flex-wrap mb-5">
                    <div class="me-5 mt-3">
                      <p class="text-muted">Order value</p>
                      <h3>12.3k</h3>
                    </div>
                    <div class="me-5 mt-3">
                      <p class="text-muted">Orders</p>
                      <h3>14k</h3>
                    </div>
                    <div class="me-5 mt-3">
                      <p class="text-muted">Users</p>
                      <h3>71.56%</h3>
                    </div>
                    <div class="mt-3">
                      <p class="text-muted">Downloads</p>
                      <h3>34040</h3>
                    </div> 
                  </div>
                  <canvas id="order-chart"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Sales Report</p>
                  <p class="text-muted fw-light">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                  <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
                  <canvas id="sales-chart"></canvas>
                </div>
                <div class="card border-right-0 border-left-0 border-bottom-0">
                  <div class="d-flex justify-content-center justify-content-md-end">
                    <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                      <button class="btn btn-lg btn-outline-dark dropdown-toggle rounded-0 border-top-0 border-bottom-0" type="button" id="dropdownMenuDate2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Today
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                        <a class="dropdown-item" href="#">January - March</a>
                        <a class="dropdown-item" href="#">March - June</a>
                        <a class="dropdown-item" href="#">June - August</a>
                        <a class="dropdown-item" href="#">August - November</a>
                      </div>
                    </div>
                    <button class="btn btn-lg btn-outline-light text-primary rounded-0 border-0 d-none d-md-block" type="button"> View all </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">Top Products</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Product</th>
                          <th>Price</th>
                          <th>Date</th>
                          <th>Status</th>
                        </tr>  
                      </thead>
                      <tbody>
                        <tr>
                          <td>Search Engine Marketing</td>
                          <td class="fw-bold">$362</td>
                          <td>21 Sep 2018</td>
                          <td class="fw-medium text-success">Completed</td>
                        </tr>
                        <tr>
                          <td>Search Engine Optimization</td>
                          <td class="fw-bold">$116</td>
                          <td>13 Jun 2018</td>
                          <td class="fw-medium text-success">Completed</td>
                        </tr>
                        <tr>
                          <td>Display Advertising</td>
                          <td class="fw-bold">$551</td>
                          <td>28 Sep 2018</td>
                          <td class="fw-medium text-warning">Pending</td>
                        </tr>
                        <tr>
                          <td>Pay Per Click Advertising</td>
                          <td class="fw-bold">$523</td>
                          <td>30 Jun 2018</td>
                          <td class="fw-medium text-warning">Pending</td>
                        </tr>
                        <tr>
                          <td>E-Mail Marketing</td>
                          <td class="fw-bold">$781</td>
                          <td>01 Nov 2018</td>
                          <td class="fw-medium text-danger">Cancelled</td>
                        </tr>
                        <tr>
                          <td>Referral Marketing</td>
                          <td class="fw-bold">$283</td>
                          <td>20 Mar 2018</td>
                          <td class="fw-medium text-warning">Pending</td>
                        </tr>
                        <tr>
                          <td>Social media marketing</td>
                          <td class="fw-bold">$897</td>
                          <td>26 Oct 2018</td>
                          <td class="fw-medium text-success">Completed</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
  <div class="d-sm-flex justify-content-center justify-content-sm-between">
    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024 <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ms-1"></i></span>
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
  <script src="{{ asset('vendor/assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('vendor/assets/vendors/chart.js')}}/Chart.min.js')}}"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('vendor/assets/js/off-canvas.js')}}"></script>
  <script src="{{ asset('vendor/assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{ asset('vendor/assets/js/template.js')}}"></script>
  <script src="{{ asset('vendor/assets/js/settings.js')}}"></script>
  <script src="{{ asset('vendor/assets/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('vendor/assets/js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from demo.bootstrapdash.com/justdo/themes/vertical-default-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jun 2024 17:38:42 GMT -->
</html>

