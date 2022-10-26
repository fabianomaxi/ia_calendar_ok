<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, minimum-scale=1,  maximum-scale=1">
        <meta name="Description" content=""/>
        <meta name="author" content=""/>
        <title>List Of Appointments</title>
        <meta name="robots" content=""/>
        <meta name="googlebot" content=""/>
        <meta name="google" content="nositelinkssearchbox"/>
        <link href="{{ url('/') }}/css/styles.css" rel="stylesheet" media="screen">
        <link rel="shortcut icon" type="image/ico" href="{{ url('/') }}/img/favicon.ico"/>
        
    </head>

    <body>
        <div id="layout">
            <header>
                <div class="container">
                    
                    <div class="row">
                        
                        <!--Logo-->
                        <div  class="logo">
                            <a href="appointments-reserved.html"><img src="{{ url('/') }}/img/logo.png" alt="logo"></a>
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
                                                <li> <a href="/view_patients">Pacientes</a> </li>
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
                                    <h4>{{request()->session()->get('name');}}</h4>
                                </div>
                                <div class="avatar-image">
                                    <img src="{{ url('/') }}/img/avatar-profile.jpg" alt="avatar profile" class="img-responsive">
                                </div>
                            </div>
                            <!--Avatar-->

                            <ul class="tools-help">
                                <li><a href="help.html" title="Help" data-toggle="tooltip" data-placement="bottom"><i class="fa fa-question-circle"></i></a></li>
                                <li><a href="/exit" title="Logout"  data-toggle="tooltip" data-placement="bottom"><i class="fa fa-sign-out"></i></a></li>
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
                            <li class="active"><i class="fa fa-list-alt"></i> <a href="appointments-reserved.html"> appointments reserved</a> </li>
                            <li> <i class="fa fa-address-book-o"></i> <a href="booked-calendar.html"> book appointment</a> </li>
                            <li> <i class="fa fa-file-text-o"></i> <a href="authorizations.html">Pending authorizations</a> </li>
                            <li> <i class="fa fa-files-o"></i> <a href="examinations.html">Result Examinations</a> </li>
                            <li> <i class="fa fa-pencil"></i> <a href="my-account.html">my account</a> </li>
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
                    </div>
                </div>
            </nav>
            <!--Menu-->

            <section class="container">
                <div class="main-container">
                    <div class="row">
                        <div class="listed">
                            <div class="row">
                                <div class="filters">
                                <h4>Escritorio</h4>
                                    <ul class="list-unstyled">
                                        <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="highest to lowest"><i class="fa fa-arrow-down" aria-hidden="true"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="lowest to highest"><i class="fa fa-arrow-up" aria-hidden="true"></i></a></li>
                                        <li>
                                            <select>
                                                <option>Type of Appointment</option>
                                                <option>General</option>
                                                <option>Specialist</option>
                                            </select>
                                        </li>
                                        <span class="sla">
                                          <a class="btn btn-green btn-small" href="show_officies">Novo Cadastro</a>
                                        </span>  
                                    </ul>
                                  </div>
                              </div>

                    @foreach ($officies as $office)
                        <div class="row">
                            <!--Item-->
                            <div class="col-lg-6">
                                <div class="item-meeting">
                                    <p>{{$office->name}}</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item-meeting">
                                    <p>{{$office->description}}</p>
                                </div>
                                <a href="delete_officies/{{$office->id_office}}" onclick="return confirm('Deseja deletar?')"><button type="button" class="btn btn-danger">Deletar</button></a>
                                <a href="view_officies/{{$office->id_office}}"><button type="button" class="btn btn-edit">Editar</button></a>
                            </div>
                            <!--Item-->
                        </div>
                    @endforeach

                        </div>

                        <!--Aside-->
                        <aside>
                            <div class="elements-aside gray-color">
                                <ul>
                                    <li class="color-1">
                                        <i class="fa fa-heartbeat" aria-hidden="true"></i>
                                        <h4>Emergency Case</h4>
                                        <p>If you need a doctor urgently outside of medicenter opening hours, call emergency appointment number for emergency service.</p>
                                    </li>
                                    <li class="color-2">
                                        <i class="fa fa-hourglass-half" aria-hidden="true"></i>
                                        <h4>Working Time</h4>
                                        <p>Monday to Friday <span> 05:00am to 10:00pm</span></p>
                                        <p>Weekends <span> 09:00am to 12:00pm</span></p>
                                    </li>
                                    <li class="color-1">
                                        <i class="fa fa-id-badge" aria-hidden="true"></i>
                                        <h4>Medical Services</h4>
                                        <p>If you need a doctor urgently outside of medicenter opening hours, call emergency appointment number for emergency service.</p>
                                    </li>
                                    <li class="color-3">
                                        <i class="fa fa-info" aria-hidden="true"></i>
                                        <h4>Doubts?</h4>
                                        <p>Office Av. 100 #0987-988, <span>Central Park</span></p>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                        <!--Aside-->
                    </div>
                </div>
            </section>

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
                                <span><a href="#"><img src="{{ url('/') }}/img/sponsor-photodune.png" alt="sponsor"></a></span>
                                <span><a href="#"><img src="{{ url('/') }}/img/sponsor-tf.png" alt="sponsor"></a></span>
                                <span><a href="#"><img src="{{ url('/') }}/img/sponsor-photodune.png" alt="sponsor"></a></span>
                                <span><a href="#"><img src="{{ url('/') }}/img/sponsor-tf.png" alt="sponsor"></a></span>
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
                <p>&copy; 2017 - <a href="http://iwthemes.com/" target="_blank">IwThemes</a>&reg; Envato<img src="{{ url('/') }}/img/envalogo.png" alt="envato brand">. All Rights Reserved. <a href="privacy-policy.html">Privacy Policy</a></p>
            </div>
            <!--Copyrights-->

            <section class="help-box">
                <div class="body-help">
                    <span class="close-box"><i class="fa fa-times"></i></span>
                    <i class="fa fa-question-circle"></i>
                    <h5>Do you need our Help?</h5>
                    <p>If you need a help about how get an a book just write us and we are going to grateful to help.</p>
                    <a href="help.html" class="chat-link">Contact us Now</a>
                </div>
            </section>
        </div>

        <!-- ======================= JQuery libs =========================== -->
        <!-- jQuery local-->
        <script type="text/javascript" src="{{ url('/') }}/js/jquery.js"></script>
        <script type="text/javascript" src="{{ url('/') }}/js/jquery-ui.min.js"></script>
        <!-- Bootstrap.js-->
        <script type="text/javascript" src="{{ url('/') }}/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="{{ url('/') }}/js/bootstrap-sprockets.js"></script>
        <!-- Main Functions-->
        <script type="text/javascript" src="{{ url('/') }}/js/main.js"></script>
    </body>

</html>
