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

  <body id="app" class="nav-md">
    <div class="container">
        <div class="left_col">
            <!-- menu logo -->
            @include('layouts.admin.menu_logo')
            <!-- /menu logo -->

            <!-- menu profile quick info -->
            @include('layouts.admin.menu_profile_quick_info')
            <!-- /menu profile quick info -->

            <!-- sidebar menu -->
            @include('layouts.admin.sidebar_menu')
            <!-- /sidebar menu -->
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{ App\UserData::where( 'user_id', Auth::user()->id)->first()->user_photo }}" alt="">{{ Auth::user()->name }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="{{ route('logout') }}" 
                      onclick="
                        event.preventDefault();
                        document.getElementById('logout-form').submit(); ">
                          Logout <i class="fa fa-sign-out pull-right"></i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                        </form>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <div class="right_col" role="main">
          <!-- top tiles -->

          <!-- /top tiles -->

        <!-- page content -->
        
          <div class="page-title">
            <div class="row">
              <div class="col-md-12">
                @yield('content')
              </div>
            </div>
          </div>

        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('js/admin.js') }}"></script>

  </body>
</html>