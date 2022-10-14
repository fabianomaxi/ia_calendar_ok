<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, minimum-scale=1,  maximum-scale=1">
        <meta name="Description" content=""/>
        <meta name="author" content=""/>
        <title>Home Landing Page</title>
        <meta name="robots" content=""/>
        <meta name="googlebot" content=""/>
        <meta name="google" content="nositelinkssearchbox"/>
        <link href="{{ url('/') }}/css/styles.css" rel="stylesheet" media="screen">
        <link rel="shortcut icon" type="image/ico" href="{{ url('/') }}/img/favicon.ico"/>
    </head>

    <body class="body-home">
        <header class="header">
            <div class="menu">
                <div class="container-fluid">
                    <div class="row">
                        <div class="logo">
                            <a href="index.html"><img src="{{ url('/') }}/img/logo-white.png" alt="logo main"></a>
                        </div>

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                              <i class="fa fa-bars" aria-hidden="true"></i>
                            </button>
                        </div>

                        <div class="menu-nav">
                            <div class="navbar-collapse collapse">
                                <ul>
                                    <li><a href="login.html">Book Appointment</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="#how-to">¿How to Use?</a></li>
                                    <li><a href="#blog">Blog</a></li>
                                    <li class="live-dashboard"><a href="appointments-reserved.html">View Dashboard</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="meet-social">
                            <span><a href="https://www.facebook.com/IwThemesTF" target="_blank"><i class="fa fa-facebook-square"></i></a></span>
                            <span><a href="https://twitter.com/iwthemes" target="_blank"><i class="fa fa-twitter-square"></i></a></span>
                            <span><a href="https://www.youtube.com/channel/UCEb3nAep6tYiAkZpqi0Kzew" target="_blank"><i class="fa fa-youtube-square"></i></a></span>
                            <span><a href="#"><i class="fa fa-linkedin-square"></i></a></span>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="hero-msj">
                            <h1>Now, you can book your <br>appointment Online!</h1>
                            <p>Medical Appointment Management System (IU)</p>
                            <a href="appointments-reserved.html" class="btn btn-green btn-small" role="button">View Dashboard</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="container">
            <div class="row">
                <div class="elements-aside services solid-color">
                    <ul>
                        <li class="color-1">
                            <i class="fa fa-heartbeat" aria-hidden="true"></i>
                            <h4>Book an Appointment</h4>
                            <p>Now, you can book your appointment online! Just register or Login</p>
                            <a href="appointments-reserved.html" class="btn btn-red btn-xsmall" role="button">View Dashboard</a>
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
                    </ul>
                </div>

                <div class="services-app">
                    <img src="{{ url('/') }}/img/web/icon-edit.png" alt="icon edit">
                    <h4>Modify, Cancell, Add Calendar or Print</h4>
                    <p>Now, You can create your appointment online also modify, Cancell, Add Calendar, Print it. Where you want!</p>
                </div>
                <div class="services-app">
                    <img src="{{ url('/') }}/img/web/icon-doctor.png" alt="icon edit">
                    <h4>Find Doctors</h4>
                    <p>MAS has a system where you can know more about doctors, biography, specializations and a pic where you feel confortable to choose who you want.</p>
                </div>
                <div class="services-app">
                    <img src="{{ url('/') }}/img/web/icon-chat.png" alt="icon edit">
                    <h4>¿Doubts?</h4>
                    <p>MAS has a system where you can chat with a person that is going to help you about how to use the platform and get an appointment.</p>
                </div>
                <div class="services-app">
                    <img src="{{ url('/') }}/img/web/icon-results.png" alt="icon edit">
                    <h4>Check status of Examination Medical </h4>
                    <p>You could see the result of examinations and authorizations pending. Everything Online!</p>
                </div>
            </div>
        </section>

        <section class="account-zone">
            <div class="container">
                <div class="row">
                    <div class="form-intials">
                        <h3>Login</h3>
                        <!--Form-->
                        <form class="form-login">
                            <div class="icon-data">
                                <i class="fa fa-address-card"></i>
                            </div>
                            <select>
                                <option>Select a Document</option>
                                <option>nit</option>
                            </select>

                            <div class="icon-data">
                                <i class="fa fa-user-circle"></i>
                            </div>
                            <input type="number" placeholder="Number Document">

                            <div class="icon-data">
                                <i class="fa fa-key"></i>
                            </div>
                            <input type="password" placeholder="Password">

                            <a href="appointments-reserved.html" class="btn btn-default btn-small" role="button">View Dashboard</a>
                            <!--<button class="btn btn-default" type="submit">Login</button>-->
                        </form>
                        <!--Form-->
                    </div>

                    <div class="form-intials">
                        <h3>Register</h3>
                        <!--Form-->
                        <form class="form-login">
                            <div class="icon-data">
                                <i class="fa fa-address-card"></i>
                            </div>
                            <select>
                                <option>Select a Document</option>
                                <option>nit</option>
                            </select>

                            <div class="icon-data">
                                <i class="fa fa-user-circle"></i>
                            </div>
                            <input type="number" placeholder="Number Document">

                            <div class="icon-data">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" placeholder="Name">

                            <a href="appointments-reserved.html" class="btn btn-default btn-red btn-small" role="button">View Dashboard</a>
                            <!--<button class="btn btn-default" type="submit">Login</button>-->
                        </form>
                        <!--Form-->
                    </div>

                    <!--Accordion-->
                    <div class="form-intials accordion">
                        <h3>Departments</h3>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                          <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                              <h5 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Cardic Clinic
                                </a>
                              </h5>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                              <div class="panel-body">
                                The Cardiac Clinic have special programmes for clients designed to prevent cardiac problems and assist following a cardiac event like a heart attack. We put our heart into protecting yours.
                              </div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                              <h5 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  General Surgery
                                </a>
                              </h5>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                              <div class="panel-body">
                                General surgery is a discipline that requires knowledge of and responsibility for the preoperative, operative, and postoperative management of patients. We put our heart into protecting yours.
                              </div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                              <h5 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  Pediatrics
                                </a>
                              </h5>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                              <div class="panel-body">
                                The pediatrics hub contains articles on immunization, growth and development, childhood diseases, and neonatology. The Journal of Pediatrics proudly announces that research articles identified by the American Board.
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <!--Accordion-->

                </div>
            </div>
        </section>

        <section class="blog preview" id="blog">
            <div class="container">
                <h2>From Our Blog</h2>

                <div class="row">
                    <!--Item-->
                    <div class="item-blog">
                        <div class="item-blog-content">
                            <img src="{{ url('/') }}/img/web/medication.jpg" alt="blog">
                            <h4><a href="blog.html">¿Who are our Doctors?</a></h4>
                            <span class="entry-category"><a href="#">Reviews &amp; Opinion</a></span>
                            <p>A physician is a practitioner who practices medicine and seeks to maintain and restore human health through the study, diagnosis, and treatment of the patient's illness or injury.</p>
                            <p class="social-media">
                                <a href="https://www.facebook.com/IwThemesTF" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/iwthemes" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.youtube.com/channel/UCEb3nAep6tYiAkZpqi0Kzew" target="_blank"><i class="fa fa-youtube-square"></i></a>
                            </p>
                            <p class="date">27 March 2017</p>
                        </div>
                    </div>
                    <!--Item-->

                    <!--Item-->
                    <div class="item-blog">
                        <div class="item-blog-content">
                            <img src="{{ url('/') }}/img/web/medication.jpg" alt="blog">
                            <h4><a href="blog.html">¿Who are our Doctors?</a></h4>
                            <span class="entry-category"><a href="#">Reviews &amp; Opinion</a></span>
                            <p>A physician is a practitioner who practices medicine and seeks to maintain and restore human health through the study, diagnosis, and treatment of the patient's illness or injury.</p>
                            <p class="social-media">
                                <a href="https://www.facebook.com/IwThemesTF" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/iwthemes" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.youtube.com/channel/UCEb3nAep6tYiAkZpqi0Kzew" target="_blank"><i class="fa fa-youtube-square"></i></a>
                            </p>
                            <p class="date">27 March 2017</p>
                        </div>
                    </div>
                    <!--Item-->

                    <!--Item-->
                    <div class="item-blog">
                        <div class="item-blog-content">
                            <img src="{{ url('/') }}/img/web/book.jpg" alt="blog">
                            <h4><a href="blog.html">¿Who are our Doctors?</a></h4>
                            <span class="entry-category"><a href="#">Reviews &amp; Opinion</a></span>
                            <p>A physician is a practitioner who practices medicine and seeks to maintain and restore human health through the study, diagnosis, and treatment of the patient's illness or injury.</p>
                            <p class="social-media">
                                <a href="https://www.facebook.com/IwThemesTF" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/iwthemes" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.youtube.com/channel/UCEb3nAep6tYiAkZpqi0Kzew" target="_blank"><i class="fa fa-youtube-square"></i></a>
                            </p>
                            <p class="date">27 March 2017</p>
                        </div>
                    </div>
                    <!--Item-->
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <a href="blog.html" class="btn btn-red btn-small">view all entries</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="how-to" id="how-to">
            <div class="container">
                <div class="intro-how-to">
                    <h2>¿How to use our Platform?</h2>
                    <p>Are not sure how to use our Platform? Here, we're going to do more details about how to do it. Just click it!</p>
                    <div class="row">
                        <div class="facts">
                            <span>100%</span>
                            <p>Usable</p>
                        </div>
                        <div class="facts">
                            <span>188k</span>
                            <p>User Registred</p>
                        </div>
                        <div class="facts">
                            <span>100%</span>
                            <p>Mobile</p>
                        </div>
                    </div>
                    <a href="login.html" class="btn btn-green btn-small" role="button">Get my Appointment</a>
                </div>
                <div class="video-how-to">
                    <iframe src="https://www.youtube.com/embed/MIONXFyt7tM"></iframe>
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
