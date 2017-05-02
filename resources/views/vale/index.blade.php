@extends('main')
@section('pagecontent')
<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    @include('partials.elements.nav')


    <!--Main Slider-->
    <section class="main-slider" data-start-height="800" data-slide-overlay="yes">

        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>

                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/1.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="images/main-slider/1-1-1.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

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
					data-endeasing="Power4.easeIn"><div class="small-title">India's Car Rental / Hire Company</div> </div>

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

                    <li data-transition="zoomin" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/2.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="images/main-slider/2-1.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

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
					data-endeasing="Power4.easeIn"><div class="small-title">Welcome to iGaddi Car Hire</div> </div>

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
					data-endeasing="Power4.easeIn"><div class="text-center"><h2 class="big-title">Enjoy the Ride with Brand New <br>Cars</h2></div></div>

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

                    <li data-transition="zoomout" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/3.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="images/main-slider/3-1.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

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
					data-endeasing="Power4.easeIn"><div class="small-title">Starts from INR 500/day</div> </div>

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
					data-endeasing="Power4.easeIn"><div class="text-center"><h2 class="big-title">Choose from a wide variety of cars <br>as per your choice.</h2></div></div>

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


    <!--Welcome Section-->
    <section class="welcome-section">
    	<div class="auto-container">
    		<div class="row clearfix">
    			<!--Content Column-->
    			<div class="content-column pull-right col-md-8 col-sm-12 col-xs-12">
    				<!--Heading Title-->
    				<div class="sec-title">
						<h2>Welcome to iGaddi Car Hire</h2>
						<div class="desc-text">The weather started getting rough the tiny ship was tossed if not for the courage of the fearless crew the minnow would be lost the minnow would be lost.</div>
					</div>

					<div class="row clearfix">

						<!--Service Block-->
						<div class="service-block col-md-6 col-sm-6 col-xs-12">
							<div class="inner-box">
								<div class="icon-box"><span class="flaticon-tax"></span></div>
								<h3>Tax & Insurance Included</h3>
								<div class="text">The weather started getting rough the ship was tossed if courage.</div>
							</div>
						</div>

						<!--Service Block-->
						<div class="service-block col-md-6 col-sm-6 col-xs-12">
							<div class="inner-box">
								<div class="icon-box"><span class="flaticon-money"></span></div>
								<h3>Refundable Deposit</h3>
								<div class="text">The weather started getting rough the ship was tossed if courage.</div>
							</div>
						</div>

						<!--Service Block-->
						<div class="service-block col-md-6 col-sm-6 col-xs-12">
							<div class="inner-box">
								<div class="icon-box"><span class="flaticon-shape-1"></span></div>
								<h3>Free Fuel </h3>
								<div class="text">The weather started getting rough the ship was tossed if courage.</div>
							</div>
						</div>

						<!--Service Block-->
						<div class="service-block col-md-6 col-sm-6 col-xs-12">
							<div class="inner-box">
								<div class="icon-box"><span class="flaticon-support"></span></div>
								<h3>24/7 Assistance Support</h3>
								<div class="text">The weather started getting rough the ship was tossed if courage.</div>
							</div>
						</div>

					</div>
				</div>
				<!--Form Column-->
    			<div class="form-column pull-left col-md-4 col-sm-12 col-xs-12">
    				<div class="form-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
    					<!--Tabs Box-->
    					<div class="tabs-box booking-tabs">
    						<!--Tab Buttons-->
    						<ul class="tab-buttons clearfix">
								<li class="tab-btn active-btn" data-tab="#car-rental-tab"><div class="icon-box"><span class="flaticon-car-3"></span></div> <span class="txt"> Car Rental</span></li>
								<li class="tab-btn" data-tab="#van-rental-tab"><div class="icon-box"><span class="flaticon-truck"></span> </div> <span class="txt">Van Rental</span></li>
							</ul>

							<!--Tabs Content-->
							<div class="tabs-content">
								<!--Tab / Active Tab-->
								<div class="tab active-tab" id="car-rental-tab">
									<div class="default-form">
										<form method="post" action="contact.php">

                                            <div class="field-label">Pickup</div>
                               				<div class="row clearfix">
                                				<div class="form-group col-md-12 col-sm-12 col-xs-12">
													<div class="field-inner"><input type="text" name="field-name" value="" placeholder="Airport Code, City, Hotel, Zip, etc.."></div>
												</div>
												<div class="form-group col-lg-6 col-md-12 col-sm-6 col-xs-12">
													<div class="field-inner"><input type="text" class="datepicker" id="field-one" name="field-name" value="" placeholder="Date"><label class="input-icon" for="field-one"><span class="fa fa-calendar"></span></label></div>
												</div>
												<div class="form-group col-lg-6 col-md-12 col-sm-6 col-xs-12">
													<div class="field-inner"><input type="text" id="field-two" name="field-name" value="" placeholder="Time"><label class="input-icon" for="field-two"><span class="fa fa-clock-o"></span></label></div>
												</div>
											</div>

                                            <div class="span-bottom-20"></div>

                                            <div class="field-label">Drop</div>
											<div class="row clearfix">
												<div class="form-group col-lg-6 col-md-12 col-sm-6 col-xs-12">
													<div class="field-inner"><input type="text" class="datepicker" id="field-three" name="field-name" value="" placeholder="Date"><label class="input-icon" for="field-three"><span class="fa fa-calendar"></span></label></div>
												</div>
												<div class="form-group col-lg-6 col-md-12 col-sm-6 col-xs-12">
													<div class="field-inner"><input type="text" id="field-four" name="field-name" value="" placeholder="Time"><label class="input-icon" for="field-four"><span class="fa fa-clock-o"></span></label></div>
												</div>

                                                <div class="form-group col-sm-12 col-xs-12">
                                                	<div class="check-box">
                                                    	<input type="checkbox" id="cbox-one"><label for="cbox-one"><span class="icon"><span class="square"></span><span class="fa fa-check"></span></span> Return to Pickup Location</label>
                                                    </div>
                                                </div>

                                                <div class="form-group col-sm-12 col-xs-12">
                                                	<button type="submit" class="theme-btn btn-style-three">Book Now</button>
                                                </div>

                                                <div class="form-group col-sm-12 col-xs-12">
                                                	<div class="check-box">
                                                    	<input type="checkbox" id="cbox-two"><label for="cbox-two"><span class="icon"><span class="square"></span><span class="fa fa-check"></span></span> iGaddi Customer Login</label>
                                                    </div>
                                                </div>


											</div>

										</form>
									</div>
								</div>

								<!--Tab-->
								<div class="tab" id="van-rental-tab">
									<div class="default-form">
										<form method="post" action="contact.php">

                                            <div class="field-label">Pickup</div>
                               				<div class="row clearfix">
                                				<div class="form-group col-md-12 col-sm-12 col-xs-12">
													<div class="field-inner"><input type="text" name="field-name" value="" placeholder="Airport Code, City, Hotel, Zip, etc.."></div>
												</div>
												<div class="form-group col-lg-6 col-md-12 col-sm-6 col-xs-12">
													<div class="field-inner"><input type="text" class="datepicker" id="field-five" name="field-name" value="" placeholder="Date"><label class="input-icon" for="field-five"><span class="fa fa-calendar"></span></label></div>
												</div>
												<div class="form-group col-lg-6 col-md-12 col-sm-6 col-xs-12">
													<div class="field-inner"><input type="text" id="field-six" name="field-name" value="" placeholder="Time"><label class="input-icon" for="field-six"><span class="fa fa-clock-o"></span></label></div>
												</div>
											</div>

                                            <div class="span-bottom-20"></div>

                                            <div class="field-label">Drop</div>
											<div class="row clearfix">
												<div class="form-group col-lg-6 col-md-12 col-sm-6 col-xs-12">
													<div class="field-inner"><input type="text" class="datepicker" id="field-seven" name="field-name" value="" placeholder="Date"><label class="input-icon" for="field-seven"><span class="fa fa-calendar"></span></label></div>
												</div>
												<div class="form-group col-lg-6 col-md-12 col-sm-6 col-xs-12">
													<div class="field-inner"><input type="text" id="field-eight" name="field-name" value="" placeholder="Time"><label class="input-icon" for="field-eight"><span class="fa fa-clock-o"></span></label></div>
												</div>

                                                <div class="form-group col-sm-12 col-xs-12">
                                                	<div class="check-box">
                                                    	<input type="checkbox" id="cbox-three"><label for="cbox-three"><span class="icon"><span class="square"></span><span class="fa fa-check"></span></span> Return to Pickup Location</label>
                                                    </div>
                                                </div>

                                                <div class="form-group col-sm-12 col-xs-12">
                                                	<button type="submit" class="theme-btn btn-style-three">Book Now</button>
                                                </div>

                                                <div class="form-group col-sm-12 col-xs-12">
                                                	<div class="check-box">
                                                    	<input type="checkbox" id="cbox-four"><label for="cbox-four"><span class="icon"><span class="square"></span><span class="fa fa-check"></span></span> Valencia Customer Login</label>
                                                    </div>
                                                </div>


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
	</section>


   	<!--Drive Cars-->
    <section class="drive-cars-section">
    	<div class="auto-container">

            <!--Floated Title-->
            <div class="floated-title">
                <div class="inner clearfix">
                    <div class="heading-block">Hire a Luxury Car</div>
                    <div class="or">OR</div>
                    <div class="heading-block">Hire a Sedan Car</div>
                </div>
            </div>

            <!--Big Image-->
            <figure class="big-image"><img src="images/resource/featured-image-1-1.jpg" alt=""></figure>

            <!--Heading Title-->
            <div class="sec-title centered">
            	<div class="icon-box"><span class="flaticon-sports-car"></span></div>
                <h2>Drive a Car of your choice Everyday</h2>
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


    <!--Gallery Section-->
    <section class="gallery-section">
    	<div class="auto-container">

            <!--Heading Title-->
            <div class="sec-title centered">
            	<div class="icon-box"><span class="flaticon-sports-car"></span></div>
                <h2>Meet the Fleet</h2>
                <div class="desc-text">The weather started getting rough the tiny ship was tossed if not for the courage.</div>
            </div>

            <div class="mixitup-gallery">
        		<!--Filter-->
                <div class="filters text-center">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter="all">All</li>
                        <li class="filter" data-role="button" data-filter=".pickups">Pickups</li>
                        <li class="filter" data-role="button" data-filter=".sedan">Sedan</li>
                        <li class="filter" data-role="button" data-filter=".compact">Compact</li>
                        <li class="filter" data-role="button" data-filter=".wagon">Wagon</li>
                        <li class="filter" data-role="button" data-filter=".crossover">Crossover</li>
                    </ul>
                </div>

                <!--Filter List-->
                <div class="filter-list row clearfix">


                    <!--Default Car Item-->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 default-car-item mix mix_all all wagon crossover">
                        <div class="inner-box">
                            <div class="image-box">
                            	<figure class="image"><a href="car-single.php"><img src="images/gallery/tata-nano-1.jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                            	<h3><a href="car-single.php">Tata Nano</a></h3>
                                <ul class="info clearfix">
                                	<li>Price: <span class="price">INR 60 / Hour</span></li>
                                    <li>Price: <span class="price">INR 500 / Day</span></li>
                                </ul>
                                <a href="car-single.php" class="theme-btn btn-style-four">Rent a Car</a>
                            </div>
                        </div>
                    </div>

                    <!--Default Car Item-->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 default-car-item mix mix_all all sedan crossover">
                        <div class="inner-box">
                            <div class="image-box">
                            	<figure class="image"><a href="car-single.php"><img src="images/gallery/suzuki-swift-2.jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                            	<h3><a href="car-single.php">Suzuki Swift</a></h3>
                                <ul class="info clearfix">
                                	<li>Price: <span class="price">INR 200 / Hour</span></li>
                                    <li>Price: <span class="price">INR 1200 / Day</span></li>
                                </ul>
                                <a href="car-single.php" class="theme-btn btn-style-four">Rent a Car</a>
                            </div>
                        </div>
                    </div>

                    <!--Default Car Item-->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 default-car-item mix mix_all all pickups sedan compact">
                        <div class="inner-box">
                            <div class="image-box">
                            	<figure class="image"><a href="car-single.php"><img src="images/gallery/wagon-r-3.jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                            	<h3><a href="car-single.php">Wagon R</a></h3>
                                <ul class="info clearfix">
                                	<li>Price: <span class="price">INR 200 / Hour</span></li>
                                    <li>Price: <span class="price">INR 1200 / Day</span></li>
                                </ul>
                                <a href="car-single.php" class="theme-btn btn-style-four">Rent a Car</a>
                            </div>
                        </div>
                    </div>

                    <!--Default Car Item-->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 default-car-item mix mix_all all sedan wagon crossover">
                        <div class="inner-box">
                            <div class="image-box">
                            	<figure class="image"><a href="car-single.php"><img src="images/gallery/maruti-ertiga-4.png" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                            	<h3><a href="car-single.php">Maruti Ertiga</a></h3>
                                <ul class="info clearfix">
                                	<li>Price: <span class="price">INR 300 / Hour</span></li>
                                    <li>Price: <span class="price">INR 1400 / Day</span></li>
                                </ul>
                                <a href="car-single.php" class="theme-btn btn-style-four">Rent a Car</a>
                            </div>
                        </div>
                    </div>

                    <!--Default Car Item-->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 default-car-item mix mix_all all pickups sedan compact">
                        <div class="inner-box">
                            <div class="image-box">
                            	<figure class="image"><a href="car-single.php"><img src="images/gallery/hyundai-i20-5.jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                            	<h3><a href="car-single.php">Hyundai i20</a></h3>
                                <ul class="info clearfix">
                                	<li>Price: <span class="price">INR 300 / Hour</span></li>
                                    <li>Price: <span class="price">INR 2000 / Day</span></li>
                                </ul>
                                <a href="car-single.php" class="theme-btn btn-style-four">Rent a Car</a>
                            </div>
                        </div>
                    </div>

                    <!--Default Car Item-->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 default-car-item mix mix_all all compact wagon crossover">
                        <div class="inner-box">
                            <div class="image-box">
                            	<figure class="image"><a href="car-single.php"><img src="images/gallery/audi-a6-6.jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                            	<h3><a href="car-single.php">Audi A6</a></h3>
                                <ul class="info clearfix">
                                	<li>Price: <span class="price">INR 1000 / Hour</span></li>
                                    <li>Price: <span class="price">INR 10000 / Day</span></li>
                                </ul>
                                <a href="car-single.php" class="theme-btn btn-style-four">Rent a Car</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>


    <!--Subscribe Section-->
    <section class="subscribe-section" style="background-image:url(images/background/image-2.jpg);">
    	<div class="auto-container">
        	<div class="logo"><a href="index.php"><img src="images/logo-4-2.png" alt=""></a></div>
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
                        	<figure class="logo-box"><a href="index.php"><img src="images/logo-footer.png" alt=""></a></figure>
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
            	<div class="text">Copyrights &copy; 2017 <a href="#">iGaddi</a>. All Rights Reserved</div>
            </div>
         </div>

    </footer>


</div>
@stop
