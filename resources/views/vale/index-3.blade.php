@extends('main')
@section('pagecontent')
<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header / Header Style Three-->
    @include('partials.elements.nav')
    <!--End Main Header -->


    <!--Main Slider-->
    <section class="main-slider" data-start-height="800" data-slide-overlay="yes">

        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>

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

                </ul>
            </div>
        </div>
    </section>


    <!--Drive Cars / Style Three-->
    <section class="drive-cars-section style-three">
    	<div class="auto-container">

            <!--Floated Title-->
            <div class="floated-title">
                <div class="inner clearfix">
                    <div class="heading-block">Hire a Luxury Cars</div>
                    <div class="or">OR</div>
                    <div class="heading-block">Hire a Sedan Cars</div>
                </div>
            </div>

            <!--Big Image-->
            <figure class="big-image"><img src="images/resource/featured-image-1.jpg" alt=""></figure>

            <div class="row clearfix">

                <!--Service Block-->
                <div class="service-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-tax"></span></div>
                        <h3>Tax & Insurance Included</h3>
                        <div class="text">The weather started getting rough the ship was tossed if courage.</div>
                    </div>
                </div>

                <!--Service Block-->
                <div class="service-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-shape-1"></span></div>
                        <h3>Free Fuel </h3>
                        <div class="text">The weather started getting rough the ship was tossed if courage.</div>
                    </div>
                </div>

                <!--Service Block-->
                <div class="service-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-money-3"></span></div>
                        <h3>Refundable Deposit</h3>
                        <div class="text">The weather started getting rough the ship was tossed if courage.</div>
                    </div>
                </div>

                <!--Service Block-->
                <div class="service-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-anchor"></span></div>
                        <h3>Well Trained Chauffeurs</h3>
                        <div class="text">The weather started getting rough the ship was tossed if courage.</div>
                    </div>
                </div>

                <!--Service Block-->
                <div class="service-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-archives"></span></div>
                        <h3>Fully Loaded Cars</h3>
                        <div class="text">The weather started getting rough the ship was tossed if courage.</div>
                    </div>
                </div>

                <!--Service Block-->
                <div class="service-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-medal"></span></div>
                        <h3>Extra Safety via GPS </h3>
                        <div class="text">The weather started getting rough the ship was tossed if courage.</div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!--Fun Facts Section / Style Two-->
    <section class="fun-facts-section style-two fact-counter" style="background-image:url(images/background/image-1.jpg);">
    	<div class="auto-container">

            <!--Default Video Box-->
            <div class="default-video-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
            	<div class="inner-box">
                	<figure class="image-box"><img src="images/resource/featured-image-4.jpg" alt=""></figure>
                    <a href="https://www.youtube.com/watch?v=wDwXASGueKo" class="lightbox-image overlay-link"><div class="icon-box"><span class="icon flaticon-play-button-2"></span></div></a>
                </div>
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


    <!--Booking Form Section-->
    <section class="booking-form-section">
    	<div class="auto-container">

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

                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="check-box">
                                        <input type="checkbox" id="cbox-one"><label for="cbox-one"><span class="icon"><span class="square"></span><span class="fa fa-check"></span></span> Return to Pickup Location</label>
                                    </div>
                                </div>

                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="btn-outer">
                                        <button type="submit" class="theme-btn btn-style-one">Book Now</button>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </form>
            </div>

		</div>
	</section>


   <!--Team Section-->
    <section class="team-section no-padding-bottom">
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

    <!--Sponsors Section-->
    <section class="sponsors-section padding-50">
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


    <!--App Section-->
    <section class="app-section">
    	<div class="auto-container">

            <div class="row clearfix">

                <!--Content Column-->
                <div class="content-column col-md-7 col-sm-12 col-xs-12">
                    <div class="inner-box">
                        <h2>Download our App</h2>
                        <div class="text">
                        	<p>The weather started getting rough the tiny ship was tossed if not for the courage that this group would somehow form a family that's the way we all became the Brady at a bunch thank you for being a friend travelled down.</p>
                            <p class="discount">* Download our App and Get <a href="#">15% Off</a> on Every Destination</p>
                        </div>
                        <a href="our-cars.php" class="theme-btn btn-style-three"><span class="fa fa-apple"></span> &ensp; DOWNLOAD</a>
                        <a href="our-cars.php" class="theme-btn btn-style-five"><span class="fa fa-android"></span> &ensp; DOWNLOAD</a>
                    </div>
                </div>

                <!--Image Column-->
                <div class="image-column col-md-5 col-sm-12 col-xs-12">
                    <div class="inner-box wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <figure class="image-box"><img src="images/resource/device-image.png" alt=""></figure>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!--Main Footer / Footer Style Three-->
    <footer class="main-footer footer-style-three" style="background-image:url(images/background/image-5.jpg);">

        <!--Widgets Section-->
        <div class="widgets-section">
        	<div class="auto-container">
            	<div class="row clearfix">

                    <!--Footer Column-->
                    <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-widget about-widget">
                            <div class="widget-content">
                                <figure class="logo"><a href="index.php"><img src="images/logo-3.png" alt=""></a></figure>
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

                    <!--Footer Column-->
                    <div class="footer-column col-md-4 col-sm-6 col-xs-12">
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

                    <!--Footer Column-->
                    <div class="footer-column col-md-4 col-sm-6 col-xs-12">
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


                 </div>
             </div>
         </div>

         <!--Footer Bottom-->
         <div class="footer-bottom">
         	<div class="auto-container">
            	<div class="text">Copyrights &copy; 2017 Valencia. All Rights Reserved</div>
            </div>
         </div>

    </footer>


</div>
<!--End pagewrapper-->

<!--Scroll to top-->
@stop