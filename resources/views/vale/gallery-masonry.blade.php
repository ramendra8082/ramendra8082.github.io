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
            <h1>Portfolio</h1>
            <div class="bread-crumb-outer">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Portfolio</li>
                </ul>
            </div>
        </div>
    </section>


    <!--Gallery Section-->
    <section class="gallery-section">
    	<div class="auto-container">

            <!--Heading Title-->
            <div class="sec-title centered">
            	<div class="icon-box"><span class="flaticon-sports-car"></span></div>
                <h2>Our Portfolio</h2>
                <div class="desc-text">The weather started getting rough the tiny ship was tossed if not for the courage.</div>
            </div>

            <div class="masonry-gallery">
        		<!--Filter-->
                <div class="filters text-center">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter=".all">All</li>
                        <li class="filter" data-role="button" data-filter=".pickups">Pickups</li>
                        <li class="filter" data-role="button" data-filter=".sedan">Sedan</li>
                        <li class="filter" data-role="button" data-filter=".compact">Compact</li>
                        <li class="filter" data-role="button" data-filter=".wagon">Wagon</li>
                        <li class="filter" data-role="button" data-filter=".crossover">Crossover</li>
                    </ul>
                </div>

                <!--Items Container-->
                <div class="items-container clearfix">


                    <!--Default Portfolio Item-->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 default-portfolio-item masonry-item all wagon crossover">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/16.jpg" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a class="#" href="#" title="Image Title Here">Maserati</a></h3>
                                        <div class="cat-links"><a href="#">Los Angeles</a> , <a href="#">USA</a></div>
                                        <a href="images/gallery/16.jpg" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
                                        <a href="#" class="option-btn"><span class="fa fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Default Portfolio Item-->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 default-portfolio-item masonry-item all sedan crossover">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/17.jpg" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a class="#" href="#" title="Image Title Here">Maserati</a></h3>
                                        <div class="cat-links"><a href="#">Los Angeles</a> , <a href="#">USA</a></div>
                                        <a href="images/gallery/17.jpg" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
                                        <a href="#" class="option-btn"><span class="fa fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Default Portfolio Item-->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 default-portfolio-item masonry-item all pickups sedan compact">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/18.jpg" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a class="#" href="#" title="Image Title Here">Maserati</a></h3>
                                        <div class="cat-links"><a href="#">Los Angeles</a> , <a href="#">USA</a></div>
                                        <a href="images/gallery/18.jpg" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
                                        <a href="#" class="option-btn"><span class="fa fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Default Portfolio Item-->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 default-portfolio-item masonry-item all sedan wagon crossover">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/19.jpg" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a class="#" href="#" title="Image Title Here">Maserati</a></h3>
                                        <div class="cat-links"><a href="#">Los Angeles</a> , <a href="#">USA</a></div>
                                        <a href="images/gallery/19.jpg" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
                                        <a href="#" class="option-btn"><span class="fa fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Default Portfolio Item-->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 default-portfolio-item masonry-item all pickups sedan compact">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/20.jpg" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a class="#" href="#" title="Image Title Here">Maserati</a></h3>
                                        <div class="cat-links"><a href="#">Los Angeles</a> , <a href="#">USA</a></div>
                                        <a href="images/gallery/20.jpg" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
                                        <a href="#" class="option-btn"><span class="fa fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Default Portfolio Item-->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 default-portfolio-item masonry-item all compact wagon crossover">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/21.jpg" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a class="#" href="#" title="Image Title Here">Maserati</a></h3>
                                        <div class="cat-links"><a href="#">Los Angeles</a> , <a href="#">USA</a></div>
                                        <a href="images/gallery/21.jpg" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
                                        <a href="#" class="option-btn"><span class="fa fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Default Portfolio Item-->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 default-portfolio-item masonry-item all sedan wagon compact">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/22.jpg" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a class="#" href="#" title="Image Title Here">Maserati</a></h3>
                                        <div class="cat-links"><a href="#">Los Angeles</a> , <a href="#">USA</a></div>
                                        <a href="images/gallery/22.jpg" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
                                        <a href="#" class="option-btn"><span class="fa fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Default Portfolio Item-->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 default-portfolio-item masonry-item all pickups wagon compact">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/23.jpg" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a class="#" href="#" title="Image Title Here">Maserati</a></h3>
                                        <div class="cat-links"><a href="#">Los Angeles</a> , <a href="#">USA</a></div>
                                        <a href="images/gallery/23.jpg" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
                                        <a href="#" class="option-btn"><span class="fa fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Default Portfolio Item-->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 default-portfolio-item masonry-item all sedan wagon crossover">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/24.jpg" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a class="#" href="#" title="Image Title Here">Maserati</a></h3>
                                        <div class="cat-links"><a href="#">Los Angeles</a> , <a href="#">USA</a></div>
                                        <a href="images/gallery/24.jpg" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
                                        <a href="#" class="option-btn"><span class="fa fa-link"></span></a>
                                    </div>
                                </div>
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
                <br><br>

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
