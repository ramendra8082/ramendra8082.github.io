@extends('main')
@section('pagecontent')
<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header / Header Style One-->
@include('partials.elements.nav')
    <!--End Main Header -->


    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/page-title-1.jpg);">
        <div class="auto-container">
            <h1>About Us</h1>
            <div class="bread-crumb-outer">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
    </section>


    <!--About Us Section-->
    <section class="about-us-section">
    	<div class="auto-container">


            <div class="row clearfix">

                <!--Content Column-->
                <div class="column content-column pull-right col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <h2>About Valencia</h2>
                        <div class="text">The weather started getting rough the tiny ship was toss if not for the minow would be lost make all our dreams come true for me and you these men to be promptly escaped from a maximum security stockade.</div>
                        <a href="our-cars.php" class="theme-btn btn-style-three">Hire A Car</a>
                    </div>
                </div>

                <!--Map Column-->
                <div class="column map-column pull-left col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="map-image"><img src="images/resource/locations-map.png" alt=""></figure>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!--FUn Facts Section-->
    <section class="fun-facts-section fact-counter" style="background-image:url(images/background/image-1.jpg);">
    	<div class="auto-container">
        	<!--Heading Title / Light Version-->
            <div class="sec-title centered light-version">
            	<div class="icon-box"><span class="flaticon-car-2"></span></div>
                <h2>Our Fun Facts</h2>
                <div class="desc-text">The weather started getting rough the tiny ship was tossed if not for the courage</div>
            </div>

            <div class="row clearfix">
            	<!--Column-->
                <div class="column counter-column wow fadeIn col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner">
                    	<div class="icon-box"><span class="flaticon-sports-car"></span></div>
                        <div class="content">
                            <h4 class="counter-title">Cabs</h4>
                            <div class="count-outer">
                                <span class="count-text" data-speed="5000" data-stop="8350">0</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column counter-column wow fadeIn col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner">
                    	<div class="icon-box"><span class="flaticon-settings"></span></div>
                        <div class="content">
                            <h4 class="counter-title">Trips Daily</h4>
                            <div class="count-outer">
                                <span class="count-text" data-speed="7000" data-stop="25000">0</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column counter-column wow fadeIn col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner">
                    	<div class="icon-box"><span class="flaticon-room-key"></span></div>
                        <div class="content">
                            <h4 class="counter-title">Clients Annually</h4>
                            <div class="count-outer">
                                <span class="count-text" data-speed="10000" data-stop="5500000">0</span> +
                            </div>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column counter-column wow fadeIn col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner">
                    	<div class="icon-box"><span class="flaticon-dashboard-1"></span></div>
                        <div class="content">
                            <h4 class="counter-title">Kilometers Daily</h4>
                            <div class="count-outer">
                                <span class="count-text" data-speed="8000" data-stop="12000">0</span> +
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!--Team Section-->
    <section class="team-section">
    	<div class="auto-container">

            <!--Heading Title-->
            <div class="sec-title centered">
            	<div class="icon-box"><span class="flaticon-sports-car"></span></div>
                <h2>Meet Our Team</h2>
                <div class="desc-text">The weather started getting rough the tiny ship was tossed if not for the courage.</div>
            </div>

            <div class="row clearfix">

                <!--Team Member-->
                <div class="team-member col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/resource/team-1.jpg" alt=""></figure>
                        <!--Overlay Box-->
                        <div class="overlay-box">
                            <div class="content-box">
                                <h3>David Warne</h3>
                                <div class="designation">Founder</div>
                            </div>
                            <div class="hover-box">
                                <div class="hover-inner">
                                    <h3>David Warne</h3>
                                	<div class="designation">Founder</div>
                                    <div class="text">The weather started getting rough the tossed ship was tossed if courage.</div>
                                    <ul class="social-links">
                                        <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                        <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                        <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!--Team Member-->
                <div class="team-member col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/resource/team-2.jpg" alt=""></figure>
                        <!--Overlay Box-->
                        <div class="overlay-box">
                            <div class="content-box">
                                <h3>Rofin Bailey</h3>
                                <div class="designation">Chief Executive</div>
                            </div>
                            <div class="hover-box">
                                <div class="hover-inner">
                                    <h3>Rofin Bailey</h3>
                                	<div class="designation">Chief Executive</div>
                                    <div class="text">The weather started getting rough the tossed ship was tossed if courage.</div>
                                    <ul class="social-links">
                                        <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                        <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                        <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!--Team Member-->
                <div class="team-member col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/resource/team-3.jpg" alt=""></figure>
                        <!--Overlay Box-->
                        <div class="overlay-box">
                            <div class="content-box">
                                <h3>Flora Prince</h3>
                                <div class="designation">Co-Founder</div>
                            </div>
                            <div class="hover-box">
                                <div class="hover-inner">
                                    <h3>Flora Prince</h3>
                                	<div class="designation">Co-Founder</div>
                                    <div class="text">The weather started getting rough the tossed ship was tossed if courage.</div>
                                    <ul class="social-links">
                                        <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                        <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                        <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!--Team Member-->
                <div class="team-member col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/resource/team-4.jpg" alt=""></figure>
                        <!--Overlay Box-->
                        <div class="overlay-box">
                            <div class="content-box">
                                <h3>Mitchell</h3>
                                <div class="designation">CEO</div>
                            </div>
                            <div class="hover-box">
                                <div class="hover-inner">
                                    <h3>Mitchell</h3>
                                	<div class="designation">CEO</div>
                                    <div class="text">The weather started getting rough the tossed ship was tossed if courage.</div>
                                    <ul class="social-links">
                                        <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                        <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                        <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <!--Testimonials Section-->
    <section class="testimonials-section">
    	<div class="auto-container">

        	<!--Testimonials Carousel-->
            <div class="testimonials-carousel">
            	<!--Slide Item-->
                <div class="slide-item">
                	<div class="inner-box">
                    	<figure class="author-thumb img-circle"><img class="img-circle" src="images/resource/author-thumb-1.jpg" alt=""></figure>
                        <div class="text">The weather started getting rough the tiny ship was tossed if not for the courage of the fearless crew the minnow.</div>
                        <div class="author-info">
                        	<h4 class="author-title">Erick Bishop</h4>
                            <div class="designation">Poppies, Founder</div>
                        </div>
                    </div>
                </div>

                <!--Slide Item-->
                <div class="slide-item">
                	<div class="inner-box">
                    	<figure class="author-thumb img-circle"><img class="img-circle" src="images/resource/author-thumb-2.jpg" alt=""></figure>
                        <div class="text">The weather started getting rough the tiny ship was tossed if not for the courage of the fearless crew the minnow.</div>
                        <div class="author-info">
                        	<h4 class="author-title">Lulie Ceasar</h4>
                            <div class="designation">Rofin, Founder</div>
                        </div>
                    </div>
                </div>

                <!--Slide Item-->
                <div class="slide-item">
                	<div class="inner-box">
                    	<figure class="author-thumb img-circle"><img class="img-circle" src="images/resource/author-thumb-3.jpg" alt=""></figure>
                        <div class="text">The weather started getting rough the tiny ship was tossed if not for the courage of the fearless crew the minnow.</div>
                        <div class="author-info">
                        	<h4 class="author-title">Matt Wagh</h4>
                            <div class="designation">Poppies, Founder</div>
                        </div>
                    </div>
                </div>

                <!--Slide Item-->
                <div class="slide-item">
                	<div class="inner-box">
                    	<figure class="author-thumb img-circle"><img class="img-circle" src="images/resource/author-thumb-1.jpg" alt=""></figure>
                        <div class="text">The weather started getting rough the tiny ship was tossed if not for the courage of the fearless crew the minnow.</div>
                        <div class="author-info">
                        	<h4 class="author-title">Erick Bishop</h4>
                            <div class="designation">Poppies, Founder</div>
                        </div>
                    </div>
                </div>

                <!--Slide Item-->
                <div class="slide-item">
                	<div class="inner-box">
                    	<figure class="author-thumb img-circle"><img class="img-circle" src="images/resource/author-thumb-2.jpg" alt=""></figure>
                        <div class="text">The weather started getting rough the tiny ship was tossed if not for the courage of the fearless crew the minnow.</div>
                        <div class="author-info">
                        	<h4 class="author-title">Lulie Ceasar</h4>
                            <div class="designation">Rofin, Founder</div>
                        </div>
                    </div>
                </div>

                <!--Slide Item-->
                <div class="slide-item">
                	<div class="inner-box">
                    	<figure class="author-thumb img-circle"><img class="img-circle" src="images/resource/author-thumb-3.jpg" alt=""></figure>
                        <div class="text">The weather started getting rough the tiny ship was tossed if not for the courage of the fearless crew the minnow.</div>
                        <div class="author-info">
                        	<h4 class="author-title">Matt Wagh</h4>
                            <div class="designation">Poppies, Founder</div>
                        </div>
                    </div>
                </div>

                <!--Slide Item-->
                <div class="slide-item">
                	<div class="inner-box">
                    	<figure class="author-thumb img-circle"><img class="img-circle" src="images/resource/author-thumb-1.jpg" alt=""></figure>
                        <div class="text">The weather started getting rough the tiny ship was tossed if not for the courage of the fearless crew the minnow.</div>
                        <div class="author-info">
                        	<h4 class="author-title">Erick Bishop</h4>
                            <div class="designation">Poppies, Founder</div>
                        </div>
                    </div>
                </div>

                <!--Slide Item-->
                <div class="slide-item">
                	<div class="inner-box">
                    	<figure class="author-thumb img-circle"><img class="img-circle" src="images/resource/author-thumb-2.jpg" alt=""></figure>
                        <div class="text">The weather started getting rough the tiny ship was tossed if not for the courage of the fearless crew the minnow.</div>
                        <div class="author-info">
                        	<h4 class="author-title">Lulie Ceasar</h4>
                            <div class="designation">Rofin, Founder</div>
                        </div>
                    </div>
                </div>

                <!--Slide Item-->
                <div class="slide-item">
                	<div class="inner-box">
                    	<figure class="author-thumb img-circle"><img class="img-circle" src="images/resource/author-thumb-3.jpg" alt=""></figure>
                        <div class="text">The weather started getting rough the tiny ship was tossed if not for the courage of the fearless crew the minnow.</div>
                        <div class="author-info">
                        	<h4 class="author-title">Matt Wagh</h4>
                            <div class="designation">Poppies, Founder</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!--Sponsors Section-->
    <section class="sponsors-section">
    	<div class="auto-container">
            <!--Sponsors SLider-->
            <ul class="sponsors-slider">
                <li><div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div></li>
                <li><div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div></li>
                <li><div class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></div></li>
                <li><div class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></div></li>
                <li><div class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></div></li>
                <li><div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div></li>
                <li><div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div></li>
                <li><div class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></div></li>
                <li><div class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></div></li>
                <li><div class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></div></li>
            </ul>
    	</div>
    </section>


    <!--Call To Action Footer-->
    <div class="call-to-action-footer">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Left Column-->
                <div class="left-column col-lg-5 col-md-12 col-sm-12 col-xs-12">
                	<div class="inner-box"><div class="icon-box"><span class="fa fa-phone"></span></div> Book by Phone:  <strong>+1-800-91234-890</strong></div>
                </div>
                <!--Right Column-->
                <div class="right-column col-lg-7 col-md-12 col-sm-12 col-xs-12">
                	<div class="inner-box">
                    	<div class="content-box">
                        	<figure class="logo-box"><a href="index.php"><img src="images/logo-5.png" alt=""></a></figure>
                            <div class="text">The weather started getting rough the tiny ship was lost the min ting anti maxi security road and back stock a against ade lost the minnow ther started getting rough the tiny ship minnow.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Main Footer-->
    <footer class="main-footer">

        <!--Widgets Section-->
        <div class="widgets-section">
        	<div class="auto-container">
            	<div class="row clearfix">
                	<!--Big Column-->
                	<div class="big-column col-md-6 col-sm-12 col-xs-12">
                    	<div class="row clearfix">

                            <!--Footer Column-->
                        	<div class="footer-column col-md-7 col-sm-6 col-xs-12">
                            	<div class="footer-widget work-hours-widget">
                                	<h2>Opening Hours</h2>
                                    <div class="widget-content">
                                    	<div class="text">The weather started getting rough the tiny ship was lost the min ting a maximum.</div>
                                        <ul class="hours-info">
                                        	<li class="clearfix"><div class="pull-left">Monday - Friday</div><div class="pull-right">9.00am to 8.00pm</div></li>
                                            <li class="clearfix"><div class="pull-left">Saturday</div><div class="pull-right">10.00am to 7.30pm</div></li>
                                            <li class="clearfix"><div class="pull-left">Sunday</div><div class="pull-right">11.00am to 6.00pm</div></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                        	<div class="footer-column col-md-5 col-sm-6 col-xs-12">
                            	<div class="footer-widget links-widget">
                                	<h2>Explore</h2>
                                    <div class="widget-content">
                                    	<ul class="list">
                                        	<li><a href="#">About Us</a></li>
                                            <li><a href="#">Service Rates</a></li>
                                            <li><a href="#">Our Cars</a></li>
                                            <li><a href="#">Portfolio</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--Big Column-->
                	<div class="big-column col-md-6 col-sm-12 col-xs-12">
                    	<div class="row clearfix">

                            <!--Footer Column-->
                        	<div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="footer-widget gallery-widget">
                                	<h2>Flicker Photos</h2>
                                    <div class="widget-content">
                                    	<div class="images-outer clearfix">
                                        	<!--Image Box-->
                                            <figure class="image-box"><a href="images/background/image-2.jpg" class="lightbox-image" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-thumb-1.jpg" alt=""></a></figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a href="images/background/image-2.jpg" class="lightbox-image" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-thumb-2.jpg" alt=""></a></figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a href="images/background/image-2.jpg" class="lightbox-image" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-thumb-3.jpg" alt=""></a></figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a href="images/background/image-2.jpg" class="lightbox-image" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-thumb-4.jpg" alt=""></a></figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a href="images/background/image-2.jpg" class="lightbox-image" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-thumb-5.jpg" alt=""></a></figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a href="images/background/image-2.jpg" class="lightbox-image" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-thumb-6.jpg" alt=""></a></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                        	<div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="footer-widget subscribe-widget">
                                	<h2>Newsletter</h2>
                                    <div class="widget-content">
										<div class="text">The weather started getting rough tining</div>
                                        <div class="newsletter-form">
                                            <form method="post" action="contact.php">
                                                <div class="form-group">
                                                    <input type="email" name="email" value="" placeholder="Email Address..." required>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="theme-btn btn-style-one">SUBSCRIBE NOW</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                 </div>
             </div>
         </div>

         <!--Footer Bottom-->
         <div class="footer-bottom">
         	<div class="auto-container">
            	<div class="text">Copyrights &copy; 2017 <a href="#">Valencia</a>. All Rights Reserved</div>
            </div>
         </div>

    </footer>


</div>
<!--End pagewrapper-->

<!--Scroll to top-->


@stop