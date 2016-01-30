<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://laravel.dev/css/reset_rtl.css" />
        <link rel="stylesheet" href="http://laravel.dev/css/app.css" />
        <link rel="stylesheet" href="http://laravel.dev/css/icostyles.css" />
        <link rel="stylesheet" href="http://laravel.dev/css/glDatePicker.flatwhite.css" />
        <link rel="stylesheet" href="http://laravel.dev/css/nice-select.css" />
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >
        <link rel="stylesheet" href="https://www.google.com/fonts#UsePlace:use/Collection:Work+Sans:400,500,600" />
        <title>Garten Eden</title>
    </head>
    <body>
    <header class="site_header">
        <nav class="main_nav">
            <ul class="mobile_header main_wrapper">
                <li><a href="#"><h1 class="logo"><span class="icon-logo_mobile"></span></h1></a></li>
                <li><button class="js-menu"><span class="icon-menu"></span></button></li>
            </ul>
            <ul class="menu main_wrapper">
                <li><a href="http://laravel.dev/home">Home</a></li>
                <li><a href="http://laravel.dev/kitchen">Küche</a></li>
                <li><a href="http://laravel.dev/cellar">Keller</a></li>
                <li><a href="#"><h1 class="logo"><span class="icon-logo"></span><br /><span class="icon-logofont"></span>
                        </h1></a></li>
                <li><a href="http://laravel.dev/reservation">Reservieren</a></li>
                <li><a href="http://laravel.dev/about">Über Uns</a></li>
            </ul>
        </nav>
    </header>

            @yield('content')


        <footer>
            <ul class="footer_nav">
                <li><a href="https://www.facebook.com" target="_blank"><span class="icon-facebook"></span></a></li>
                <li><a href="https://www.twitter.com" target="_blank"><span class="icon-twitter"></span></a></li>
                <li><a href="https://www.pinterest.com" target="_blank"><span class="icon-pinterest"></a></span></li>
            </ul>
            <script src="http://laravel.dev/scripts/jquery-2.1.4.min.js"></script>
            <script src="http://laravel.dev/scripts/enquire.js"></script>
            <script src="http://laravel.dev/scripts/glDatePicker.min.js"></script>
            <script src="http://laravel.dev/scripts/jquery.nice-select.min.js"></script>
            <script src="http://laravel.dev/scripts/app.js"></script>
        </footer>
    </body>
</html>
