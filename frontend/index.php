<?php
    require_once('../backend/connection.php');
    // session_start();
?>
<!DOCTYPE html>
<!--[if IE 8]--> <html lang="en" class="ie8"> <!--[endif]-->
<!--[if !IE]--> <html lang="en"> <!--[endif]-->
    <head>
        <meta charset="utf-8">
        <title>DELIVERY - SYSTEM</title>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
       <!-- Custom Fonts--> 
        <link rel="stylesheet" href="custom-font/fonts.css" />
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- Font Awesome--> 
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <!-- Bootsnav--> 
        <link rel="stylesheet" href="css/bootsnav.css">
        <!-- Fancybox -->
        <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />	
        <!-- Custom stylesheet--> 
        <link rel="stylesheet" href="css/custom.css" />
        <!--[if lt IE 9]-->
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <!--[endif]-->
    </head>
    <body>

        <!-- Preloader--> 

        <?php
            include('./preloader.php');
        ?>

        <!---End off Preloader -->

        <!-- Header-->
        <header>
              
            <div class="top_nav">
                <div class="container">
                    <ul class="list-inline info">
                        <li><a href="#"><span class="fa fa-phone"></span> 237 681059688</a></li>
                        <li><a href="#"><span class="fa fa-envelope"></span> tahfrancis99@gmail.com</a></li>
                        <li><a href="#"><span class="fa fa-clock-o"></span> Mon - Sat 9:00 - 19:00</a></li>
                    </ul>
                    <ul class="list-inline social_icon">
                        <li><a href=""><span class="fa fa-facebook"></span></a></li>
                        <li><a href=""><span class="fa fa-twitter"></span></a></li>
                        <li><a href=""><span class="fa fa-behance"></span></a></li>
                        <li><a href=""><span class="fa fa-dribbble"></span></a></li>
                        <li><a href=""><span class="fa fa-linkedin"></span></a></li>
                        <li><a href=""><span class="fa fa-youtube"></span></a></li>
                         <?php
                            if (isset($_SESSION['username'])) {
                        ?>
                        <li><a href="../backend/logout.php" name="logout"><span class="fa fa-sign-out" style="color: red !important;">Logout</span></a></li>
                        <?php
                            }
                        ?>
                    </ul>			
                </div>
            </div> 

            <nav class="navbar bootsnav">
                 
                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>

                <div class="container">
                     
                    <div class="attr-nav">
                        <ul>
                            <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div>
                     
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href=""><img class="logo" src="images/logo.png" alt=""></a>
                    </div>
                      
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav menu">
                            <li><a href="">Home</a></li>                    
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#contact_form">Contact Us</a></li>
                            <li><a href="./login.php" class="btn btn-info">Sign in</a></li>
                            <li><a href="./signup.php" class="btn btn-warning">Sign up</a></li>
                        </ul>
                    </div>
                </div>   
            </nav> 
        </header> 


        <section id="home" class="home">
              
            <div id="carousel" class="carousel slide" data-ride="carousel">
                 
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/slider_img.jpg" alt="Construction">
                        <div class="overlay">
                            <div class="carousel-caption">
                                <h3>We are Certified Engineers</h3>
                                <h1>Delivery Services</h1>
                                <h1 class="second_heading">Creative & Professional</h1>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                                <a  class="btn know_btn">View Products</a>
                            </div>					
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/slider_img2.png" alt="Construction">
                        <div class="overlay">
                            <div class="carousel-caption">
                                <h3>We are Certified Engineers</h3>
                                <h1>Delivery Services</h1>
                                <h1 class="second_heading">Creative & Professional</h1>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                                <a  class="btn know_btn">View Products</a>
                            </div>					
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/slider_img3.jpg" alt="Construction">
                        <div class="overlay">
                            <div class="carousel-caption">
                                <h3>We are Certified Engineers</h3>
                                <h1>Construction Services</h1>
                                <h1 class="second_heading">Creative & Professional</h1>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                                <a  class="btn know_btn">View Products</a>
                            </div>					
                        </div>
                    </div>
                </div>
                <!-- Carousel-inner end--> 



                <!-- Controls--->
                <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div> <!--Carousel end--->

        </section>


        <!-- Contact form -->
        <section id="contact_form">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Do you have any questions?</h2>
                        <h2 class="second_heading">Feel free to contact us!</h2>
                    </div>
                    <form role="form" class="form-inline text-right col-md-6" >
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="location" placeholder="location">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control"  id="Amount" placeholder="Amount">
                        </div>


                        <div class="form-group">
                            <select class="form-control" name="fuel_type" required="">
                            	<option value=""> FUEL TYPE </option>
                            	<option> GASOIL </option>
                            	<option> SUPER </option>
                            	<option> KEROZEL </option>
                            	<option> KEROSIN</option>
                            </select>
                        </div>

                        <button type="submit" class="btn submit_btn">Submit</button>
                    </form>				
                </div>
            </div>
        </section><!-- Contact form end -->

        <!--About--> 
        <section id="about">
            <div class="container about_bg">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <div class="about_content">
                            <h2>Welcome to Our Company</h2>
                            <h3>Aliquam lacus purus, auctor malesuada</h3>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                            <p>sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? </p>
                            <a  class="btn know_btn">know more</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-lg-offset-1">
                        <div class="about_banner">
                            <img src="images/man.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section> <!--About end--> 

        <!-- Why us-->
        <section id="why_us">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="head_title">
                            <h2>WHY CHOOSE US?</h2>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="why_us_item">
                            <span class="fa fa-leaf"></span>
                            <h4>We deliver quality</h4>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="why_us_item">
                            <span class="fa fa-futbol-o"></span>
                            <h4>Always on time</h4>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="why_us_item">
                            <span class="fa fa-group"></span>
                            <h4>We are pasionate</h4>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="why_us_item">
                            <span class="fa fa-line-chart"></span>
                            <h4>Professional Services</h4>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- Why us end --> 

        <!-- Services --> 
        <section id="services">
            <div class="container">
                <h2>OUR SERVICES</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="service_item">
                            <img src="images/service_img1.jpg" alt="Our Services" />
                            <h3>DELIVERY</h3>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                            <a href="#services" class="btn know_btn">know more</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service_item">
                            <img src="images/service_img3.jpg" alt="Our Services" />
                            <h3>INSTALLATION</h3>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                            <a href="#services" class="btn know_btn">know more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!--Services end-->
        
        <!-- Portfolio--> 
        <section id="portfolio">
            <div class="container portfolio_area text-center">
                <h2>Made with love</h2>
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>

                <div id="filters">
                    <button class="button is-checked" data-filter="*">Show All</button>
                    <button class="button" data-filter=".buildings">Delivery</button>
                    <button class="button" data-filter=".interior">Installation</button>
                   
                </div>
                <!--book-->
                
                 <!--Portfolio grid--> 	
                <div class="grid">
                    <div class="grid-sizer"></div>
                    
                    <div class="grid-item grid-item--width2 grid-item--height2 buildings plumbing interior">
                        <img alt="" src="images/highligh_img.jpg" >
                        <div class="portfolio_hover_area">
                            <a class="fancybox" href="images/highligh_img.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"></a>
                            <a href="#"><span class="fa fa-link"></span></a>
                        </div>  
                    </div>

                    <div class="grid-item buildings interior isolation">
                        <img alt="" src="images/portfolio1.jpg" >
                        <div class="portfolio_hover_area">
                            <a class="fancybox" href="images/portfolio1.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"></a>
                            <a href="#"><span class="fa fa-link"></span></a>
                        </div>   
                    </div>

                    <div class="grid-item interior plumbing isolation">
                        <img alt="" src="images/portfolio2.jpg" >
                        <div class="portfolio_hover_area">
                            <a class="fancybox" href="images/portfolio2.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"></a>
                            <a href="#"><span class="fa fa-link"></span></a>
                        </div>  
                    </div>

                    <div class="grid-item isolation buildings">
                        <img alt="" src="images/portfolio3.jpg" >
                        <div class="portfolio_hover_area">
                            <a class="fancybox" href="images/portfolio3.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"></a>
                            <a href="#"><span class="fa fa-link"></span></a>
                        </div>  
                    </div>

                    <div class="grid-item plumbing isolation">
                        <img alt="" src="images/portfolio4.jpg" >
                        <div class="portfolio_hover_area">
                            <a class="fancybox" href="images/portfolio4.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"></a>
                            <a href="#"><span class="fa fa-link"></span></a>
                        </div>  
                    </div>
                </div> <!-- Portfolio grid end--> 
            </div>
        </section> <!--Portfolio end

         Testimonial--> 
        <section id="testimonial">
            <div class="container text-center testimonial_area">
                <h2>Customer Reviews</h2>
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>

                <div class="row">
                    <div class="col-md-4">
                        <div class="testimonial_item">
                            <div class="testimonial_content text-left">
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                            </div>
                            <img src="images/testimonial_img1.png" alt="Testimonial" />
                            <p class="worker_name">john smith</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial_item">
                            <div class="testimonial_content">
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                            </div>
                            <img src="images/testimonial_img2.png" alt="Testimonial" />
                            <p class="worker_name">john smith</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial_item">
                            <div class="testimonial_content">
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                            </div>
                            <img src="images/testimonial_img1.png" alt="Testimonial" />
                            <p class="worker_name">john smith</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Testimonial end -->

        <!-- Footer -->
        <footer>
            <!-- Footer top -->
            <div class="container footer_top">
                <div class="row">
                    <div class="col-lg-4 col-sm-7">
                        <div class="footer_item">
                            <h4>About Company</h4>
                            <img class="logo" src="images/logo.png" alt="Construction" />
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem</p>

                            <ul class="list-inline footer_social_icon">
                                <li><a href=""><span class="fa fa-facebook"></span></a></li>
                                <li><a href=""><span class="fa fa-twitter"></span></a></li>
                                <li><a href=""><span class="fa fa-youtube"></span></a></li>
                                <li><a href=""><span class="fa fa-google-plus"></span></a></li>
                                <li><a href=""><span class="fa fa-linkedin"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--<div class="col-lg-2 col-sm-5">
                        <div class="footer_item">
                            <h4>Explore link</h4>
                            <ul class="list-unstyled footer_menu">
                                <li><a href=""><span class="fa fa-play"></span> Our services</a>
                                <li><a href=""><span class="fa fa-play"></span> Meet our team</a>
                                <li><a href=""><span class="fa fa-play"></span> Forum</a>
                                <li><a href=""><span class="fa fa-play"></span> Help center</a>
                                <li><a href=""><span class="fa fa-play"></span> Contact Cekas</a>
                                <li><a href=""><span class="fa fa-play"></span> Privacy Policy</a>
                                <li><a href=""><span class="fa fa-play"></span> Cekas terms</a>
                                <li><a href=""><span class="fa fa-play"></span> Site map</a>
                            </ul>
                        </div>
                    </div>-->
                    <!--<div class="col-lg-3 col-sm-7">
                        <div class="footer_item">
                            <h4>Latest post</h4>
                            <ul class="list-unstyled post">
                                <li><a href=""><span class="date">20 <small>AUG</small></span>  Luptatum omittantur duo ne mpetus indoctum</a></li>
                                <li><a href=""><span class="date">20 <small>AUG</small></span>  Luptatum omittantur duo ne mpetus indoctum</a></li>
                                <li><a href=""><span class="date">20 <small>AUG</small></span>  Luptatum omittantur duo ne mpetus indoctum</a></li>
                                <li><a href=""><span class="date">20 <small>AUG</small></span>  Luptatum omittantur duo ne mpetus indoctum</a></li>
                            </ul>
                        </div>
                    </div>-->
                    <div class="col-lg-3 col-sm-5">
                        <div class="footer_item">
                            <h4>Contact us</h4>
                            <ul class="list-unstyled footer_contact">
                                <li><a href=""><span class="fa fa-map-marker"></span> Nkolbissong, yaounde</a></li>
                                <li><a href=""><span class="fa fa-map-marker"></span> Odza, yaounde</a></li>
                                <li><a href=""><span class="fa fa-map-marker"></span> Olembe, yaounde</a></li>
                                <li><a href=""><span class="fa fa-envelope"></span> tahfrancis99@gmail.com</a></li>
                                <li><a href=""><span class="fa fa-mobile"></span><p>+237 678990464 <br />+237 681059688</p></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!--Footer top end--> 

             <!--Footer bottom -->
            <div class="footer_bottom text-center">
                <!--<p class="wow fadeInRight">
                    Made with 
                    <i class="fa fa-heart"></i>
                    by 
                    <a target="_blank" href="http://bootstrapthemes.co">Bootstrap Themes</a> 
                    2016. All Rights Reserved
                </p>-->
            </div> <!--Footer bottom end -->
        </footer> <!--Footer end -->

         <!--JavaScript -->
        <script src="js/jquery-1.12.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!-- Bootsnav js-->
        <script src="js/bootsnav.js"></script>

        <!-- JS Implementing Plugins-->
        <script src="js/isotope.js"></script>
        <script src="js/isotope-active.js"></script>
        <script src="js/jquery.fancybox.js?v=2.1.5"></script>

        <script src="js/jquery.scrollUp.min.js"></script>

        <script src="js/main.js"></script>
    </body>	
</html>	