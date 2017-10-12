@extends('layouts.app1')

@section('content')
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
                                <a class="logo-light" href="index-2.html"><img src="img/logo_light.png" alt="" /></a>
                                <nav class="menu">
                                    <ul>
                                        <li class="active sub">
                                            <a href="#">Home</a>
                                            <ul>
                                                <li><a href="index-2.html">Agency</a></li>
                                                <li><a href="home-education.html">Education</a></li>
                                                <li><a href="home-fitness.html">Fitness</a></li>
                                            </ul>
                                        </li>
                                        <li class="active sub">
                                            <a href="#">Sample Pages</a>
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
                                        <li class="active sub">
                                            <a href="portfolio_3_cols.html">Portfolio</a>
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
                                        <li class="active sub">
                                            <a href="#">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Right Sidebar</a></li>
                                                <li><a href="blog_left_sidebar.html">Left Sidebar</a></li>
                                                <li><a href="blog_full_width.html">Full Width</a></li>
                                                <li><a href="blog_single_post.html">Single Post</a></li>
                                            </ul>
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
                <!-- start hero -->
                <div class="page-hero relative">
                    <!-- snow -->
                    <div id="snow" class="bizfry-snow"></div>
                    <!--/ snow -->
                    <div class="container text-center">
                        <h1 class="hero-title">
                            About us
                        </h1>
                        <div class="line center"></div>
                        <p class="hero-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br/> tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <!-- end hero -->
                <div class="block">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="theme-color mb-30 fs-42">
                                    Design is the paradise <br/>
                                    of individuality, eccentricity,
                                    abnormality, and humors.
                                </h1>
                                <p class="mb-30">We’re Bizfry, a creative agency located in the heart of New York city. We pride ourselves on developing unique and professional solutions with a wide variety of mediums. Take a look around and don’t be shy.</p>
                                <p class="mb-10 theme-color"><strong>WHAT WE CAN HELP YOU ACHIEVE</strong></p>
                                <p>Personal or corporate branding | SEO optimization | Web & UI Design | Standing out in the crowd</p>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-6 mb-30">
                                        <h2 class="mb-20">Why Choose Us?</h2>
                                        <ul class="bizfry-list">
                                            <li><i class="icon icon-arrows_minus"></i>We Are Creative</li>
                                            <li><i class="icon icon-arrows_minus"></i>Top Customer Support</li>
                                            <li><i class="icon icon-arrows_minus"></i>Innovative Brand</li>
                                            <li><i class="icon icon-arrows_minus"></i>Friendliest Group</li>
                                            <li><i class="icon icon-arrows_minus"></i>Best In Class 2016</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 mb-30">
                                        <h2 class="mb-20">Target Auidence</h2>
                                        <ul class="bizfry-list">
                                            <li><i class="icon icon-arrows_minus"></i>Medium Businesses</li>
                                            <li><i class="icon icon-arrows_minus"></i>Freelance Designers</li>
                                            <li><i class="icon icon-arrows_minus"></i>College Students</li>
                                            <li><i class="icon icon-arrows_minus"></i>Sorta Athletes</li>
                                            <li><i class="icon icon-arrows_minus"></i>Dairy Farmers</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 mb-xs-30">
                                        <h2 class="mb-20">Our Specialties</h2>
                                        <ul class="bizfry-list">
                                            <li><i class="icon icon-arrows_minus"></i>Program Management</li>
                                            <li><i class="icon icon-arrows_minus"></i>Graphic & UI Design</li>
                                            <li><i class="icon icon-arrows_minus"></i>Customer Support</li>
                                            <li><i class="icon icon-arrows_minus"></i>Video Editing</li>
                                            <li><i class="icon icon-arrows_minus"></i>Web Development</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 mb-xs-30">
                                        <h2 class="mb-20">Featured On</h2>
                                        <ul class="bizfry-list">
                                            <li><i class="icon icon-arrows_minus"></i>Top WP Themes</li>
                                            <li><i class="icon icon-arrows_minus"></i>Awwward.com</li>
                                            <li><i class="icon icon-arrows_minus"></i>Billerikson Blog</li>
                                            <li><i class="icon icon-arrows_minus"></i>Themeforest</li>
                                            <li><i class="icon icon-arrows_minus"></i>Web Development</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.block -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <img src="img/about02.jpg" alt="" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="about-features-box">
                                <h1>Our Skills</h1>
                                <div class="line"></div>
                                <p>Bizfry advisors bring their wealth of knowledge and wisdom gained through years of experience to assist your business in a precise and measured manner.</p>
                                <div class="progress_block mt-20">
                                    <div class="progress_text">
                                        <p class="title">WordPress Development</p>
                                        <p class="number">60%</p>
                                    </div>
                                    <div class="progress">
                                        <div data-level="60"></div>
                                    </div>
                                    <div class="progress_text">
                                        <p class="title">Web design</p>
                                        <p class="number">90%</p>
                                    </div>
                                    <div class="progress">
                                        <div data-level="90"></div>
                                    </div>
                                    <div class="progress_text">
                                        <p class="title">Programming</p>
                                        <p class="number">50%</p>
                                    </div>
                                    <div class="progress">
                                        <div data-level="40"></div>
                                    </div>
                                    <div class="progress_text">
                                        <p class="title">Photography</p>
                                        <p class="number">70%</p>
                                    </div>
                                    <div class="progress">
                                        <div data-level="70"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
                <!-- start intro -->
                <div id="intro" class="bg-img" data-background="img/apple.jpg">
                    <div class="counter-wrapper">
                        <div class="container">
                            <div class="row text-center">
                                <div class="col-lg-3 col-md-3 col-sm-6 counter-box">
                                    <i class="icon icon-happy"></i>
                                    <div class="counter">5000</div>
                                    <div class="title_counter">
                                        <h4>Happy Clients</h4>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 counter-box">
                                    <i class="icon icon-globe"></i>
                                    <div class="counter">2500</div>
                                    <div class="title_counter">
                                        <h4>Completed Projects</h4>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 counter-box">
                                    <i class="icon icon-pencil"></i>
                                    <div class="counter">400</div>
                                    <div class="title_counter">
                                        <h4>Code Lines</h4>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 counter-box">
                                    <i class="icon icon-wine"></i>
                                    <div class="counter">3500</div>
                                    <div class="title_counter">
                                        <h4>Awward Winner</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end intro -->
                <div class="block">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center bizfry-heading">
                                <h1 class="title text-center">Meet Our Team</h1>
                                <div class="line center"></div>
                                <p class="subtitle text-center">We are friendly.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="member-img">
                                    <img src="img/team/m01.jpg">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                </div>
                                <div class="member-desc text-center">
                                    <h3>John Doe</h3>
                                    <span class="job-title">Creative Director</span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="member-img">
                                    <img src="img/team/m02.jpg">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                </div>
                                <div class="member-desc text-center">
                                    <h3>Jennifer Doe</h3>
                                    <span class="job-title">Web designer</span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="member-img">
                                    <img src="img/team/m03.jpg">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                </div>
                                <div class="member-desc text-center">
                                    <h3>Mike Doe</h3>
                                    <span class="job-title">Programmer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.block -->
                <div class="block" style="padding-top: 0;">
                    <div class="container">
                        <h2 class="text-center">Our Great Clients</h2>
                        <div class="line center"></div>
                        <p class="subtitle text-center">Duis autem vel eum iriure.</p>
                        <ul class="clients">
                            <li><img src="img/clients/logo1.png" alt="" /></li>
                            <li><img src="img/clients/logo2.png" alt="" /></li>
                            <li><img src="img/clients/logo3.png" alt="" /></li>
                            <li><img src="img/clients/logo4.png" alt="" /></li>
                            <li><img src="img/clients/logo5.png" alt="" /></li>
                            <li><img src="img/clients/logo6.png" alt="" /></li>
                        </ul>
                    </div>
                </div>
                <!-- /.block -->
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
                                    <li><i class="fa fa-map-marker"></i><span>Adress: 1234 The Street Name, <br> The City Name, The Location</span></li>
                                    <li><i class="fa fa-phone"></i><span>Phone: +1 (234) 567-89-10</span></li>
                                    <li><i class="fa fa-envelope"></i><span>Email: <a href="mailto:#">office@yourdomain.com</a></span></li>
                                </ul>
                                <ul class="footer-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
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
                                <p>Copyright &copy; 2017 <a href="https://themeforest.net/user/anycsm">anycsm</a>. All Rights Reserved.</p>
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
                                <p class="modal-subtitle text-center">Fill in the form bellow to send us a message:</p>
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
@endsection
