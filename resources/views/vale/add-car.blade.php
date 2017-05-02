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
            <h1>Our Cars</h1>
            <div class="bread-crumb-outer">
                <ul class="bread-crumb clearfix">
                    <li><a href="/index">Home</a></li>
                    <li class="active">Our Cars</li>
                </ul>
            </div>
        </div>
    </section>


    <!--Sidebar Page-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">



                <!--Confirmation popup-->
                <div class="backdrop-overlay"></div>

                <div class="popup-outer">
                    <div class="popup-box">
                        <div class="popup-container">
                            <div class="confirmation-popup">
                                <!--Close Btn-->
                                <div class="close-btn"><a href="#"><span class="fa fa-close"></span></a></div>

                                <div class="inner-box">
                                    <div class="row clearfix">
                                        <!--Image Column-->
                                        <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                            <div class="image-box">
                                                <figure class="image"><a href="car-single.php"><img src="images/gallery/27.png" alt=""></a></figure>
                                            </div>
                                        </div>
                                        <!--Content Column-->
                                        <div class="content-column col-md-6 col-sm-6 col-xs-12">
                                            <div class="text"><form action="" method="post" enctype="multipart/form-data">

                                            <h3>Please Add Here Your New Car</h3>
                                            <h4> Car Name:</4><input type="text" name="car" value="">


                                            <ul class="info clearfix">
                                                <li>Price: $ /Hour<span class="price"><input type="text" name="price-1"></span></li>
                                                <li>Price: $ /Day<span class="price"><input type="text" name="price-2"></span></li>
                                            </ul>
                                        </div>

                                    </div>
                          <input type="file" name="fileToUpload" id="fileToUpload">
                                    <!--Message-->
                                    <div class="message-outer">
                                        <input type="submit" name="submit" value="Submit Data" class="theme-btn btn-style-four">
                                    </div>
                                         </form></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--End Confirmation popup-->



                <!--Content Side-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">

                    <!--News Section-->
                    <section class="cars-section">

                        <div class="row clearfix">
                            <!--Default Car Item-->
                            <div class="default-car-item col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="/car-single"><img src="images/gallery/1.jpg" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="/car-single.">Bentley i400m</a></h3>
                                        <ul class="info clearfix">
                                            <li>Price: <span class="price"><strong>$60</strong> / Hour</span></li>
                                            <li>Price: <span class="price"><strong>$620</strong> / Day</span></li>
                                        </ul>
                                        <a href="/car-single." class="theme-btn btn-style-four">Rent a Car</a>
                                    </div>
                                </div>
                            </div>

                            <!--Default Car Item-->
                            <div class="default-car-item col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="/car-single."><img src="images/gallery/2.jpg" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="car-single.php">Chevorlet Trucks</a></h3>
                                        <ul class="info clearfix">
                                            <li>Price: <span class="price"><strong>$75</strong> / Hour</span></li>
                                            <li>Price: <span class="price"><strong>$690</strong> / Day</span></li>
                                        </ul>
                                        <a href="car-single.php" class="theme-btn btn-style-four">Rent a Car</a>
                                    </div>
                                </div>
                            </div>

                            <!--Default Car Item-->
                            <div class="default-car-item col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="car-single.php"><img src="images/gallery/3.jpg" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="car-single.php">Jaguar H-Series</a></h3>
                                        <ul class="info clearfix">
                                            <li>Price: <span class="price"><strong>$62</strong> / Hour</span></li>
                                            <li>Price: <span class="price"><strong>$640</strong> / Day</span></li>
                                        </ul>
                                        <a href="car-single.php" class="theme-btn btn-style-four">Rent a Car</a>
                                    </div>
                                </div>
                            </div>

                            <!--Default Car Item-->
                            <div class="default-car-item col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="car-single.php"><img src="images/gallery/4.jpg" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="car-single.php">Rangerover</a></h3>
                                        <ul class="info clearfix">
                                            <li>Price: <span class="price"><strong>$58</strong> / Hour</span></li>
                                            <li>Price: <span class="price"><strong>$595</strong> / Day</span></li>
                                        </ul>
                                        <a href="car-single.php" class="theme-btn btn-style-four">Rent a Car</a>
                                    </div>
                                </div>
                            </div>

                            <!--Default Car Item-->
                            <div class="default-car-item col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="car-single.php"><img src="images/gallery/5.jpg" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="car-single.php">Lexus Supreme</a></h3>
                                        <ul class="info clearfix">
                                            <li>Price: <span class="price"><strong>$65</strong> / Hour</span></li>
                                            <li>Price: <span class="price"><strong>$655</strong> / Day</span></li>
                                        </ul>
                                        <a href="car-single.php" class="theme-btn btn-style-four">Rent a Car</a>
                                    </div>
                                </div>
                            </div>

                            <!--Default Car Item-->
                            <div class="default-car-item col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="car-single.php"><img src="images/gallery/6.jpg" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="car-single.php">Aston Martin</a></h3>
                                        <ul class="info clearfix">
                                            <li>Price: <span class="price"><strong>$80</strong> / Hour</span></li>
                                            <li>Price: <span class="price"><strong>$790</strong> / Day</span></li>
                                        </ul>
                                        <a href="car-single.php" class="theme-btn btn-style-four">Rent a Car</a>
                                    </div>
                                </div>
                            </div>

                            <!--Default Car Item-->
                            <div class="default-car-item col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="car-single.php"><img src="images/gallery/6-b.jpg" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="car-single.php">Jaguar H-Series</a></h3>
                                        <ul class="info clearfix">
                                            <li>Price: <span class="price"><strong>$62</strong> / Hour</span></li>
                                            <li>Price: <span class="price"><strong>$640</strong> / Day</span></li>
                                        </ul>
                                        <a href="car-single.php" class="theme-btn btn-style-four">Rent a Car</a>
                                    </div>
                                </div>
                            </div>

                            <!--Default Car Item-->
                            <div class="default-car-item col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="car-single.php"><img src="images/gallery/6-a.jpg" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="car-single.php">Aston Martin</a></h3>
                                        <ul class="info clearfix">
                                            <li>Price: <span class="price"><strong>$80</strong> / Hour</span></li>
                                            <li>Price: <span class="price"><strong>$790</strong> / Day</span></li>
                                        </ul>
                                        <a href="car-single.php" class="theme-btn btn-style-four">Rent a Car</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <br><br>
                        <!-- Styled Pagination -->
                        <div class="styled-pagination text-center">
                            <ul>
                                <li><a href="#" class="active">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">--</a></li>
                                <li><a class="next" href="#"><span class="fa fa-angle-double-right"></span></a></li>
                            </ul>
                        </div>

                    </section>


                </div>
                <!--Content Side-->

                <!--Sidebar-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 padd-left-40">
                    <aside class="sidebar">

                        <!-- Search Cars -->
                        <div class="sidebar-widget search-cars">

                            <div class="widget-box">
                                <div class="sidebar-title"><h3>Search Results</h3></div>
                                <div class="default-form">
                                    <form method="post" action="our-cars.php">
                                        <div class="form-group">
                                            <select name="brand">
                                                <option>Honda</option>
                                                <option>Toyota</option>
                                                <option>Ford</option>
                                                <option>Bentley</option>
                                                <option>BMW</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select name="car">
                                                <option>Honda City</option>
                                                <option>Toyota Corolla</option>
                                                <option>Ford Indigo</option>
                                                <option>Bentley Black</option>
                                                <option>BMW Classic</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select name="year">
                                                <option>2017</option>
                                                <option>2016</option>
                                                <option>2015</option>
                                                <option>2014</option>
                                                <option>2013</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                        <!-- Car Types -->
                        <div class="sidebar-widget car-types">
                            <div class="widget-box">
                                <div class="sidebar-title"><h3>Car Types</h3></div>

                                <ul class="list">
                                    <li><a href="#" class="clearfix"><span class="pull-left">All</span> <span class="pull-right">(3200)</span></a></li>
                                    <li><a href="#" class="clearfix"><span class="pull-left">Luxury</span> <span class="pull-right">(1100)</span></a></li>
                                    <li><a href="#" class="clearfix"><span class="pull-left">Sedan Cars</span> <span class="pull-right">(820)</span></a></li>
                                    <li><a href="#" class="clearfix"><span class="pull-left">Vintage Cars</span> <span class="pull-right">(221)</span></a></li>
                                    <li><a href="#" class="clearfix"><span class="pull-left">Pickups</span> <span class="pull-right">(1280)</span></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Range Widget -->
                        <div class="sidebar-widget rangeslider-widget">
                            <div class="widget-box">
                                <div class="sidebar-title"><h3>Price Range</h3></div>

                                <div class="outer-box">
                                    <div class="range-slider-price" id="range-slider-price"></div>
                                    <div class="form-group clearfix">
                                        <div class="pull-left">
                                            <span class="left-val">$<input type="text" class="val-box text-left" id="min-value-rangeslider"></span> - <span class="right-val">$<input type="text" class="val-box text-right" id="max-value-rangeslider"></span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Fuel Types -->
                        <div class="sidebar-widget fuel-types">
                            <div class="widget-box">
                                <div class="sidebar-title"><h3>Fule Types</h3></div>

                                <ul class="list">
                                    <li><a href="#" class="clearfix"><span class="pull-left">All</span> <span class="pull-right">(3200)</span></a></li>
                                    <li><a href="#" class="clearfix"><span class="pull-left">Petrol</span> <span class="pull-right">(1100)</span></a></li>
                                    <li><a href="#" class="clearfix"><span class="pull-left">Diesel</span> <span class="pull-right">(820)</span></a></li>
                                    <li><a href="#" class="clearfix"><span class="pull-left">Lubes Gas</span> <span class="pull-right">(221)</span></a></li>
                                    <li><a href="#" class="clearfix"><span class="pull-left">Hybrid</span> <span class="pull-right">(1280)</span></a></li>
                                </ul>
                            </div>
                        </div>

                    </aside>


                </div>
                <!--Sidebar-->

            </div>
        </div>
    </div>

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