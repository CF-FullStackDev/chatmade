<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Chatmade</title>

        <link rel="icon" href="{{asset('favicon.png')}}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="login-background">

        <div class="wrapper">

            <div class="container container-margin">
                <div class="login-page-left">
                    <img class="logo" src="{{asset('img/logo.png')}}">
                    <span>The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymph</span>
                    <div class="button-center">
                        <a class="login-btn" href="btn btn-primary">Continue as Jots</a>
                    </div>
                    <a class="login-classmade-btn" href="">Log in Classmade</a>
                </div>

                <div class="login-page-right">
                    <img src="{{asset('img/mock.png')}}">
                </div>
            </div>

            <footer>
                <ul class="menu">
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Advertising</a></li>
                    <li><a href="#">Ad Choices</a></li>
                    <li><a href="#">Cookies</a></li>
                    <li><a href="#">Classmade ©2017</a></li>
                </ul>
            </footer>

        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/jquery.scrollbar.js') }}"></script>
    </body>
</html>
