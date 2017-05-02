@extends('main')
@section('pagecontent')
<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header / Header Style Two-->
    @include('partials.elements.nav')
    <!--End Main Header -->


    <!--Main Slider-->
    <section class="main-slider" data-start-height="800" data-slide-overlay="yes">

        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>

                    <li data-transition="zoomin" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/2.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="images/main-slider/2.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                    <div class="tp-caption sfr sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-90"
                    data-speed="1500"
                    data-start="0"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
					data-endeasing="Power4.easeIn"><div class="small-title">Welcome to Valencia Car Hire</div> </div>

                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="10"
                    data-speed="1500"
                    data-start="0"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
					data-endeasing="Power4.easeIn"><div class="text-center"><h2 class="big-title">Enjoy the Ride with Brand New <br>Ducatti Cars</h2></div></div>

                    <div class="tp-caption sfr sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="130"
                    data-speed="1500"
                    data-start="0"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="#" class="theme-btn btn-style-two">Rent a Car</a> &nbsp; <a href="#" class="theme-btn btn-style-one">Contact Us</a></div>

                    </li>

                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/1.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="images/main-slider/1.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="left" data-hoffset="15"
                    data-y="center" data-voffset="-90"
                    data-speed="1500"
                    data-start="0"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
					data-endeasing="Power4.easeIn"><div class="small-title">No. 1 Car Rental / Hire Company</div> </div>

                    <div class="tp-caption sfr sfb tp-resizeme"
                    data-x="left" data-hoffset="15"
                    data-y="center" data-voffset="10"
                    data-speed="1500"
                    data-start="0"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h2 class="big-title">We are trusted by Millions of <br>Customers Worldwide</h2></div>

                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="left" data-hoffset="15"
                    data-y="center" data-voffset="130"
                    data-speed="1500"
                    data-start="0"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="#" class="theme-btn btn-style-one">Rent a Car</a></div>

                    </li>

                    <li data-transition="zoomout" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/3.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="images/main-slider/3.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                    <div class="tp-caption sft sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-90"
                    data-speed="1500"
                    data-start="0"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
					data-endeasing="Power4.easeIn"><div class="small-title">Starts from $500/day</div> </div>

                    <div class="tp-caption sfb sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="10"
                    data-speed="1500"
                    data-start="0"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
					data-endeasing="Power4.easeIn"><div class="text-center"><h2 class="big-title">The Classic Aston Martin Dark Shiny <br>Sport Car in the Street</h2></div></div>

                    <div class="tp-caption sfb sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="130"
                    data-speed="1500"
                    data-start="0"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="#" class="theme-btn btn-style-two">Rent a Car</a> &nbsp; <a href="#" class="theme-btn btn-style-one">Contact Us</a></div>

                    </li>

                </ul>
            </div>
        </div>
    </section>


    <!--Why Us Section-->
    <section class="why-us-section">
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
    				<figure class="image-box"><img src="images/resource/featured-image-2.jpg" alt=""></figure>
				</div>

			</div>

            <!--Booking Form-->
            <div class="form-container">
            	<div class="form-box default-form">
                    <form method="post" action="contact.php">
                        <div class="row clearfix">
                        	<!--Column-->
                        	<div class="column col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="field-label">Pickup</div>
                                <div class="row clearfix">
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-inner"><input type="text" name="field-name" value="" placeholder="Airport Code, City, Hotel, Zip, etc.."></div>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-inner"><input type="text" class="datepicker" id="field-one" name="field-name" value="" placeholder="Date"><label class="input-icon" for="field-one"><span class="fa fa-calendar"></span></label></div>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-inner"><input type="text" id="field-two" name="field-name" value="" placeholder="Time"><label class="input-icon" for="field-two"><span class="fa fa-clock-o"></span></label></div>
                                    </div>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column col-lg-6 col-md-12 col-sm-12 col-xs-12">

                                <div class="field-label">Drop</div>
                                <div class="row clearfix">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-inner"><input type="text" class="datepicker" id="field-three" name="field-name" value="" placeholder="Date"><label class="input-icon" for="field-three"><span class="fa fa-calendar"></span></label></div>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-inner"><input type="text" id="field-four" name="field-name" value="" placeholder="Time"><label class="input-icon" for="field-four"><span class="fa fa-clock-o"></span></label></div>
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="check-box">
                                            <input type="checkbox" id="cbox-one"><label for="cbox-one"><span class="icon"><span class="square"></span><span class="fa fa-check"></span></span> Return to Pickup Location</label>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <button type="submit" class="theme-btn btn-style-three">B<br>o<br>o<br>k<br><br>N<br>o<br>w</button>

                    </form>
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


    <!--About Us Section-->
    <section class="about-us-section">
    	<div class="auto-container">

            <!--Floated Title-->
            <div class="floated-title">
                <div class="inner clearfix">
                    <div class="heading-block">Have any Questions?</div>
                    <div class="or"><div class="icon"><span class="flaticon-support"></span></div></div>
                    <div class="heading-block">+1- 800 - 4000 - 2353</div>
                </div>
            </div>

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


    <!--Sponsors Section / Style Two-->
    <section class="sponsors-section style-two" style="background-image:url(images/background/image-4.jpg);">
    	<div class="auto-container">
            <!--Sponsors SLider-->
            <ul class="sponsors-slider">
                <li><div class="image-box"><a href="#"><img src="images/clients/6.png" alt=""></a></div></li>
                <li><div class="image-box"><a href="#"><img src="images/clients/7.png" alt=""></a></div></li>
                <li><div class="image-box"><a href="#"><img src="images/clients/8.png" alt=""></a></div></li>
                <li><div class="image-box"><a href="#"><img src="images/clients/9.png" alt=""></a></div></li>
                <li><div class="image-box"><a href="#"><img src="images/clients/10.png" alt=""></a></div></li>
                <li><div class="image-box"><a href="#"><img src="images/clients/6.png" alt=""></a></div></li>
                <li><div class="image-box"><a href="#"><img src="images/clients/7.png" alt=""></a></div></li>
                <li><div class="image-box"><a href="#"><img src="images/clients/8.png" alt=""></a></div></li>
                <li><div class="image-box"><a href="#"><img src="images/clients/9.png" alt=""></a></div></li>
                <li><div class="image-box"><a href="#"><img src="images/clients/10.png" alt=""></a></div></li>
            </ul>
    	</div>
    </section>


    <!--Best Services Section-->
    <section class="best-services-section">
    	<div class="auto-container">

            <!--Heading Title-->
            <div class="sec-title centered">
            	<div class="icon-box"><span class="flaticon-sports-car"></span></div>
                <h2>Our Awesome Services</h2>
                <div class="desc-text">The weather started getting rough the tiny ship was tossed if not for the courage.</div>
            </div>

            <div class="row clearfix">
            	<!--Column -->
                <div class="column col-md-4 col-sm-12 col-xs-12">
                	<!--Service Block-->
                    <div class="service-block-three">
                        <div class="inner-box">
                            <div class="icon-box"><span class="flaticon-cup-1"></span></div>
                            <h3>Night Parties</h3>
                            <div class="text">The weather started getting rough the ship was tossed if courage.</div>
                        </div>
                    </div>

                    <!--Service Block-->
                    <div class="service-block-three">
                        <div class="inner-box">
                            <div class="icon-box"><span class="flaticon-engagement-ring"></span></div>
                            <h3>Weddings</h3>
                            <div class="text">The weather started getting rough the ship was tossed if courage.</div>
                        </div>
                    </div>

                    <!--Service Block-->
                    <div class="service-block-three">
                        <div class="inner-box">
                            <div class="icon-box"><span class="flaticon-pizza-4"></span></div>
                            <h3>Hotels</h3>
                            <div class="text">The weather started getting rough the ship was tossed if courage.</div>
                        </div>
                    </div>

                </div>

                <!--Column -->
                <div class="column image-column col-md-4 col-sm-12 col-xs-12">
                	<div class="inner-box wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    	<div class="image-box">
                        	<figure class="image"><img src="images/resource/featured-image-3.jpg" alt=""></figure>
                            <div class="overlay-box">
                            	<div class="logo"><img src="images/logo-6.png" alt=""></div>
                                <div class="text">For details, visit Rental Agreement and FAQ .</div>
                            </div>
                        </div>
                        <figure class="key-image"><img src="images/resource/key-image.png" alt=""></figure>
                    </div>
                </div>

                <!--Column -->
                <div class="column col-md-4 col-sm-12 col-xs-12">
                	<!--Service Block-->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="icon-box"><span class="flaticon-shopping-cart"></span></div>
                            <h3>Shopping Malls</h3>
                            <div class="text">The weather started getting rough the ship was tossed if courage.</div>
                        </div>
                    </div>

                    <!--Service Block-->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="icon-box"><span class="flaticon-transport-1"></span></div>
                            <h3>Airports</h3>
                            <div class="text">The weather started getting rough the ship was tossed if courage.</div>
                        </div>
                    </div>

                    <!--Service Block-->
                    <div class="service-block">
                        <div class="inner-box">
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


    <!--News Section-->
    <section class="news-section">
    	<div class="auto-container">

            <!--Heading Title-->
            <div class="sec-title centered">
            	<div class="icon-box"><span class="flaticon-sports-car"></span></div>
                <h2>Our Latest News</h2>
                <div class="desc-text">The weather started getting rough the tiny ship was tossed if not for the courage.</div>
            </div>

            <div class="row clearfix">
            	<!--News Style One-->
                <div class="news-style-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    	<figure class="image-box"><a href="blog-single.php"><img src="images/resource/blog-image-1.jpg" alt=""></a> <div class="date-box"><span class="day">01</span><span class="month">Sep</span></div></figure>
                        <div class="lower-content">
                        	<h3><a href="blog-single.php">Group would some form a family</a></h3>
                            <ul class="post-meta clearfix">
                            	<li><a href="#"><span class="fa fa-eye"></span> 12 Views</a></li>
                                <li><a href="#"><span class="fa fa-share-alt"></span> 15 Shares</a></li>
                            </ul>
                            <div class="text">The weather started getting rough the tiny ship was lost the min ting a maximum security road and back stock a against ade lost the minnow.</div>
                            <a href="blog-single.php" class="theme-btn btn-style-four">Read More</a>
                        </div>
                    </div>
                </div>

                <!--News Style One-->
                <div class="news-style-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    	<figure class="image-box"><a href="blog-single.php"><img src="images/resource/blog-image-2.jpg" alt=""></a> <div class="date-box"><span class="day">27</span><span class="month">Aug</span></div></figure>
                        <div class="lower-content">
                        	<h3><a href="blog-single.php">The tale of our castaways</a></h3>
                            <ul class="post-meta clearfix">
                            	<li><a href="#"><span class="fa fa-eye"></span> 46 Views</a></li>
                                <li><a href="#"><span class="fa fa-share-alt"></span> 38 Shares</a></li>
                            </ul>
                            <div class="text">The weather started getting rough the tiny ship was lost the min ting a maximum security road and back stock a against ade lost the minnow.</div>
                            <a href="blog-single.php" class="theme-btn btn-style-four">Read More</a>
                        </div>
                    </div>
                </div>

                <!--News Style One-->
                <div class="news-style-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    	<figure class="image-box"><a href="blog-single.php"><img src="images/resource/blog-image-3.jpg" alt=""></a> <div class="date-box"><span class="day">19</span><span class="month">Jul</span></div></figure>
                        <div class="lower-content">
                        	<h3><a href="blog-single.php">Flying away on a wings and prayer</a></h3>
                            <ul class="post-meta clearfix">
                            	<li><a href="#"><span class="fa fa-eye"></span> 51 Views</a></li>
                                <li><a href="#"><span class="fa fa-share-alt"></span> 42 Shares</a></li>
                            </ul>
                            <div class="text">The weather started getting rough the tiny ship was lost the min ting a maximum security road and back stock a against ade lost the minnow.</div>
                            <a href="blog-single.php" class="theme-btn btn-style-four">Read More</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!--Main Footer / Footer Style Two-->
    <footer class="main-footer footer-style-two">
		<!--Centered Widget-->
        <div class="centered-widget">
        	<div class="auto-container">
            	<div class="widget-content">
                	<figure class="logo"><a href="index.php"><img src="images/logo-2.png" alt=""></a></figure>
                    <div class="text">The weather started getting rough the tiny ship was lost the min ting anti maxi security road and back lost the minnow ther started getting rough the tiny ship minnow.</div>
                    <div class="social-links">
                    	<a href="#"><span class="fa fa-facebook-f"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                        <a href="#"><span class="fa fa-linkedin"></span></a>
                        <a href="#"><span class="fa fa-instagram"></span></a>
                    </div>
                </div>
            </div>
        </div>

        <!--Widgets Section-->
        <div class="widgets-section">
        	<div class="auto-container">
            	<div class="row clearfix">
                	<!--Big Column-->
                	<div class="big-column col-md-6 col-sm-12 col-xs-12">
                    	<div class="row clearfix">

                            <!--Footer Column-->
                        	<div class="footer-column col-md-7 col-sm-6 col-xs-12">
                            	<div class="footer-widget contact-widget">
                                	<h2>Contact Us</h2>
                                    <div class="widget-content">
                                        <ul class="contact-info">
                                        	<li><div class="icon"><span class="flaticon-business"></span></div>123A, Mainbridge, Lotopride, United States.</li>
                                            <li><div class="icon"><span class="flaticon-technology-5"></span></div>+1800 - 2374 - 1900</li>
                                            <li><div class="icon"><span class="flaticon-envelope"></span></div>valencia@support.com</li>
                                        </ul>
                                        <a href="contact.php" class="theme-btn btn-style-four">View Location</a>
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
                            	<div class="footer-widget posts-widget">
                                	<h2>Recent Posts</h2>
                                    <div class="widget-content">
                                    	<!--Post-->
                                        <div class="post">
                                        	<figure class="image"><a href="#"><img src="images/resource/post-thumb-1.jpg" alt=""></a></figure>
                                            <div class="text"><a href="#">The weather started getting rough the tiny.</a></div>
                                            <div class="time">5 Hours Ago</div>
                                        </div>

                                        <!--Post-->
                                        <div class="post">
                                        	<figure class="image"><a href="#"><img src="images/resource/post-thumb-2.jpg" alt=""></a></figure>
                                            <div class="text"><a href="#">The weather started getting rough the tiny.</a></div>
                                            <div class="time">2 Minutes Ago</div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                        	<div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="footer-widget work-hours-widget">
                                	<h2>Working Hours</h2>
                                    <div class="widget-content">
                                    	<div class="text">The weather started getting rough ship was lost the min ting a maximum.</div>
                                        <ul class="hours-info">
                                        	<li class="clearfix"><div class="pull-left">Monday - Friday</div><div class="pull-right">9.00am to 8.00pm</div></li>
                                            <li class="clearfix"><div class="pull-left">Saturday</div><div class="pull-right">10.00am to 7.30pm</div></li>
                                            <li class="clearfix"><div class="pull-left">Sunday</div><div class="pull-right">11.00am to 6.00pm</div></li>
                                        </ul>
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
