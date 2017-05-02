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
            <h1>Billing Form</h1>
            <div class="bread-crumb-outer">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Billing Form</li>
                </ul>
            </div>
        </div>
    </section>

    <!--Billing Section-->
    <section class="billing-section">
    	<div class="auto-container">
        	<div class="sec-title"><h2>Billing Details</h2></div>
        	<!--Billing Form-->
            <div class="billing-form default-form">
            	<form method="post" action="confirmation.php">
                	<!--Column-->
                    <div class="row clearfix">

                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                        	<div class="field-label">First Name <span class="req">*</span></div>
                            <div class="field-inner"><input type="text" name="field-name" value="" placeholder="Your First Name"></div>
                        </div>

                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                        	<div class="field-label">Last Name <span class="req">*</span></div>
                            <div class="field-inner"><input type="text" name="field-name" value="" placeholder="Your Last Name"></div>
                        </div>

                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                        	<div class="field-label">Email Address <span class="req">*</span></div>
                            <div class="field-inner"><input type="text" name="field-name" value="" placeholder="Your Email Address"></div>
                        </div>

                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                        	<div class="field-label">Phone <span class="req">*</span></div>
                            <div class="field-inner"><input type="text" name="field-name" value="" placeholder="Your Phone"></div>
                        </div>

                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                        	<div class="field-label">Pickup Date <span class="req">*</span></div>
                            <div class="field-inner"><input type="text" class="datepicker" id="field-one" name="field-name" value="" placeholder="Select the Start Date"><label class="input-icon" for="field-one"><span class="fa fa-calendar"></span></label></div>
                        </div>

                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                        	<div class="field-label">Drop off Date <span class="req">*</span></div>
                            <div class="field-inner"><input type="text" class="datepicker" id="field-two" name="field-name" value="" placeholder="Select the End Date"><label class="input-icon" for="field-one"><span class="fa fa-calendar"></span></label></div>
                        </div>

                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                        	<div class="field-label">Select the Timings <span class="req">*</span></div>
                            <div class="field-inner"><input type="text" id="field-three" name="field-name" value="" placeholder="Select the Timings"><label class="input-icon" for="field-three"><span class="fa fa-clock-o"></span></label></div>
                        </div>

                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                            <div class="field-label">No of Passengers <span class="req">*</span></div>
                            <select name="passengers">
                                <option>Passengers</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                        	<div class="field-label">Pickup Locations <span class="req">*</span></div>
                            <div class="field-inner"><input type="text" id="field-four" name="field-name" value="" placeholder="Select the Location"><label class="input-icon" for="field-three"><span class="fa fa-map-marker"></span></label></div>
                        </div>

                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                            <div class="field-label">Destinations <span class="req">*</span></div>
                            <select name="destination">
                                <option>Destination</option>
                                <option>Location One</option>
                                <option>Location Two</option>
                                <option>Location Three</option>
                                <option>Location Four</option>
                            </select>
                        </div>

                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <div class="check-box">
                                <input type="checkbox" id="cbox-one"><label for="cbox-one"><span class="icon"><span class="square"></span><span class="fa fa-check"></span></span> Create an Account?</label>
                            </div>
                        </div>

                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        	<div class="field-label">Order Note <span class="req">*</span></div>
                            <div class="field-inner"><textarea name="message" placeholder="Write your Message"></textarea></div>
                        </div>

                    </div>
                </form>
            </div>

            <!--Billing Details-->
            <div class="billing-details">
            	<div class="row clearfix">

                	<!--Product Column-->
                    <div class="product-column col-md-6 col-sm-12 col-xs-12">
                    	<div class="inner-box">
                            <h3><a href="car-single.php">Jaguar H-Series</a></h3>
                        	<div class="image-box">
                                <figure class="image"><a href="car-single.php"><img src="images/gallery/26.png" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <ul class="info clearfix">
                                    <li>Price: <span class="price"><strong>$58</strong> / Hour</span></li>
                                    <li>Price: <span class="price"><strong>$595</strong> / Day</span></li>
                                </ul>
                                <div class="btn-outer"><a href="#" class="theme-btn btn-style-four">Rent a Car</a></div>
                            </div>
                        </div>
                    </div>

                    <!--Billing Column-->
                    <div class="billing-column col-md-6 col-sm-12 col-xs-12">
                    	<div class="inner-box">
                        	<div class="check-box">
                                <input type="radio" id="cbox-two" name="billing"><label for="cbox-two"><span class="icon"><span class="square"></span><span class="fa fa-check"></span></span> Check Payment</label>
                            </div>
                            <div class="check-box">
                                <input type="radio" checked id="cbox-three" name="billing"><label for="cbox-three"><span class="icon"><span class="square"></span><span class="fa fa-check"></span></span> Direct Bank Transfer</label>
                            </div>
                            <div class="text">The first mate and his Skipper too will do their very best to make the others comfortable in their tropic island nest the powerless in a world of criminals who operate above the law then one day he was shootin at some food and up through the ground came a bubbling is crude oil was shootin at some food and up through the ground came a bubbling is crude.</div>
                            <div class="check-box">
                                <input type="radio" id="cbox-four" name="billing"><label for="cbox-four"><span class="icon"><span class="square"></span><span class="fa fa-check"></span></span> Direct Bank Transfer<br><img src="images/icons/credit-card-icon.png" alt=""></label>
                            </div>
                            <div class="btn-outer"><button type="button" class="theme-btn btn-style-three">PAY NOW</button></div>
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
