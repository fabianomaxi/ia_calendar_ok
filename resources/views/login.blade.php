<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, minimum-scale=1,  maximum-scale=1">
        <meta name="Description" content=""/>
        <meta name="author" content=""/>
        <title>Welcome to Login</title>
        <meta name="robots" content=""/>
        <meta name="googlebot" content=""/>
        <meta name="google" content="nositelinkssearchbox"/>
        <link href="{{ url('/') }}/css/styles.css" rel="stylesheet" media="screen">
        <link rel="shortcut icon" type="image/ico" href="{{ url('/') }}/img/favicon.ico"/>
    </head>

    <body class="panel-access">

        <div id="layout">
             <!--Login-->
                <div class="login">
                    <div class="container">
                        <div class="login-form">
                            <div class="data-form">
                                <!--Logo-->
                                <a href="index.html" class="logo"><img src="{{ url('/') }}/img/logo-simple.png" alt="logo" class="img-responsive"></a>
                                <!--Logo-->

                                <!--Form-->
                                <form class="form-login" action="/valida-user" method="post">
                                    @csrf
                                    <div class="icon-data">
                                        <i class="fa fa-address-card"></i>
                                    </div>
                                    <input type="email" placeholder="E-mail" name="email" id="email" required>


                                    <div class="icon-data">
                                        <i class="fa fa-key"></i>
                                    </div>
                                    <input type="password" placeholder="Senha" name="password" id="password" required>

                                    {{-- <a href="appointments-reserved.html" class="btn btn-default" role="button">Acessar Painel</a> --}}
                                    <button class="btn btn-default" type="submit">Login</button>
                                </form>
                                <!--Form-->

                                <a href="register.html" class="btn btn-red register" role="button">Quero me Cadastrar</a>
                                <span class="help">
                                    <a href="forgot-pass.html">¿Forgot Password?</a>
                                    <a href="help.html" class="help-link">¿Help?</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

            <!--Copyrights-->
            <div class="copyrights">
                <!--Meet Social-->
                <div class="meet-social">
                    <span><a href="https://www.facebook.com/IwThemesTF" target="_blank"><i class="fa fa-facebook-square"></i></a></span>
                    <span><a href="https://twitter.com/iwthemes" target="_blank"><i class="fa fa-twitter-square"></i></a></span>
                    <span><a href="https://www.youtube.com/channel/UCEb3nAep6tYiAkZpqi0Kzew" target="_blank"><i class="fa fa-youtube-square"></i></a></span>
                    <span><a href="#"><i class="fa fa-linkedin-square"></i></a></span>
                </div>
                <!--Meet Social-->
                <p>&copy; 2021 - <a href="http://iamedicine.com.br/" target="_blank">IA Medicine</a> - <href="privacy-policy.html">Privacy Policy</a></p>
            </div>
            <!--Copyrights-->
             <!--Login-->
        </div>


        <!-- ======================= JQuery libs =========================== -->
        <!-- jQuery local-->
        <script type="text/javascript" src="{{ url('/') }}/js/jquery.js"></script>
        <script type="text/javascript" src="{{ url('/') }}/js/jquery-ui.min.js"></script>

        <!-- Bootstrap.js-->
        <script type="text/javascript" src="{{ url('/') }}/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="{{ url('/') }}/js/bootstrap-sprockets.js"></script>
    </body>

</html>
