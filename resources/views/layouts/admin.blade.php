<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')

    <!-- Bootstrap -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

  </head>

  <body id="app">
    <div class="wrapper">
        <!-- header content -->
        <header>
              <!-- menu logo -->
              @include('layouts.admin.menu_logo')
              <!-- /menu logo -->

              <!-- menu profile quick info -->
              @include('layouts.admin.menu_profile_quick_info')
              <!-- /menu profile quick info -->

              <!-- sidebar menu -->
              @include('layouts.admin.sidebar_menu')
              <!-- /sidebar menu -->
        </header>
        <!-- /header content -->

        <!-- page content -->
        <main>

          <!-- top navigation -->
          <nav class="navbar sticky-top">
                <a class="navbar-logo" href="{{ url('/') }}">
                  <img alt="Brand" src="{{ asset('images/logo.svg') }}">
                </a>
                <div class="navbar-menu-button"><i class="fa fa-bars"></i></div>
          </nav>
          <!-- /top navigation -->

          @yield('content')

        </main>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            CRYDEsigN
          </div>
        </footer>
        <!-- /footer content -->
    </div>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('js/admin.js') }}"></script>

  </body>
</html>
