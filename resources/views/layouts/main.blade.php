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
      <div class="shadow"></div>

      <!-- add css styles -->

      <div class="collapsing"></div>


        <!-- header content -->
        <header>
          <!-- menu logo -->
          @include('layouts.admin.menu_logo')
          <!-- /menu logo -->
          <div class="sidebar_menu">
                @if (Auth::guest())
                @else
                    @include('layouts.admin.menu_profile_quick_info')
                @endif
              <!-- menu profile quick info -->

              <!-- /menu profile quick info -->

              <!-- sidebar menu -->
              @include('layouts.main.sidebar_menu')
              <!-- /sidebar menu -->
              <i class="fa fa-close close_btn"></i>
          </div>
        </header>
        <!-- /header content -->

        <!-- page content -->
        <main>

          <!-- top navigation -->
          <nav class="navbar sticky-top">
                <a class="navbar-logo" href="{{ url('/') }}">
                  <img class="logo" src="{{ url("../fonts/logo.svg") }}" alt="logo">
                </a>
                <div class="navbar-menu-button"><i class="fa fa-bars open_btn"></i></div>
          </nav>
          <!-- /top navigation -->

          @yield('content')

        </main>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="footer_copyright">
                <div class="copyright">
                    <p><strong>F.UN</strong>&nbsp;&nbsp;by&nbsp;&nbsp;<strong>CRYDE</strong>sig<strong>N</strong>. 2015-2017</p>
                </div>
            </div>
            <div class="footer_menu">
                <i class="footer_button fa icon-edit active"></i>
                <i class="footer_button fa icon-star"></i>
                <i class="footer_button fa icon-search"></i>
                @if (Auth::guest())
                    <a class="footer_button" href="{{ route('login') }}"><i class="fa icon-user"></i></a>
                @else
                    <a class="footer_button" href="{{ route('profile') }}"><i class="fa icon-user"></i></a>
                @endif
            </div>
        </footer>
        <!-- /footer content -->
    </div>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('js/admin.js') }}"></script>

  </body>
</html>
