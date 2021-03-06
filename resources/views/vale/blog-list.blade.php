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
            <h1>Blog</h1>
            <div class="bread-crumb-outer">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Blog</li>
                </ul>
            </div>
        </div>
    </section>


    <!--Sidebar Page-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">


                <!--Content Side-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">

                    <!--News Section-->
                    <section class="news-section no-padding">

                        <!--News Style One-->
                        <div class="news-style-one">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-single.php"><img src="images/resource/blog-image-10.jpg" alt=""></a> <div class="date-box"><span class="day">01</span><span class="month">Sep</span></div></figure>
                                <div class="lower-content">
                                    <h3><a href="blog-single.php">Group would some form a family</a></h3>
                                    <ul class="post-meta clearfix">
                                        <li><a href="#"><span class="fa fa-eye"></span> 12 Views</a></li>
                                        <li><a href="#"><span class="fa fa-share-alt"></span> 15 Shares</a></li>
                                    </ul>
                                    <div class="text">The weather started getting rough the tiny ship was lost the min ting a maximum security road and back stock a against ade lost the minnow weather started getting rough the tiny ship was lost the min ting a maximum security road and back stock a against ade lost the minnow.</div>
                                    <a href="blog-single.php" class="theme-btn btn-style-four">Read More</a>
                                </div>
                            </div>
                        </div>

                        <!--News Style One-->
                        <div class="news-style-one">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-single.php"><img src="images/resource/blog-image-11.jpg" alt=""></a> <div class="date-box"><span class="day">27</span><span class="month">Aug</span></div></figure>
                                <div class="lower-content">
                                    <h3><a href="blog-single.php">The tale of our castaways</a></h3>
                                    <ul class="post-meta clearfix">
                                        <li><a href="#"><span class="fa fa-eye"></span> 12 Views</a></li>
                                        <li><a href="#"><span class="fa fa-share-alt"></span> 15 Shares</a></li>
                                    </ul>
                                    <div class="text">The weather started getting rough the tiny ship was lost the min ting a maximum security road and back stock a against ade lost the minnow weather started getting rough the tiny ship was lost the min ting a maximum security road and back stock a against ade lost the minnow.</div>
                                    <a href="blog-single.php" class="theme-btn btn-style-four">Read More</a>
                                </div>
                            </div>
                        </div>

                        <!--News Style One-->
                        <div class="news-style-one">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-single.php"><img src="images/resource/blog-image-12.jpg" alt=""></a> <div class="date-box"><span class="day">19</span><span class="month">Jul</span></div></figure>
                                <div class="lower-content">
                                    <h3><a href="blog-single.php">Flying away on a wings and prayer</a></h3>
                                    <ul class="post-meta clearfix">
                                        <li><a href="#"><span class="fa fa-eye"></span> 12 Views</a></li>
                                        <li><a href="#"><span class="fa fa-share-alt"></span> 15 Shares</a></li>
                                    </ul>
                                    <div class="text">The weather started getting rough the tiny ship was lost the min ting a maximum security road and back stock a against ade lost the minnow weather started getting rough the tiny ship was lost the min ting a maximum security road and back stock a against ade lost the minnow.</div>
                                    <a href="blog-single.php" class="theme-btn btn-style-four">Read More</a>
                                </div>
                            </div>
                        </div>

                        <!--News Style One-->
                        <div class="news-style-one">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-single.php"><img src="images/resource/blog-image-13.jpg" alt=""></a> <div class="date-box"><span class="day">30</span><span class="month">Jul</span></div></figure>
                                <div class="lower-content">
                                    <h3><a href="blog-single.php">Flying away on a wings and prayer</a></h3>
                                    <ul class="post-meta clearfix">
                                        <li><a href="#"><span class="fa fa-eye"></span> 12 Views</a></li>
                                        <li><a href="#"><span class="fa fa-share-alt"></span> 15 Shares</a></li>
                                    </ul>
                                    <div class="text">The weather started getting rough the tiny ship was lost the min ting a maximum security road and back stock a against ade lost the minnow weather started getting rough the tiny ship was lost the min ting a maximum security road and back stock a against ade lost the minnow.</div>
                                    <a href="blog-single.php" class="theme-btn btn-style-four">Read More</a>
                                </div>
                            </div>
                        </div>

                        <br><br>
                        <!-- Styled Pagination -->
                        <div class="styled-pagination">
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

                        <!-- Search Form -->
                        <div class="sidebar-widget search-box">

                            <form method="post" action="blog.php">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search Here">
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>

                        </div>


                        <!-- Categories -->
                        <div class="sidebar-widget categories">
                        	<div class="widget-box">
                                <div class="sidebar-title"><h3>Categories</h3></div>

                                <ul class="list">
                                    <li><a href="#" class="clearfix"><span class="pull-left">Night Parties</span> <span class="pull-right">16</span></a></li>
                                    <li><a href="#" class="clearfix"><span class="pull-left">Weddings</span> <span class="pull-right">20</span></a></li>
                                    <li><a href="#" class="clearfix"><span class="pull-left">Restaurants</span> <span class="pull-right">32</span></a></li>
                                    <li><a href="#" class="clearfix"><span class="pull-left">Airports</span> <span class="pull-right">08</span></a></li>
                                    <li><a href="#" class="clearfix"><span class="pull-left">Cinemas</span> <span class="pull-right">54</span></a></li>
                                </ul>
							</div>
                        </div>


                        <!-- Popular Posts -->
                        <div class="sidebar-widget popular-posts">
                        	<div class="widget-box">
                                <div class="sidebar-title"><h3>Recent Posts</h3></div>

                                <article class="post">
                                    <figure class="post-thumb"><a href="#"><img src="images/resource/post-thumb-3.jpg" alt=""></a></figure>
                                    <h4><a href="#">The weather started getting rough the tiny.</a></h4>
                                    <div class="post-info">2 Minutes Ago </div>
                                </article>

                                <article class="post">
                                    <figure class="post-thumb"><a href="#"><img src="images/resource/post-thumb-4.jpg" alt=""></a></figure>
                                    <h4><a href="#">The weather started getting rough the tiny.</a></h4>
                                    <div class="post-info">2 Minutes Ago </div>
                                </article>

                                <article class="post">
                                    <figure class="post-thumb"><a href="#"><img src="images/resource/post-thumb-5.jpg" alt=""></a></figure>
                                    <h4><a href="#">The weather started getting rough the tiny.</a></h4>
                                    <div class="post-info">2 Minutes Ago </div>
                                </article>
							</div>
                        </div>

						<!-- Archives -->
                        <div class="sidebar-widget archives">
                        	<div class="widget-box">
                                <div class="sidebar-title"><h3>Archives</h3></div>

                                <ul class="list">
                                    <li><a href="#" class="clearfix"><span class="pull-left">January</span> <span class="pull-right">16, 2016</span></a></li>
                                    <li><a href="#" class="clearfix"><span class="pull-left">February</span> <span class="pull-right">20, 2016</span></a></li>
                                    <li><a href="#" class="clearfix"><span class="pull-left">March</span> <span class="pull-right">32, 2016</span></a></li>
                                    <li><a href="#" class="clearfix"><span class="pull-left">April</span> <span class="pull-right">08, 2016</span></a></li>
                                    <li><a href="#" class="clearfix"><span class="pull-left">May</span> <span class="pull-right">54, 2016</span></a></li>
                                </ul>
							</div>
                        </div>

                        <!-- Popular Tags -->
                        <div class="sidebar-widget popular-tags">
                        	<div class="widget-box">
                                <div class="sidebar-title"><h3>Tags</h3></div>

                                <a href="#">Audi</a>
                                <a href="#">Acura</a>
                                <a href="#">BMW</a>
                                <a href="#">Alpha Romeo</a>
                                <a href="#">Maserati</a>
                                <a href="#">Bentley</a>
                                <a href="#">Ducati</a>

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