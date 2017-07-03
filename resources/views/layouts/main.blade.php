<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')
    @yield('meta')

    <!-- Styles -->
    <style><?php include(public_path().'\css\main.css'); ?></style>

</head>
<body>
    <div id="app" >

        <div class="shadow"></div>

        <header>
            <div class="mobile_nav">
                <a href="{{ url('/') }}"><div class="header_logo"></div></a>
                <div class="menu_button">
                    <i id="menu_open_button" class=" icon-menu"></i>
                </div>
            </div>
            <div class="main_nav">
                <div class="header_logo">
                    <a href="{{ url('/') }}"><div class="header_logo_img"></div></a>
                    <div class="header_logo_text">Энциклопедия фантастических вселенных</div>
                </div>
                <div class="header_menu">
                    <div id="cssmenu">
                            <ul>
                                <li class="active"><a href="index.html">Новости</a>
                                </li>
                                <li class="has-sub"><a href="universes.html">Вселенные</a>
                                    <ul>
                                        <li class="has-sub"><a href="universe.html">Вселенная</a>
                                            <ul>
                                                <li class="has-sub"><a href="books.html">Книги</a>
                                                    <ul>
                                                        <li> <a href="book.html">Книга</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="has-sub"><a href="books.html">Фильмы</a>
                                                    <ul>
                                                        <li> <a href="book.html">Фильм</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-sub"> <a href="#">Создатели</a>
                                    <ul>
                                        <li> <a href="#">Авторы</a>
                                        </li>
                                        <li><a href="#">Компании</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Жанры фантастики</a>
                                </li>
                                <li><a href="about.html">О проекте</a>
                                </li>
                            </ul>
                    </div>
                </div>
                <div class="menu_button">
                    <i id="menu_close_button" class= icon-favorite"></i>
                </div>
            </div>
        </header>

        <main>
            <div class="content_title">
                @yield('page_title')
            </div>
            <div class="content">
                <div class="column">
                    @yield('content')
                </div>
            </div>
            <div class="content_footer">
                <div class="social_pages_text">Присоединяйтесь к нам</div>
                <div class="social_pages">
                    <div class="social_button facebook icon-facebook"></div>
                    <div class="social_button vk icon-vk"></div>
                    <div class="social_button twitter icon-twitter"></div>
                    <div class="social_button googleplus icon-googleplus"></div>
                </div>
             </div>
        </main>

        <footer>
            <div class="footer_copyright">
                <div class="copyright">
                    <p><strong>F.UN</strong>&nbsp;&nbsp;by&nbsp;&nbsp;<strong>CRYDE</strong>sig<strong>N</strong>. 2015-2016</p>
                </div>
            </div>
            <div class="footer_menu">
                <i class="footer_button icon-edit active"></i>
                <i class="footer_button icon-favorite"></i>
                <i class="footer_button icon-search"></i>
                @if (Auth::guest())
                    <a class="footer_button" href="{{ route('login') }}"><i class="icon-profile"></i></a>
                @else
                    <a class="footer_button" href="{{ route('profile') }}"><i class="icon-profile"></i></a>
                @endif
            </div>
        </footer>

        @yield('shema')

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
