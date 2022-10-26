<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from html.iwthemes.com/mas/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Sep 2022 13:25:17 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, minimum-scale=1,  maximum-scale=1">
        <meta name="Description" content=""/>
        <meta name="author" content=""/>
        <title>Edit my Account</title>
        <meta name="robots" content=""/>
        <meta name="googlebot" content=""/>
        <meta name="google" content="nositelinkssearchbox"/>
        <link href="/css/styles.css" rel="stylesheet" media="screen">
        <link rel="shortcut icon" type="image/ico" href="img/favicon.ico"/>
    </head>

    <body>

        <div id="layout">

            <header>
                <div class="container">
                    <div class="row">
                        <!--Logo-->
                        <div  class="logo">
                            <a href="appointments-reserved.html"><img src="img/logo.png" alt="logo"></a>
                        </div>
                        <!--Logo-->

                        <!--Header tools-->
                        <div  class="tools-top">
                            <!--Avatar-->
                            <div class="avatar-profile">
                              <div class="flat-mega-menu">
                                <ul class="collapse">
                                    <li><a href="#">Administrativo</a>
                                        <ul class="drop-down one-column hover-fade">
                                            <li> <a href="/view_companies">Companias</a> </li>
                                            <li> <a href="/view_users">Usuarios</a> </li>
                                            <li> <a href="/view_patient">Pacientes</a> </li>
                                            <li> <a href="/view_professionals">Profissionais</a> </li>
                                            <li> <a href="/view_specialties">Especialidades</a> </li>
                                            <li> <a href="/view_officies">Escritorio</a> </li>
                                            <li> <a href="/view_times">Tempo</a> </li>
                                            <li> <a href="/view_holidays">Feriados</a> </li> 
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                                <div class="user-edit">
                                    <h4>Jeniffer Martinez,</h4>
                                    <a href="my-account.html">edit profile</a>
                                </div>
                                <div class="avatar-image">
                                    <img src="img/avatar-profile.jpg" alt="avatar profile" class="img-responsive">
                                    <a href="appointments-reserved.html" title="2 Notifications Pending">
                                        <span class="notifications">2</span>
                                    </a>
                                </div>
                            </div>
                            <!--Avatar-->

                            <ul class="tools-help">
                                <li><a href="help.html" title="Help" data-toggle="tooltip" data-placement="bottom"><i class="fa fa-question-circle"></i></a></li>
                                <li><a href="login.html" title="Logout"  data-toggle="tooltip" data-placement="bottom"><i class="fa fa-sign-out"></i></a></li>
                            </ul>
                        </div>
                        <!--Header tools-->
                    </div>
                </div>
            </header>

            <!--Menu-->
            <nav>
                <div class="container">
                    <h4 class="navbar-brand">menu</h4>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                          <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                    </div>

                    <div class="navbar-collapse collapse">

                        <ul class="nav navbar-nav">
                            <li><i class="fa fa-list-alt"></i> <a href="appointments-reserved.html"> appointments reserved</a> </li>
                            <li> <i class="fa fa-address-book-o"></i> <a href="booked-calendar.html"> book appointment</a> </li>
                            <li> <i class="fa fa-file-text-o"></i> <a href="authorizations.html">Pending authorizations</a> </li>
                            <li> <i class="fa fa-files-o"></i> <a href="examinations.html">Result Examinations</a> </li>
                            <li class="active"> <i class="fa fa-pencil"></i> <a href="my-account.html">my account</a> </li>
                        </ul>
                        <ul class="nav navbar-nav visible-mobile">
                            <li> <a href="index.html">Home Landing Page</a> </li>
                            <li> <a href="blog.html">Blog</a> </li>
                            <li> <a href="single-post.html">Single Post</a> </li>
                            <li> <a href="login.html">Login Page</a> </li>
                            <li> <a href="register.html">Register Page</a> </li>
                            <li> <a href="forgot-pass.html">Forgot Password</a> </li>
                            <li> <a href="my-account.html">My Account</a> </li>
                            <li> <a href="help.html">Help Page </a></li>
                            <li> <a href="meet-doctors.html">Find Doctors</a> </li>
                            <li> <a href="privacy-policy.html">Privacy Policy</a> </li>
                            <li> <a href="modify-booked-calendar.html">Modify an Appointment</a> </li>
                            <li> <a href="appointments-reserved-empty.html">Appointments Empty</a> </li>
                            <li> <a href="404-page.html">Error Page - 404</a> </li>
                        </ul>

                        <div class="flat-mega-menu">
                            
                        </div>
                    </div>
                </div>
            </nav>
            <!--Menu-->

            <div class="container">
                <div class="main-container">
                    <!--Form-->
                    <div class="register-form edit-account">

                        <div class="form-login">
                            <form action="/save_times" method="POST" id="form_times" name="form_times">
                                @csrf
                                <input type="hidden" name="id" value="{{@request()->id}}">
                                <!--Personal Information-->
                                <div class="row">

                                <h3>Cadastro</h3>
                                <hr>
                                <div class="datapos">

                                        <!--day-->
                                            <input value="{{@$times->day}}" name="day" id="day" type="date" placeholder="Dia">
                                        <!--day-->

                                        <!--start_time-->
                                            <input value="{{@$times->start_time}}" name="start_time" id="start_time" type="time" placeholder="Hora de início">
                                        <!--start_time-->

                                        <select value="{{@$times->id_company}}" name="id_company" id="id_company">
                                            <option value="2">compania2</option>
                                            <option value="1">Compania1</option>
                                        </select>
                                    
                                </div>

                                    <div class="datapos">           

                                        <!--end_time-->
                                            <input value="{{@$times->end_time}}" name="end_time" id="end_time" type="time" placeholder="Fim do tempo">
                                        <!--end_time-->
                                      
                                        <!--interval-->
                                            <input value="{{@$times->interval}}" name="interval" id="interval" type="number" placeholder="Intervalo">
                                        <!--interval-->

                                        <select value="{{@$times->id_professionals}}" name="id_professionals" id="id_professionals">
                                            <option value="2">Profissional2</option>
                                            <option value="1">Profissional1</option>
                                        </select>

                                    </div>
                                                                            
                                </div>
                                <!--Personal Information-->
                                <button id="btn_times" name="btn_times" class="btn btn-default">Cadastrar</button>

                            </form>

                        </div>
                    </div>
                    <!--Form-->
                </div>
            </div>

            <footer>
                <div class="container">
                    <div class="row">
                        <div class="emergency-number">
                            <p class="phone">(01) + 8000123456</p>
                            <h5><i class="fa fa-phone-square"></i> emergency contact</h5>
                        </div>

                        <div class="emergency-number email">
                            <p>support@iwthemes.com</p>
                            <h5>online consultation <i class="fa fa-medkit"></i></h5>
                        </div>


                        <div class="help-people">
                            <hr class="divisor">

                            <!--Sponsors-->
                            <div class="sponsors">
                                <span><a href="#"><img src="img/sponsor-photodune.png" alt="sponsor"></a></span>
                                <span><a href="#"><img src="img/sponsor-tf.png" alt="sponsor"></a></span>
                                <span><a href="#"><img src="img/sponsor-photodune.png" alt="sponsor"></a></span>
                                <span><a href="#"><img src="img/sponsor-tf.png" alt="sponsor"></a></span>
                            </div>
                            <!--Sponsors-->
                        </div>
                    </div>
                </div>
            </footer>
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
                <p>&copy; 2017 - <a href="http://iwthemes.com/" target="_blank">IwThemes</a>&reg; Envato<img src="img/envalogo.png" alt="envato brand">. All Rights Reserved. <a href="privacy-policy.html">Privacy Policy</a></p>
            </div>
            <!--Copyrights-->

        </div>


        <!-- ======================= JQuery libs =========================== -->
        <!-- jQuery local-->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        <!-- Bootstrap.js-->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-sprockets.js"></script>
        <!-- Main Functions-->
        <script type="text/javascript" src="js/main.js"></script>
    </body>

<!-- Mirrored from html.iwthemes.com/mas/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Sep 2022 13:25:17 GMT -->
</html>
