<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from anycsm.club/products/html/bizfry-preview/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Sep 2017 12:12:46 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="Bizfry - Creative Multipurpose HTML Template">
        <meta name="author" content="anycsm">
        <link rel="icon" href="{{asset('layout_assets/img/favicon.ico')}}">
        <title>Obitrend</title>
        <!-- Bootstrap core CSS -->

        <link href="{{asset('layout_assets/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('layout_assets/css/font-awesome.min.css')}}" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="{{asset('layout_assets/css/fakeLoader.css')}}" rel="stylesheet">
        <link href="{{asset('layout_assets/css/linecons.css')}}" rel="stylesheet">
        <link href="{{asset('layout_assets/css/mmenu.css')}}" rel="stylesheet">
        <link href="{{asset('layout_assets/css/owl.carousel.css')}}" rel="stylesheet">
        <link href="{{asset('layout_assets/css/owl.carousel.css')}}" rel="stylesheet">
        <link href="{{asset('layout_assets/css/owl.theme.css')}}" rel="stylesheet">
        <link href="{{asset('layout_assets/css/component02.css')}}" rel="stylesheet">
        <link href="{{asset('layout_assets/css/theme.css')}}" rel="stylesheet">
        <link href="{{asset('layout_assets/css/theme-content-color/blue.css')}}" rel="stylesheet">
        <link href="{{asset('layout_assets/css/spacing.css')}}" rel="stylesheet">

        <!-- Google Font this template -->
        <link href='https://fonts.googleapis.com/css?family=Hind:400,300,500,600,700%7CVarela+Round' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div class="fakeloader"></div>
        <!-- start wrapper -->
        <div class="wrapper">
            <!-- start top-wrapper -->
            <div class="top-wrapper">
                <div class="header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <a class="responsive-menu" href="#menu"><i class="fa fa-navicon"></i></a>
                                <a class="logo-light" href="index-2.html"><img src="{{asset('layout_assets/img/logo_light2.png')}}" alt="" /></a>
                                <nav class="menu">

                                  <ul>
                                      <li class="last">
                                           <a href="{{ route('about') }}">About us</a>

                                      </li>
                                      <li class="last">
                                          <a href="{{ route('pricing') }}">Pricing</a>

                                      </li>


                                        <li class="last"><a href="#" data-toggle="modal" data-target="#myModal">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.header -->
            </div>
            <!-- end top-wrapper -->
            <!-- start content -->
            <div class="content">
                <div id="hero-slider" class="owl-carousel">
                    <div class="item bg-img" data-background="{{asset('layout_assets/img/slide01.jpg')}}">
                        <div class="container">
                            <div class="h-caption">
                                <h1 class="h-title">
                                  Obitrend, the most reliable  avenue <br class="hidden-xs"/>
                                    for Public Announcements.
                                </h1>
                                <p class="h-subtitle hidden-xs">
                                    Register now
                                </p>
                                <a class="btn btn-primary inner-link hidden-xs" href="{{ route('login') }}">Register</a>
                                 <a class="btn btn-transparent hidden-xs" href="{{ route('login') }}">Login</a>
                            </div>
                        </div>
                    </div>
                    <div class="item bg-img" data-background="{{asset('layout_assets/img/slide02.jpg')}}">
                        <div class="container">
                            <div class="h-caption">
                                <h1 class="h-title">
                                    Have a death or missing persons' announcement? <br class="hidden-xs"/>
                                    use us to reach out to the world.
                                </h1>
                                <p class="h-subtitle hidden-xs">
                                    Register with us and let the world know
                                </p>
                                <a class="btn btn-primary inner-link hidden-xs" href="{{ route('login') }}">Register</a>
                                <a class="btn btn-transparent hidden-xs" href="{{ route('login') }}">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /#hero-slider -->
                <div id="about" class="block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 mb-xs-20">
                                <h1 class="fs-48 fw-800">
                                    WELCOME TO <br/>
                                    OBITREND INTERNATIONAL
                                </h1>
                                <h2 class="fw-300 mb-20 theme-color">Perfect advertising solution for your announcements</h2>
                                <p class="mb-30">We’re Obitrend, a advertising company located in the heart of Nairobi,Kenya. We pride ourselves on advertising announcements but not limited to death,missing persons and public notices  Take a look around and don’t be shy.</p>
                                <!-- <p>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum typi non.</p> -->
                                <a class="btn btn-default mt-20" href="{{ route('about') }}">read more</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <!-- <img class="mockup" src="img/about.jpg" alt="" /> -->
                                <!-- start intro -->
                                <div class="relative bg-img" data-background="{{asset('layout_assets/img/apple.jpg')}}">
                                    <!-- snow -->
                                    <div id="snow" class="bizfry-snow"></div>
                                    <!--/ snow -->
                                    <div class="counter-wrapper">
                                        <div class="row text-center">
                                            <div class="col-sm-6 counter-box mb-40 mb-sm-20">
                                                <i class="icon icon-happy"></i>
                                                <div class="counter">500</div>
                                                <div class="title_counter">
                                                    <h4>Users</h4>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 counter-box mb-40 mb-sm-20">
                                                  <i class="icon icon-pencil"></i>
                                                <div class="counter">2000</div>
                                                <div class="title_counter">
                                                    <h4>Announcements</h4>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 counter-box">
                                              <i class="icon icon-globe"></i>
                                                <div class="counter">256</div>
                                                <div class="title_counter">
                                                    <h4>Countries</h4>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 counter-box">
                                                <i class="icon icon-wine"></i>
                                                <div class="counter">256</div>
                                                <div class="title_counter">
                                                    <h4>Countries</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end intro -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- start testimonials -->
                <div class="block testimonials">
                    <div class="container">
                        <h1 class="text-center">Clients Feedback</h1>
                        <div class="line center"></div>
                        <div id="testimonial-carousel" class="owl-carousel">
                            <div class="item">
                                <p class="client-t">
                                    <i class="fa fa-quote-left"></i>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet tellus elit. Ut eget mollis lacus. Donec <br> molestie nibh eu nulla tempor porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse <br> ultrices condimentum pellentesque.
                                    <i class="fa fa-quote-right"></i>
                                </p>
                                <p class="client-name">
                                    <a href="#">John Doe</a>, Company
                                </p>
                            </div>
                            <div class="item">
                                <p class="client-t">
                                    <i class="fa fa-quote-left"></i>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet tellus elit. Ut eget mollis lacus. Donec <br> molestie nibh eu nulla tempor porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse <br> ultrices condimentum pellentesque.
                                    <i class="fa fa-quote-right"></i>
                                </p>
                                <p class="client-name">
                                    <a href="#">Sarah Doe</a>, Company
                                </p>
                            </div>
                            <div class="item">
                                <p class="client-t">
                                    <i class="fa fa-quote-left"></i>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet tellus elit. Ut eget mollis lacus. Donec <br> molestie nibh eu nulla tempor porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse <br> ultrices condimentum pellentesque.
                                    <i class="fa fa-quote-right"></i>
                                </p>
                                <p class="client-name">
                                    <a href="#">Mike Doe</a>, Company
                                </p>
                            </div>
                            <div class="item">
                                <p class="client-t">
                                    <i class="fa fa-quote-left"></i>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet tellus elit. Ut eget mollis lacus. Donec <br> molestie nibh eu nulla tempor porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse <br> ultrices condimentum pellentesque.
                                    <i class="fa fa-quote-right"></i>
                                </p>
                                <p class="client-name">
                                    <a href="#">Jessica Doe</a>, Company
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end testimonials -->
                <!-- start clients -->
                <div class="block-clients grey">
                    <div class="container">
                        <ul class="clients">
                            <li><img src="{{asset('layout_assets/img/clients/logo1.png')}}" alt="" /></li>
                            <li><img src="{{asset('layout_assets/img/clients/logo2.png')}}" alt="" /></li>
                            <li><img src="{{asset('layout_assets/img/clients/logo3.png')}}" alt="" /></li>
                            <li><img src="{{asset('layout_assets/img/clients/logo4.png')}}" alt="" /></li>
                            <li><img src="{{asset('layout_assets/img/clients/logo5.png')}}" alt="" /></li>
                            <li><img src="{{asset('layout_assets/img/clients/logo6.png')}}" alt="" /></li>
                        </ul>
                    </div>
                </div>
                <!-- end clients -->
                <!-- start service -->
                <div class="block service">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center bizfry-heading">
                                <h1 class="title">What Can We Do For You</h1>
                                <div class="line center"></div>
                                <p class="subtitle">Eliminate your website building stress by using Bizfry</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 services mb-40 mb-xs-30">
                                  <i class="icon fa fa-feed"></i>
                                <div class="desk">
                                    <h2>Public Notices</h2>
                                    <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 services mb-40 mb-xs-30">
                                    <i class="icon fa fa-user"></i>
                                <div class="desk">
                                    <h2>Missing persons</h2>
                                    <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 services mb-40 mb-xs-30">
                                <i class="icon icon-layers"></i>
                                <div class="desk">
                                    <h2>Death announcements</h2>
                                    <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 services mb-xs-30">
                                  <i class="icon icon-layers"></i>
                                <div class="desk">
                                    <h2>Anniversaries</h2>
                                    <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 services mb-xs-30">
                                <i class="icon icon-layers"></i>
                                <div class="desk">
                                    <h2>Advertisements</h2>
                                    <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 services mb-xs-30">
                                <i class="icon icon-adjustments"></i>
                                <div class="desk">
                                    <h2>Built For Performance</h2>
                                    <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end service -->
            </div>
            <!-- end content -->
            <!-- start footer -->
            <footer class="footer">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <a class="logo" href="index-2.html"><img src="img/logo_light.png" alt="" /></a>
                                <p class="text-widget">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non magna. Mattis purus sit amet fermentum.</p>
                                <p class="text-widget">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <h5 class="widget-title">Latest From Our Blog</h5>
                                <ul class="post-list">
                                    <li>
                                        <a href="#">Ibiza amazing 5 star hotel</a>
                                        <p class="date"><i class="fa fa-calendar-o"></i> June 7, 2015</p>
                                    </li>
                                    <li>
                                        <a href="#">It's time to get discounts</a>
                                        <p class="date"><i class="fa fa-calendar-o"></i> June 7, 2015</p>
                                    </li>
                                    <li>
                                        <a href="#">It's a good hotel for you</a>
                                        <p class="date"><i class="fa fa-calendar-o"></i> June 7, 2015</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <h5 class="widget-title">Follow Us</h5>
                                <ul class="f-list">
                                    <li><a href="#">About Bizfry</a></li>
                                    <li><a href="#">Career</a></li>
                                    <li><a href="#">Terms & Condition</a></li>
                                    <li><a href="#">Privacy & Policy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <h5 class="widget-title">Keep in Touch</h5>
                                <ul class="footer-contact">
                                    <li><i class="fa fa-map-marker"></i><span>Adress: P.O BOX 21870-00400<br> Nairobi , Kenya</span></li>
                                    <li><i class="fa fa-phone"></i><span>Phone: +254 743-400-404</span></li>
                                    <li><i class="fa fa-envelope"></i><span>Email: <a href="mailto:#">internationalobitrend@gmail.com</a></span></li>
                                </ul>
                                <ul class="footer-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end footer-top -->
                <!-- start footer-bottom -->
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <p>Copyright &copy; 2017 <a href="#">obitrend international</a>. All Rights Reserved.</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul class="footer-menu">
                                    <li><a href="#">FAQ's</a></li>
                                    <li><a href="#">Sitemap</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end footer-bottom -->
            </footer>
            <!-- end footer -->
            <nav id="menu">
                <ul>
                    <li class="active sub">
                        <a href="#">Home</a>
                        <ul>
                            <li><a href="index-2.html">Agency</a></li>
                            <li><a href="home-education.html">Education</a></li>
                            <li><a href="home-fitness.html">Fitness</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Sample pages</a>
                        <ul>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="about_2.html">About Us 2</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="services_2.html">Services 2</a></li>
                            <li><a href="full-width.html">Full Width</a></li>
                            <li><a href="left-sidebar.html">Left Sidebar</a></li>
                            <li><a href="right-sidebar.html">Right Sidebar</a></li>
                            <li class='sub'>
                                <a href='#'>Multi-Level Drop-Down</a>
                                <ul>
                                    <li><a href='#'>Drop-Down Example</a></li>
                                    <li><a href='#'>Drop-Down Example</a></li>
                                    <li class='last'><a href='#'>Drop-Down Example</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class='sub'>
                        <a href="#">Portfolio</a>
                        <ul>
                            <li class="sub">
                                <a href="#">Without Space</a>
                                <ul>
                                    <li><a href='portfolio_2_col.html'>2 Column</a></li>
                                    <li><a href='portfolio_3_col.html'>3 Column</a></li>
                                    <li><a href='portfolio_4_col.html'>4 Column</a></li>
                                </ul>
                            </li>
                            <li class="sub">
                                <a href="#">With Space</a>
                                <ul>
                                    <li><a href='portfolio_2_col_space.html'>2 Column</a></li>
                                    <li><a href='portfolio_3_col_space.html'>3 Column</a></li>
                                    <li><a href='portfolio_4_col_space.html'>4 Column</a></li>
                                </ul>
                            </li>
                            <li><a href="portfolio-list.html">List Style</a></li>
                            <li><a href="single_project.html">Single Project</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="blog.html">Blog</a>
                        <ul>
                            <li><a href="blog.html">Right Sidebar</a></li>
                            <li><a href="blog_left_sidebar.html">Left Sidebar</a></li>
                            <li><a href="blog_full_width.html">Full Width</a></li>
                            <li><a href="blog_single_post.html">Single Post</a></li>
                        </ul>
                    </li>
                    <li><a href="#" data-toggle="modal" data-target="#myModal">Contact us</a></li>
                </ul>
            </nav>
            <!-- /#nav -->
            <!-- start modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="form-top-left ">
                                <h4 class="modal-title" id="myModalLabel">Contact us</h4>
                                <p class="modal-subtitle">Fill in the form bellow to send us a message:</p>
                            </div>
                            <div class="form-top-right">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                        </div>
                        <div class="modal-body">
                            <!-- contacts -->
                            <div id="contacts">
                                <div class="row">
                                    <!-- alignment -->
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <!-- form itself -->
                                        <form name="sentMessage" class="" id="contactForm" novalidate>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input type="text" class="form-control" placeholder="Full Name" id="name" required data-validation-required-message="Please enter your name" />
                                                    <p class="help-block"></p>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Please enter your email" />
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <textarea rows="10" cols="100" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter your message" minlength="5" data-validation-minlength-message="Min 5 characters" maxlength="999" style="resize:none"></textarea>
                                                </div>
                                            </div>
                                            <div id="success"> </div>
                                            <!-- For success/fail messages -->
                                            <button type="submit" class="btn btn-primary pull-left">Send message</button><br>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal -->
        </div>
        <!-- end wrapper -->
        <!-- Bootstrap core JavaScript
            ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

        <script src="../../../../ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="{{asset('layout_assets/js/jquery-1.12.4.min.js')}}"><\/script>')</script>
        <script src="  {{asset('layout_assets/js/bootstrap.min.js')}}"></script>
        <script src="  {{asset('layout_assets/js/modernizr.custom.js')}}"></script>
        <!-- loader effect -->
        <script src="{{asset('layout_assets/js/fakeLoader.min.js')}}"></script>
        <!-- overlay effect -->
        <script src="{{asset('layout_assets/js/classie.js')}}"></script>
        <!-- off-canvas menu -->
        <script type="text/javascript" src="{{asset('layout_assets/js/jquery.mmenu.min.js')}}"></script>
        <!-- isotope filter -->
        <script src="{{asset('layout_assets/js/jquery.isotope.min.js')}}"></script>
        <!-- jQuery parallax -->
        <script type="text/javascript" src="{{asset('layout_assets/js/jquery.parallax-1.1.3.js')}}"></script>
        <!-- counter -->
        <script src=" {{asset('layout_assets/js/waypoints.min.js')}}"></script>
        <script src=" {{asset('layout_assets/js/jquery.counterup.min.js')}}"></script>
        <script src=" {{asset('layout_assets/js/toucheffects.js')}}"></script>
        <!-- owl carousel -->
        <script src="{{asset('layout_assets/js/owl.carousel.js')}}"></script>
        <!-- smooth scroll -->
        <script src="{{asset('layout_assets/js/jquery.localScroll.min.js')}}"></script>
        <script src=" {{asset('layout_assets/js/smooth-scroll.min.js')}}"></script>
        <!-- contact form -->
        <script src="{{asset('layout_assets/js/jqBootstrapValidation.js')}}"></script>
        <script src=" {{asset('layout_assets/js/contact_me.js')}}"></script>
        <!-- snow js -->
        <script src="{{asset('layout_assets/js/snow.js')}}"></script>
        <!-- custom js -->
        <script src="{{asset('layout_assets/js/custom.js')}}"></script>
    </body>

</html>
