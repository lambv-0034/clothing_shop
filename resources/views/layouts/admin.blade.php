<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>                                                                                                                                                                                                                                                              

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href="{{ asset('bower_components/material-design-icons/iconfont/material-icons.css') }}" rel="stylesheet">
  <!-- Styles -->
  <link href="{{ asset('bower_components/Font-Awesome/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/material/material-dashboard.css?v=2.1.1') }}" rel="stylesheet">
  <link href="{{asset('bower_components/bootstrap-sweetalert/dist/sweetalert.css')}}" rel="stylesheet">     
  <link rel="stylesheet" href="{{ asset('css/bs-datatable.css') }}" type="text/css" />
  <script src="js/bs-datatable.js"></script>
  
  @yield('styles')
</head>

<body>
  @include('sweetalert::alert')
  <div id="wrapper" class="clearfix">
    @yield('page-title')
  </div>
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="images/sidebar-1.jpg">
      <div class="logo"><a href="#" class="simple-text logo-normal">Clothing Shop</a></div>
        <div class="sidebar-wrapper">
          <ul class="nav">
            <li class="nav-item"><a class="nav-link" href="./dashboard">
              <i class="material-icons">dashboard</i><p>Dashboard</p></a>
            </li>
            <li class="nav-item "><a class="nav-link" href="#">
              <i class="material-icons">person</i><p>User Manage</p></a>
            </li>
            <li class="nav-item "><a class="nav-link" href="#">
              <i class="material-icons">content_paste</i><p>Product Manage</p></a>
            </li>
            <li class="nav-item "><a class="nav-link" href="{{route('category.index')}}">
              <i class="material-icons">library_books</i><p>Category Manage</p></a>
            </li>
            <li class="nav-item "><a class="nav-link" href="./icons.html">
              <i class="material-icons">bubble_chart</i><p>Revenue Manage</p></a>
            </li>
            <li class="nav-item "><a class="nav-link" href="./map.html">
              <i class="material-icons">location_ons</i><p>Order Confirmation</p></a>
            </li>
            <li class="nav-item "><a class="nav-link" href="#">
              <i class="material-icons">language</i><p>Create by Naitei PHP</p></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
          <div class="container-fluid">
            <div class="navbar-wrapper"></div>
            <div class="collapse navbar-collapse justify-content-end">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">notifications</i><span class="notification">5</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Mike John responded to your email</a>
                    <a class="dropdown-item" href="#">You have 5 new tasks</a>
                    <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                    <a class="dropdown-item" href="#">Another Notification</a>
                    <a class="dropdown-item" href="#">Another One</a>
                  </div>
                </li>
                
                <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"><i class="material-icons">person</i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="#">Log out</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- End Navbar -->
        </nav>
        <div class="content">
          @yield('content')
        </div>
        <footer class="footer">
          <div class="container-fluid">
            <div class="copyright float-right">&copy;
              <script>
                document.write(new Date().getFullYear())
              </script>, made with <i class="material-icons">favorite</i> by
              <a href="#" target="_blank">Naitei PHP </a>
            </div>
          </div>
        </footer>
      </div>
  </div>
  <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('js/core/popper.min.js') }}"></script>
  <script src="{{ asset('js/bs-datatable.js') }}"></script>
  <script src="{{ asset('bower_components/jquery.counterup/jquery.counterup.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
  <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <script src="{{asset('bower_components/bootstrap-sweetalert/dist/sweetalert.min.js')}}"></script>
  <script>src="{{asset('bower_components/bootstrap-sweetalert/dist/sweetalert.js')}}"</script>
  @yield('script')
</body>

</html>