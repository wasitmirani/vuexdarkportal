
<!DOCTYPE html>

<html class="loaded semi-dark-layout" lang="en" data-textdirection="ltr" style="--vh:2.5px;">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="{{config('app.name')}}">
    <meta name="keywords" content="{{config('app.name')}}">
    <meta name="author" content="Wasit Mirani">
    <title>{{config('app.name')}}</title>
    <link rel="apple-touch-icon" href="{{asset('app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/charts/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/toastr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap-extended.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/colors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/components.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/dark-layout.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/bordered-layout.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/semi-dark-layout.min.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/charts/chart-apex.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/extensions/ext-component-toastr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/app-invoice-list.min.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    @include('layouts.backend.components.header')
    <!-- END: Header-->
<div id="app">


    <!-- BEGIN: Main Menu-->
    @include('layouts.backend.components.menu')

    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Dashboard Analytics Start -->
<section id="dashboard-analytics">
  <div class="row match-height">
    <!-- Greetings Card starts -->
    <div class="col-lg-6 col-md-12 col-sm-12">
      <div class="card card-congratulations">
        <div class="card-body text-center">
          <img
            src="app-assets/images/elements/decore-left.png"
            class="congratulations-img-left"
            alt="card-img-left"
          />
          <img
            src="app-assets/images/elements/decore-right.png"
            class="congratulations-img-right"
            alt="card-img-right"
          />
          <div class="avatar avatar-xl bg-primary shadow">
            <div class="avatar-content">
              <i data-feather="award" class="font-large-1"></i>
            </div>
          </div>
          <div class="text-center">
            <h1 class="mb-1 text-white">Congratulations John,</h1>
            <p class="card-text m-auto w-75">
              You have done <strong>57.6%</strong> more sales today. Check your new badge in your profile.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Greetings Card ends -->

    <!-- Subscribers Chart Card starts -->
    <div class="col-lg-3 col-sm-6 col-12">
      <div class="card">
        <div class="card-header flex-column align-items-start pb-0">
          <div class="avatar bg-light-primary p-50 m-0">
            <div class="avatar-content">
              <i data-feather="users" class="font-medium-5"></i>
            </div>
          </div>
          <h2 class="fw-bolder mt-1">92.6k</h2>
          <p class="card-text">Subscribers Gained</p>
        </div>
        <div id="gained-chart"></div>
      </div>
    </div>
    <!-- Subscribers Chart Card ends -->

    <!-- Orders Chart Card starts -->
    <div class="col-lg-3 col-sm-6 col-12">
      <div class="card">
        <div class="card-header flex-column align-items-start pb-0">
          <div class="avatar bg-light-warning p-50 m-0">
            <div class="avatar-content">
              <i data-feather="package" class="font-medium-5"></i>
            </div>
          </div>
          <h2 class="fw-bolder mt-1">38.4K</h2>
          <p class="card-text">Orders Received</p>
        </div>
        <div id="order-chart"></div>
      </div>
    </div>
    <!-- Orders Chart Card ends -->
  </div>

  <div class="row match-height">
    <!-- Avg Sessions Chart Card starts -->
    <div class="col-lg-6 col-12">
      <div class="card">
        <div class="card-body">
          <div class="row pb-50">
            <div class="col-sm-6 col-12 d-flex justify-content-between flex-column order-sm-1 order-2 mt-1 mt-sm-0">
              <div class="mb-1 mb-sm-0">
                <h2 class="fw-bolder mb-25">2.7K</h2>
                <p class="card-text fw-bold mb-2">Avg Sessions</p>
                <div class="font-medium-2">
                  <span class="text-success me-25">+5.2%</span>
                  <span>vs last 7 days</span>
                </div>
              </div>
              <button type="button" class="btn btn-primary">View Details</button>
            </div>
            <div class="col-sm-6 col-12 d-flex justify-content-between flex-column text-end order-sm-2 order-1">
              <div class="dropdown chart-dropdown">
                <button
                  class="btn btn-sm border-0 dropdown-toggle p-50"
                  type="button"
                  id="dropdownItem5"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Last 7 Days
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownItem5">
                  <a class="dropdown-item" href="#">Last 28 Days</a>
                  <a class="dropdown-item" href="#">Last Month</a>
                  <a class="dropdown-item" href="#">Last Year</a>
                </div>
              </div>
              <div id="avg-sessions-chart"></div>
            </div>
          </div>
          <hr />
          <div class="row avg-sessions pt-50">
            <div class="col-6 mb-2">
              <p class="mb-50">Goal: $100000</p>
              <div class="progress progress-bar-primary" style="height: 6px">
                <div
                  class="progress-bar"
                  role="progressbar"
                  aria-valuenow="50"
                  aria-valuemin="50"
                  aria-valuemax="100"
                  style="width: 50%"
                ></div>
              </div>
            </div>
            <div class="col-6 mb-2">
              <p class="mb-50">Users: 100K</p>
              <div class="progress progress-bar-warning" style="height: 6px">
                <div
                  class="progress-bar"
                  role="progressbar"
                  aria-valuenow="60"
                  aria-valuemin="60"
                  aria-valuemax="100"
                  style="width: 60%"
                ></div>
              </div>
            </div>
            <div class="col-6">
              <p class="mb-50">Retention: 90%</p>
              <div class="progress progress-bar-danger" style="height: 6px">
                <div
                  class="progress-bar"
                  role="progressbar"
                  aria-valuenow="70"
                  aria-valuemin="70"
                  aria-valuemax="100"
                  style="width: 70%"
                ></div>
              </div>
            </div>
            <div class="col-6">
              <p class="mb-50">Duration: 1yr</p>
              <div class="progress progress-bar-success" style="height: 6px">
                <div
                  class="progress-bar"
                  role="progressbar"
                  aria-valuenow="90"
                  aria-valuemin="90"
                  aria-valuemax="100"
                  style="width: 90%"
                ></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Avg Sessions Chart Card ends -->

    <!-- Support Tracker Chart Card starts -->
    <div class="col-lg-6 col-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between pb-0">
          <h4 class="card-title">Support Tracker</h4>
          <div class="dropdown chart-dropdown">
            <button
              class="btn btn-sm border-0 dropdown-toggle p-50"
              type="button"
              id="dropdownItem4"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Last 7 Days
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownItem4">
              <a class="dropdown-item" href="#">Last 28 Days</a>
              <a class="dropdown-item" href="#">Last Month</a>
              <a class="dropdown-item" href="#">Last Year</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-2 col-12 d-flex flex-column flex-wrap text-center">
              <h1 class="font-large-2 fw-bolder mt-2 mb-0">163</h1>
              <p class="card-text">Tickets</p>
            </div>
            <div class="col-sm-10 col-12 d-flex justify-content-center">
              <div id="support-trackers-chart"></div>
            </div>
          </div>
          <div class="d-flex justify-content-between mt-1">
            <div class="text-center">
              <p class="card-text mb-50">New Tickets</p>
              <span class="font-large-1 fw-bold">29</span>
            </div>
            <div class="text-center">
              <p class="card-text mb-50">Open Tickets</p>
              <span class="font-large-1 fw-bold">63</span>
            </div>
            <div class="text-center">
              <p class="card-text mb-50">Response Time</p>
              <span class="font-large-1 fw-bold">1d</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Support Tracker Chart Card ends -->
  </div>

  <div class="row match-height">
    <!-- Timeline Card -->
    <div class="col-lg-4 col-12">
      <div class="card card-user-timeline">
        <div class="card-header">
          <div class="d-flex align-items-center">
            <i data-feather="list" class="user-timeline-title-icon"></i>
            <h4 class="card-title">User Timeline</h4>
          </div>
        </div>
        <div class="card-body">
          <ul class="timeline ms-50">
            <li class="timeline-item">
              <span class="timeline-point timeline-point-indicator"></span>
              <div class="timeline-event">
                <h6>12 Invoices have been paid</h6>
                <p>Invoices are paid to the company</p>
                <div class="d-flex align-items-center">
                  <img class="me-1" src="app-assets/images/icons/json.png" alt="data.json" height="23" />
                  <h6 class="more-info mb-0">data.json</h6>
                </div>
              </div>
            </li>
            <li class="timeline-item">
              <span class="timeline-point timeline-point-warning timeline-point-indicator"></span>
              <div class="timeline-event">
                <h6>Client Meeting</h6>
                <p>Project meeting with Carl</p>
                <div class="d-flex align-items-center">
                  <div class="avatar me-50">
                    <img
                      src="app-assets/images/portrait/small/avatar-s-9.jpg"
                      alt="Avatar"
                      width="38"
                      height="38"
                    />
                  </div>
                  <div class="more-info">
                    <h6 class="mb-0">Carl Roy (Client)</h6>
                    <p class="mb-0">CEO of Infibeam</p>
                  </div>
                </div>
              </div>
            </li>
            <li class="timeline-item">
              <span class="timeline-point timeline-point-info timeline-point-indicator"></span>
              <div class="timeline-event">
                <h6>Create a new project</h6>
                <p>Add files to new design folder</p>
                <div class="avatar-group">
                  <div
                    data-bs-toggle="tooltip"
                    data-popup="tooltip-custom"
                    data-bs-placement="bottom"
                    title="Billy Hopkins"
                    class="avatar pull-up"
                  >
                    <img
                      src="app-assets/images/portrait/small/avatar-s-9.jpg"
                      alt="Avatar"
                      width="33"
                      height="33"
                    />
                  </div>
                  <div
                    data-bs-toggle="tooltip"
                    data-popup="tooltip-custom"
                    data-bs-placement="bottom"
                    title="Amy Carson"
                    class="avatar pull-up"
                  >
                    <img
                      src="app-assets/images/portrait/small/avatar-s-6.jpg"
                      alt="Avatar"
                      width="33"
                      height="33"
                    />
                  </div>
                  <div
                    data-bs-toggle="tooltip"
                    data-popup="tooltip-custom"
                    data-bs-placement="bottom"
                    title="Brandon Miles"
                    class="avatar pull-up"
                  >
                    <img
                      src="app-assets/images/portrait/small/avatar-s-8.jpg"
                      alt="Avatar"
                      width="33"
                      height="33"
                    />
                  </div>
                  <div
                    data-bs-toggle="tooltip"
                    data-popup="tooltip-custom"
                    data-bs-placement="bottom"
                    title="Daisy Weber"
                    class="avatar pull-up"
                  >
                    <img
                      src="app-assets/images/portrait/small/avatar-s-7.jpg"
                      alt="Avatar"
                      width="33"
                      height="33"
                    />
                  </div>
                  <div
                    data-bs-toggle="tooltip"
                    data-popup="tooltip-custom"
                    data-bs-placement="bottom"
                    title="Jenny Looper"
                    class="avatar pull-up"
                  >
                    <img
                      src="app-assets/images/portrait/small/avatar-s-20.jpg"
                      alt="Avatar"
                      width="33"
                      height="33"
                    />
                  </div>
                </div>
              </div>
            </li>
            <li class="timeline-item">
              <span class="timeline-point timeline-point-danger timeline-point-indicator"></span>
              <div class="timeline-event">
                <h6>Update project for client</h6>
                <p class="mb-0">Update files as per new design</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!--/ Timeline Card -->

    <!-- Sales Stats Chart Card starts -->
    <div class="col-lg-4 col-md-6 col-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-start pb-1">
          <div>
            <h4 class="card-title mb-25">Sales</h4>
            <p class="card-text">Last 6 months</p>
          </div>
          <div class="dropdown chart-dropdown">
            <i data-feather="more-vertical" class="font-medium-3 cursor-pointer" data-bs-toggle="dropdown"></i>
            <div class="dropdown-menu dropdown-menu-end">
              <a class="dropdown-item" href="#">Last 28 Days</a>
              <a class="dropdown-item" href="#">Last Month</a>
              <a class="dropdown-item" href="#">Last Year</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="d-inline-block me-1">
            <div class="d-flex align-items-center">
              <i data-feather="circle" class="font-small-3 text-primary me-50"></i>
              <h6 class="mb-0">Sales</h6>
            </div>
          </div>
          <div class="d-inline-block">
            <div class="d-flex align-items-center">
              <i data-feather="circle" class="font-small-3 text-info me-50"></i>
              <h6 class="mb-0">Visits</h6>
            </div>
          </div>
          <div id="sales-visit-chart" class="mt-50"></div>
        </div>
      </div>
    </div>
    <!-- Sales Stats Chart Card ends -->

    <!-- App Design Card -->
    <div class="col-lg-4 col-md-6 col-12">
      <div class="card card-app-design">
        <div class="card-body">
          <span class="badge badge-light-primary">03 Sep, 20</span>
          <h4 class="card-title mt-1 mb-75 pt-25">App design</h4>
          <p class="card-text font-small-2 mb-2">
            You can Find Only Post and Quotes Related to IOS like ipad app design, iphone app design
          </p>
          <div class="design-group mb-2 pt-50">
            <h6 class="section-label">Team</h6>
            <span class="badge badge-light-warning me-1">Figma</span>
            <span class="badge badge-light-primary">Wireframe</span>
          </div>
          <div class="design-group pt-25">
            <h6 class="section-label">Members</h6>
            <div class="avatar">
              <img src="app-assets/images/portrait/small/avatar-s-9.jpg" width="34" height="34" alt="Avatar" />
            </div>
            <div class="avatar bg-light-danger">
              <div class="avatar-content">PI</div>
            </div>
            <div class="avatar">
              <img
                src="app-assets/images/portrait/small/avatar-s-14.jpg"
                width="34"
                height="34"
                alt="Avatar"
              />
            </div>
            <div class="avatar">
              <img src="app-assets/images/portrait/small/avatar-s-7.jpg" width="34" height="34" alt="Avatar" />
            </div>
            <div class="avatar bg-light-secondary">
              <div class="avatar-content">AL</div>
            </div>
          </div>
          <div class="design-planning-wrapper mb-2 py-75">
            <div class="design-planning">
              <p class="card-text mb-25">Due Date</p>
              <h6 class="mb-0">12 Apr, 21</h6>
            </div>
            <div class="design-planning">
              <p class="card-text mb-25">Budget</p>
              <h6 class="mb-0">$49251.91</h6>
            </div>
            <div class="design-planning">
              <p class="card-text mb-25">Cost</p>
              <h6 class="mb-0">$840.99</h6>
            </div>
          </div>
          <button type="button" class="btn btn-primary w-100">Join Team</button>
        </div>
      </div>
    </div>
    <!--/ App Design Card -->
  </div>

  <!-- List DataTable -->
  <div class="row">
    <div class="col-12">
      <div class="card invoice-list-wrapper">
        <div class="card-datatable table-responsive">
          <table class="invoice-list-table table">
            <thead>
              <tr>
                <th></th>
                <th>#</th>
                <th><i data-feather="trending-up"></i></th>
                <th>Client</th>
                <th>Total</th>
                <th class="text-truncate">Issued Date</th>
                <th>Balance</th>
                <th>Invoice Status</th>
                <th class="cell-fit">Actions</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!--/ List DataTable -->
</section>
<!-- Dashboard Analytics end -->

        </div>
      </div>
    </div>
    <!-- END: Content-->
    </div>

    <!-- BEGIN: Customizer-->
    <div class="customizer d-none d-md-block"><a class="customizer-toggle d-flex align-items-center justify-content-center" href="#"><i class="spinner" data-feather="settings"></i></a><div class="customizer-content">
  <!-- Customizer header -->
  <div class="customizer-header px-2 pt-1 pb-0 position-relative">
    <h4 class="mb-0">Theme Customizer</h4>
    <p class="m-0">Customize & Preview in Real Time</p>

    <a class="customizer-close" href="#"><i data-feather="x"></i></a>
  </div>

  <hr />

  <!-- Styling & Text Direction -->
  <div class="customizer-styling-direction px-2">
    <p class="fw-bold">Skin</p>
    <div class="d-flex">
      <div class="form-check me-1">
        <input
          type="radio"
          id="skinlight"
          name="skinradio"
          class="form-check-input layout-name"
          checked
          data-layout=""
        />
        <label class="form-check-label" for="skinlight">Light</label>
      </div>
      <div class="form-check me-1">
        <input
          type="radio"
          id="skinbordered"
          name="skinradio"
          class="form-check-input layout-name"
          data-layout="bordered-layout"
        />
        <label class="form-check-label" for="skinbordered">Bordered</label>
      </div>
      <div class="form-check me-1">
        <input
          type="radio"
          id="skindark"
          name="skinradio"
          class="form-check-input layout-name"
          data-layout="dark-layout"
        />
        <label class="form-check-label" for="skindark">Dark</label>
      </div>
      <div class="form-check">
        <input
          type="radio"
          id="skinsemidark"
          name="skinradio"
          class="form-check-input layout-name"
          data-layout="semi-dark-layout"
        />
        <label class="form-check-label" for="skinsemidark">Semi Dark</label>
      </div>
    </div>
  </div>

  <hr />

  <!-- Menu -->
  <div class="customizer-menu px-2">
    <div id="customizer-menu-collapsible" class="d-flex">
      <p class="fw-bold me-auto m-0">Menu Collapsed</p>
      <div class="form-check form-check-primary form-switch">
        <input type="checkbox" class="form-check-input" id="collapse-sidebar-switch" />
        <label class="form-check-label" for="collapse-sidebar-switch"></label>
      </div>
    </div>
  </div>
  <hr />

  <!-- Layout Width -->
  <div class="customizer-footer px-2">
    <p class="fw-bold">Layout Width</p>
    <div class="d-flex">
      <div class="form-check me-1">
        <input type="radio" id="layout-width-full" name="layoutWidth" class="form-check-input" checked />
        <label class="form-check-label" for="layout-width-full">Full Width</label>
      </div>
      <div class="form-check me-1">
        <input type="radio" id="layout-width-boxed" name="layoutWidth" class="form-check-input" />
        <label class="form-check-label" for="layout-width-boxed">Boxed</label>
      </div>
    </div>
  </div>
  <hr />

  <!-- Navbar -->
  <div class="customizer-navbar px-2">
    <div id="customizer-navbar-colors">
      <p class="fw-bold">Navbar Color</p>
      <ul class="list-inline unstyled-list">
        <li class="color-box bg-white border selected" data-navbar-default=""></li>
        <li class="color-box bg-primary" data-navbar-color="bg-primary"></li>
        <li class="color-box bg-secondary" data-navbar-color="bg-secondary"></li>
        <li class="color-box bg-success" data-navbar-color="bg-success"></li>
        <li class="color-box bg-danger" data-navbar-color="bg-danger"></li>
        <li class="color-box bg-info" data-navbar-color="bg-info"></li>
        <li class="color-box bg-warning" data-navbar-color="bg-warning"></li>
        <li class="color-box bg-dark" data-navbar-color="bg-dark"></li>
      </ul>
    </div>

    <p class="navbar-type-text fw-bold">Navbar Type</p>
    <div class="d-flex">
      <div class="form-check me-1">
        <input type="radio" id="nav-type-floating" name="navType" class="form-check-input" checked />
        <label class="form-check-label" for="nav-type-floating">Floating</label>
      </div>
      <div class="form-check me-1">
        <input type="radio" id="nav-type-sticky" name="navType" class="form-check-input" />
        <label class="form-check-label" for="nav-type-sticky">Sticky</label>
      </div>
      <div class="form-check me-1">
        <input type="radio" id="nav-type-static" name="navType" class="form-check-input" />
        <label class="form-check-label" for="nav-type-static">Static</label>
      </div>
      <div class="form-check">
        <input type="radio" id="nav-type-hidden" name="navType" class="form-check-input" />
        <label class="form-check-label" for="nav-type-hidden">Hidden</label>
      </div>
    </div>
  </div>
  <hr />

  <!-- Footer -->
  <div class="customizer-footer px-2">
    <p class="fw-bold">Footer Type</p>
    <div class="d-flex">
      <div class="form-check me-1">
        <input type="radio" id="footer-type-sticky" name="footerType" class="form-check-input" />
        <label class="form-check-label" for="footer-type-sticky">Sticky</label>
      </div>
      <div class="form-check me-1">
        <input type="radio" id="footer-type-static" name="footerType" class="form-check-input" checked />
        <label class="form-check-label" for="footer-type-static">Static</label>
      </div>
      <div class="form-check me-1">
        <input type="radio" id="footer-type-hidden" name="footerType" class="form-check-input" />
        <label class="form-check-label" for="footer-type-hidden">Hidden</label>
      </div>
    </div>
  </div>
</div>

    </div>
    <!-- End: Customizer-->

    <!-- Buynow Button-->
    {{-- <div class="buy-now"><a href="https://1.envato.market/vuexy_admin" target="_blank" class="btn btn-danger">Buy Now</a> --}}

    </div>

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
      <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT  &copy; 2021<a class="ms-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-end d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
    </footer>

    <!-- END: Footer-->

    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/extensions/toastr.min.js')}}"></script>


    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('app-assets/js/core/app.js')}}"></script>
    <script src="{{asset('app-assets/js/scripts/customizer.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('app-assets/js/scripts/pages/dashboard-analytics.js')}}"></script>
    <script src="{{asset('app-assets/js/scripts/pages/app-invoice-list.min.js')}}"></script>
    <!-- END: Page JS-->
    <script src="{{asset('app-assets/js/scripts/pages/app-invoice-list.min.js')}}"></script>
    <!-- Scripts -->

    <script>
        @auth
            window.user = {!! json_encode(Auth::user(), true) !!};
        @else
            window.user = [];
            window.Permissions = [];
        @endauth
        @if(session('login')=="true" || session('login')==true)
        setTimeout(function() {
        toastr['success'](
        'You have successfully logged in to {{config('app.name')}}.',
        '👋 Welcome {{Auth::user()->name}}!', {
            closeButton: true,
             tapToDismiss: false
        }
        );
        }, 1000);
        @php
        session(['login' => '']);
        @endphp
        @endif
     </script>
     <script src="{{ asset('js/app.js') }}" ></script>
    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 12, height: 12 });
        }
      })
    </script>
  </body>
  <!-- END: Body-->
</html>
