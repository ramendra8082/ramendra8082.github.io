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
            <h1>Services</h1>
            <div class="bread-crumb-outer">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Services</li>
                </ul>
            </div>
        </div>
    </section>


    <!--Why Us Section-->
    <section class="why-us-section extended">
    	<div class="auto-container">
    		<div class="row clearfix">
    			<!--Content Column-->
    			<div class="content-column col-lg-4 col-md-6 col-sm-12 col-xs-12">
    				<!--Heading Title-->
    				<div class="sec-title">
						<h2>Why Choose Us</h2>
						<div class="desc-text">The weather started getting rough the tiny ship was toss if not for the minnow would be lost.</div>
					</div>

					<div class="clearfix">

						<!--Service Block-->
						<div class="service-block">
							<div class="inner-box">
								<div class="icon-box"><span class="flaticon-tax"></span></div>
								<h3>Tax & Insurance Included</h3>
								<div class="text">The weather started getting rough the ship was tossed if courage.</div>
							</div>
						</div>

						<!--Service Block-->
						<div class="service-block">
							<div class="inner-box">
								<div class="icon-box"><span class="flaticon-shape-1"></span></div>
								<h3>Free Fuel </h3>
								<div class="text">The weather started getting rough the ship was tossed if courage.</div>
							</div>
						</div>

						<!--Service Block-->
						<div class="service-block">
							<div class="inner-box">
								<div class="icon-box"><span class="flaticon-money-3"></span></div>
								<h3>Refundable Deposit</h3>
								<div class="text">The weather started getting rough the ship was tossed if courage.</div>
							</div>
						</div>

					</div>
				</div>

				<!--Image Column-->
    			<div class="image-column col-lg-8 col-md-6 col-sm-12 col-xs-12">
    				<figure class="image-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="images/resource/featured-image-2.jpg" alt=""></figure>
				</div>

			</div>
		</div>
	</section>


    <!--Subscribe Section-->
    <section class="subscribe-section" style="background-image:url(images/background/image-2.jpg);">
    	<div class="auto-container">
        	<div class="logo"><a href="index.php"><img src="images/logo-4.png" alt=""></a></div>
            <!--Heading Title / Light Version-->
            <div class="sec-title centered light-version">
                <h2>Never Miss a Deal. Let’s Go.</h2>
                <div class="desc-text">The weather started getting rough the tiny ship was tossed if not for the courage</div>
            </div>

            <!--Form-->
            <div class="form">
            	<form method="post" action="contact.php">
                	<div class="form-group">
                    	<input type="email" name="email" value="" placeholder="Enter your Email Address..." required>
                        <button type="submit" class="theme-btn btn-style-one">SIGNUP</button>
                    </div>
                </form>
            </div>

        </div>
    </section>


    <!--Best Services Section / Style Two-->
    <section class="best-services-section style-two">
    	<!--Floated Image-->
        <figure class="floated-image wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="images/resource/featured-image-6.jpg" alt=""></figure>

    	<div class="auto-container">

            <!--Heading Title-->
            <div class="sec-title">
                <h2>Our Awesome Services</h2>
                <div class="desc-text">The weather started getting rough the tiny ship was tossed if not for the courage.</div>
            </div>

            <div class="outer-box">
                <div class="row clearfix">
                    <!--Service Block-->
                    <div class="service-block-four col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <!--Image layer-->
                            <div class="image-layer" style="background-image:url(images/resource/featured-image-5.jpg);"></div>

                            <div class="icon-box"><span class="flaticon-cup-1"></span></div>
                            <h3>Night Parties</h3>
                            <div class="text">The weather started getting rough the ship was tossed if courage.</div>
                        </div>
                    </div>

                    <!--Service Block-->
                    <div class="service-block-four col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <!--Image layer-->
                            <div class="image-layer" style="background-image:url(images/resource/featured-image-5.jpg);"></div>

                            <div class="icon-box"><span class="flaticon-engagement-ring"></span></div>
                            <h3>Weddings</h3>
                            <div class="text">The weather started getting rough the ship was tossed if courage.</div>
                        </div>
                    </div>

                    <!--Service Block-->
                    <div class="service-block-four col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <!--Image layer-->
                            <div class="image-layer" style="background-image:url(images/resource/featured-image-5.jpg);"></div>

                            <div class="icon-box"><span class="flaticon-pizza-4"></span></div>
                            <h3>Restaurant</h3>
                            <div class="text">The weather started getting rough the ship was tossed if courage.</div>
                        </div>
                    </div>

                    <!--Service Block-->
                    <div class="service-block-four col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <!--Image layer-->
                            <div class="image-layer" style="background-image:url(images/resource/featured-image-5.jpg);"></div>

                            <div class="icon-box"><span class="flaticon-shopping-cart"></span></div>
                            <h3>Shopping Malls</h3>
                            <div class="text">The weather started getting rough the ship was tossed if courage.</div>
                        </div>
                    </div>

                    <!--Service Block-->
                    <div class="service-block-four col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <!--Image layer-->
                            <div class="image-layer" style="background-image:url(images/resource/featured-image-5.jpg);"></div>

                            <div class="icon-box"><span class="flaticon-transport-1"></span></div>
                            <h3>Airports</h3>
                            <div class="text">The weather started getting rough the ship was tossed if courage.</div>
                        </div>
                    </div>

                    <!--Service Block-->
                    <div class="service-block-four col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <!--Image layer-->
                            <div class="image-layer" style="background-image:url(images/resource/featured-image-5.jpg);"></div>

                            <div class="icon-box"><span class="flaticon-play-button"></span></div>
                            <h3>Cinemas</h3>
                            <div class="text">The weather started getting rough the ship was tossed if courage.</div>
                        </div>
                    </div>
                </div>
        	</div>

        </div>
    </section>


    <!--Drive Cars / Style Two-->
    <section class="drive-cars-section style-two">
    	<div class="auto-container">

            <!--Heading Title-->
            <div class="sec-title centered">
            	<div class="icon-box"><span class="flaticon-sports-car"></span></div>
                <h2>Drive a Luxury Car Everyday</h2>
                <div class="desc-text">The weather started getting rough the tiny ship was tossed if not for the courage.</div>
            </div>

            <div class="row clearfix">

                <!--Service Block Two-->
                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-clipboard-1"></span></div>
                        <h3>Book Your Car</h3>
                        <div class="text">The weather started getting rough the tiny ship was lost the min ting a maximum security stockade lost the minnow.</div>
                    </div>
                </div>

                <!--Service Block Two-->
                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-money-3"></span></div>
                        <h3>Pay the Fare</h3>
                        <div class="text">The weather started getting rough the tiny ship was lost the min ting a maximum security stockade lost the minnow.</div>
                    </div>
                </div>

                <!--Service Block Two-->
                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-car-3"></span></div>
                        <h3>Ride the Car</h3>
                        <div class="text">The weather started getting rough the tiny ship was lost the min ting a maximum security stockade lost the minnow.</div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!--Latest Vehicles Section-->
    <section class="latest-vehicles-section">
    	<div class="auto-container">

            <!--Heading Title-->
            <div class="sec-title centered">
            	<div class="icon-box"><span class="flaticon-sports-car"></span></div>
                <h2>Our Latest Vehicles</h2>
                <div class="desc-text">The weather started getting rough the tiny ship was tossed if not for the courage.</div>
            </div>

            <!--Carousel Outer-->
            <div class="carousel-outer">
				<div class="single-item-carousel">
                	<!--Slide Item-->
                    <div class="slide-tem">
                    	<!--Image Box-->
                        <figure class="image-box"><a href="car-single.php"><img src="images/gallery/7.png" alt=""></a></figure>
                        <div class="lower-content">
                        	<h3><a href="car-single.php">Ranger Over</a></h3>
                            <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-o"></span></div>
                            <div class="price">Price: <strong>$690</strong> <span class="duration">/ Day</span></div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="slide-tem">
                    	<!--Image Box-->
                        <figure class="image-box"><a href="car-single.php"><img src="images/gallery/8.png" alt=""></a></figure>
                        <div class="lower-content">
                        	<h3><a href="car-single.php">Chevorlet Trucks</a></h3>
                            <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-half-empty"></span></div>
                            <div class="price">Price: <strong>$690</strong> <span class="duration">/ Day</span></div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="slide-tem">
                    	<!--Image Box-->
                        <figure class="image-box"><a href="car-single.php"><img src="images/gallery/9.png" alt=""></a></figure>
                        <div class="lower-content">
                        	<h3><a href="car-single.php">Aston Martin</a></h3>
                            <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-o"></span></div>
                            <div class="price">Price: <strong>$690</strong> <span class="duration">/ Day</span></div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="slide-tem">
                    	<!--Image Box-->
                        <figure class="image-box"><a href="car-single.php"><img src="images/gallery/7.png" alt=""></a></figure>
                        <div class="lower-content">
                        	<h3><a href="car-single.php">Ranger Over</a></h3>
                            <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-o"></span></div>
                            <div class="price">Price: <strong>$690</strong> <span class="duration">/ Day</span></div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="slide-tem">
                    	<!--Image Box-->
                        <figure class="image-box"><a href="car-single.php"><img src="images/gallery/8.png" alt=""></a></figure>
                        <div class="lower-content">
                        	<h3><a href="car-single.php">Chevorlet Trucks</a></h3>
                            <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-half-empty"></span></div>
                            <div class="price">Price: <strong>$690</strong> <span class="duration">/ Day</span></div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="slide-tem">
                    	<!--Image Box-->
                        <figure class="image-box"><a href="car-single.php"><img src="images/gallery/9.png" alt=""></a></figure>
                        <div class="lower-content">
                        	<h3><a href="car-single.php">Aston Martin</a></h3>
                            <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-o"></span></div>
                            <div class="price">Price: <strong>$690</strong> <span class="duration">/ Day</span></div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="slide-tem">
                    	<!--Image Box-->
                        <figure class="image-box"><a href="car-single.php"><img src="images/gallery/7.png" alt=""></a></figure>
                        <div class="lower-content">
                        	<h3><a href="car-single.php">Ranger Over</a></h3>
                            <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-o"></span></div>
                            <div class="price">Price: <strong>$690</strong> <span class="duration">/ Day</span></div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="slide-tem">
                    	<!--Image Box-->
                        <figure class="image-box"><a href="car-single.php"><img src="images/gallery/8.png" alt=""></a></figure>
                        <div class="lower-content">
                        	<h3><a href="car-single.php">Chevorlet Trucks</a></h3>
                            <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-half-empty"></span></div>
                            <div class="price">Price: <strong>$690</strong> <span class="duration">/ Day</span></div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="slide-tem">
                    	<!--Image Box-->
                        <figure class="image-box"><a href="car-single.php"><img src="images/gallery/9.png" alt=""></a></figure>
                        <div class="lower-content">
                        	<h3><a href="car-single.php">Aston Martin</a></h3>
                            <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-o"></span></div>
                            <div class="price">Price: <strong>$690</strong> <span class="duration">/ Day</span></div>
                        </div>
                    </div>

                </div>
            </div>

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