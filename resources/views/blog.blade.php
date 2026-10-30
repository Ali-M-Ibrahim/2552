@extends('layouts.app')

@section('content')


    <!--start wrapper-->
    <section class="wrapper">
        <section class="page_head">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2>Blog with side bar</h2>
                        <nav id="breadcrumbs">
                            <ul>
                                <li>You are here:</li>
                                <li><a href="index-2.html">Home</a></li>
                                <li>Blog</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class="content blog">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-8 col-lg-8">
                        <div class="blog_large">
                            <article class="post">
                                <div class="post_date"> <span class="day">28<a href="#" class="month">Nov</a></span> <span class="icon"><i class="fa fa-file-image-o"></i> </span> </div>
                                <div class="post_content medium">
                                    <figure class="post_img">

                                        <!-- Post Image Slider -->
                                        <div id="slider" class="swipe">
                                            <ul class="swipe-wrap">
                                                <li><img src="images/blog-img/1.jpg" alt="blog post"></li>
                                                <li><img src="images/blog-img/2.jpg" alt="blog post"></li>
                                                <li><img src="images/blog-img/3.jpg" alt="blog post"></li>
                                            </ul>
                                            <div class="swipe-navi">
                                                <div class="swipe-left" onClick="mySwipe.prev()"><i class="fa fa-chevron-left"></i></div>
                                                <div class="swipe-right" onClick="mySwipe.next()"><i class="fa fa-chevron-right"></i></div>
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="post_meta">
                                        <h2> <a href="blog-single.html">perferendis doloribus asperiores ut labore</a> </h2>
                                        <div class="metaInfo"> <span>By <a href="#" class="admin">Admin</a> </span> <span><a href="#">Webdesign, Media, Logo</a> </span> <span><a href="#" class="admin">5</a> Comments</span> </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip, sed do eiusmod tempor incididunt  ut aut reiciendise voluptat maiores alias consequaturs aut perferendis doloribus asperiores ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        <a href="blog-single.html" class="btn btn-small btn-default readmore">Read More</a> </div>
                                </div>
                            </article>
                            <!-- Post Image Slider End-->
                            <!-- Post Static Image Start-->
                            <article class="post">
                                <div class="post_date"> <span class="day">28<a href="#" class="month">Nov</a></span> <span class="icon"><i class="fa fa-files-o"></i> </span> </div>
                                <div class="post_content medium">
                                    <figure class="post_img"><img src="images/blog-img/4.jpg" width="700" height="370" alt=" "></figure>
                                    <div class="post_meta">
                                        <h2> <a href="blog-single.html">perferendis doloribus asperiores ut labore</a> </h2>
                                        <div class="metaInfo"> <span>By <a href="#" class="admin">Admin</a> </span> <span><a href="#">Webdesign, Media, Logo</a> </span> <span><a href="#" class="admin">5</a> Comments</span> </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip, sed do eiusmod tempor incididunt  ut aut reiciendise voluptat maiores alias consequaturs aut perferendis doloribus asperiores ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        <a href="blog-single.html" class="btn btn-small btn-default readmore">Read More</a> </div>
                                </div>
                            </article>
                            <!-- Post Static Image End-->
                            <!-- Post HTML5 Video Start-->
                            <article class="post">
                                <div class="post_date"> <span class="day">28<a href="#" class="month">Nov</a></span> <span class="icon"><i class="fa fa-file-image-o"></i> </span> </div>
                                <div class="post_content medium">
                                    <figure class="post_video">
                                        <div class="blogVid">
                                            <div class="video-header" style="background-size: cover;">
                                                <div class="video">
                                                    <video id="header_video_1" class="video-js vjs-default-skin header-vid" controls preload="auto" width="auto" height="auto" poster="video/source/oceans-clip.png" data-setup="{}" >
                                                        <source src="http://themeelite.com/demos/qva/template-4/video-bg/video-2.mp4" type='video/mp4' />
                                                        <source src="http://themeelite.com/demos/qva/template-4/video-bg/video-2.ogv" type='video/ogg' />
                                                        <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="post_meta">
                                        <h2> <a href="blog-single.html">perferendis doloribus asperiores ut labore</a> </h2>
                                        <div class="metaInfo"> <span>By <a href="#" class="admin">Admin</a> </span> <span><a href="#">Webdesign, Media, Logo</a> </span> <span><a href="#" class="admin">5</a> Comments</span> </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip, sed do eiusmod tempor incididunt  ut aut reiciendise voluptat maiores alias consequaturs aut perferendis doloribus asperiores ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        <a href="blog-single.html" class="btn btn-small btn-default readmore">Read More</a> </div>
                                </div>
                            </article>
                            <!-- Post HTML5 Video End-->
                            <!-- Post Vimeo Video Start-->
                            <article class="post">
                                <div class="post_date"> <span class="day">28<a href="#" class="month">Nov</a></span> <span class="icon"><i class="fa fa-file-image-o"></i> </span> </div>
                                <div class="post_content medium">
                                    <figure class="post_video">
                                        <div class="video">
                                            <iframe src="http://player.vimeo.com/video/124250546?title=0&amp;byline=0&amp;portrait=0"></iframe>
                                        </div>
                                    </figure>
                                    <div class="post_meta">
                                        <h2> <a href="blog-single.html">perferendis doloribus asperiores ut labore</a> </h2>
                                        <div class="metaInfo"> <span>By <a href="#" class="admin">Admin</a> </span> <span><a href="#">Webdesign, Media, Logo</a> </span> <span><a href="#" class="admin">5</a> Comments</span> </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip, sed do eiusmod tempor incididunt  ut aut reiciendise voluptat maiores alias consequaturs aut perferendis doloribus asperiores ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        <a href="blog-single.html" class="btn btn-small btn-default readmore">Read More</a> </div>
                                </div>
                            </article>
                            <!-- Post Vimeo Video End-->
                            <!-- Post Youtube Video Start-->
                            <article class="post">
                                <div class="post_date"> <span class="day">28<a href="#" class="month">Nov</a></span> <span class="icon"><i class="fa fa-file-image-o"></i> </span> </div>
                                <div class="post_content medium">
                                    <figure class="post_video">
                                        <div class="video">
                                            <iframe src="https://www.youtube.com/embed/P36kVWtCAz0" allowfullscreen></iframe>
                                        </div>
                                    </figure>
                                    <div class="post_meta">
                                        <h2> <a href="blog-single.html">perferendis doloribus asperiores ut labore</a> </h2>
                                        <div class="metaInfo"> <span>By <a href="#" class="admin">Admin</a> </span> <span><a href="#">Webdesign, Media, Logo</a> </span> <span><a href="#" class="admin">5</a> Comments</span> </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip, sed do eiusmod tempor incididunt  ut aut reiciendise voluptat maiores alias consequaturs aut perferendis doloribus asperiores ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        <a href="blog-single.html" class="btn btn-small btn-default readmore">Read More</a> </div>
                                </div>
                            </article>
                            <!-- Post Youtube Video End-->
                        </div>
                    </div>

                    <!--Sidebar Widget-->
                    <aside class="col-sm-4 col-md-4 col-lg-4 sidebar">
                        <div class="sidebar_widget">
                            <!-- site search start -->
                            <div class="sw_search">
                                <div class="sw_title">
                                    <h4>Search</h4>
                                </div>
                                <div class="site-search-area">
                                    <form method="get" id="site-searchform" action="#">
                                        <div>
                                            <input class="input-text" name="s" id="s" placeholder="Type Keywords.." type="text" />
                                            <input id="searchsubmit" value="Search" type="submit" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- site search end -->
                            <!-- site category start -->
                            <div class="sw_categories">
                                <div class="sw_title">
                                    <h4>Categories</h4>
                                </div>
                                <ul class="arrows_list">
                                    <li><a href="#">Typography (10)</a></li>
                                    <li><a href="#">Photography (25)</a></li>
                                    <li><a href="#">Graphic Designs (29)</a></li>
                                    <li><a href="#">Branding (19)</a></li>
                                </ul>
                            </div>
                            <!-- site category end -->
                            <!-- site recent post start -->
                            <div class="sw_archives">
                                <div class="sw_title">
                                    <h4>Recent Posts</h4>
                                </div>
                                <ul class="archives_list">
                                    <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididuntur.</a></li>
                                    <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididuntur.</a></li>
                                    <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididuntur.</a></li>
                                </ul>
                            </div>
                            <!-- site recent post end -->
                            <!-- site twitter post start -->
                            <div class="sw_archives">
                                <div class="sw_title">
                                    <h4>Latest Twitter</h4>
                                </div>
                                <ul class="archives_list">
                                    <li>Make sure you are following <a href="#"><u>@EnvatoMarket</u></a> for all your ThemeForest needs!</li>
                                    <li>Make sure you are following <a href="#"><u>@EnvatoMarket</u></a> for all your ThemeForest needs!</li>
                                    <li>Make sure you are following <a href="#"><u>@EnvatoMarket</u></a> for all your ThemeForest needs!</li>
                                </ul>
                            </div>
                            <!-- site twitter post end -->
                        </div>
                    </aside>
                </div>
                <!--/.row-->
                <!-- site Pagination start -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="pagination mrgt-0">
                        <li><a href="#">&laquo;</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
                <!-- site Pagination end -->
            </div>
            <!--/.container-->

        </section>
    </section>
    <!--end wrapper-->

    <!--Bottom Four Column section start-->
    <section class="black_section section_gap">
        <div class="container">
            <div class="row bottomfourcol">
                <!--Short intro start-->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 bottomAbout">
                    <h5 class="head">About us</h5>
                    <p>Phasellus mattis felis quis enim viverratys accumsan. Nullam porta risus felis, vitaeuik dapibus arcu viverra eu. Integer ultricies aliquam auctor. Etiam gravida sagittis ipsum nec dictum.</p>
                </div>
                <!--Short intro end-->
                <!--Services link start-->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <h5 class="head">Service Areas</h5>
                    <ul class="list">
                        <li><a href="#">Nullam at ligula at velit adipiscing</a></li>
                        <li><a href="#">Nunc pretium estqu</a></li>
                        <li><a href="#">Etiam gravida sagittis lacinia volutpats</a></li>
                        <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="#">Boris aliquipea eiusmd tempo</a></li>
                        <li><a href="#">Temincid dunt labore</a></li>
                        <li><a href="#">Praesent lacinia volutpats</a></li>
                    </ul>
                </div>
                <!--Services link start-->
                <!--News start-->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <h5 class="head">Recent News</h5>
                    <ul class="footerLinks">
                        <li> <a href="#">Standred post with featured image</a> <span>by <a href="#">Mike Doe</a> on June 24, 2014</span> </li>
                        <li> <a href="#">Standred post with featured image</a> <span>by <a href="#">Mike Doe</a> on June 24, 2014</span> </li>
                        <li> <a href="#">Standred post with featured image</a> <span>by <a href="#">Mike Doe</a> on June 24, 2014</span> </li>
                    </ul>
                </div>
                <!--News end-->
                <!-- flickr widget starts-->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <h5 class="head">flickr Widget</h5>
                    <ul class="flickr-widget clearfix">
                        <li><a title="Adrian Fittolani" href="#"><img alt="Adrian Fittolani" src="images/flickr-img/1.jpg"><span>+</span></a></li>
                        <li><a title="Adrian Fittolani" href="#"><img alt="Adrian Fittolani" src="images/flickr-img/2.jpg"><span>+</span></a></li>
                        <li><a title="Adrian Fittolani at his standing desk" href="#"><img alt="Adrian Fittolani at his standing desk" src="images/flickr-img/3.jpg"><span>+</span></a></li>
                        <li><a title="Collis does the ice bucket challenge" href="#"><img alt="Collis does the ice bucket challenge" src="images/flickr-img/4.jpg"><span>+</span></a></li>
                        <li><a title="Justin 05" href="#"><img alt="Justin 05" src="images/flickr-img/5.jpg"><span>+</span></a></li>
                        <li><a title="Justin 04" href="#"><img alt="Justin 04" src="images/flickr-img/6.jpg"><span>+</span></a></li>
                        <li><a title="Justin 03" href="#"><img alt="Justin 03" src="images/flickr-img/7.jpg"><span>+</span></a></li>
                        <li><a title="Justin 01" href="#"><img alt="Justin 01" src="images/flickr-img/8.jpg"><span>+</span></a></li>
                    </ul>
                </div>
                <!-- flickr widget end-->
            </div>
        </div>
    </section>
    <!--/Bottom Four Column section end -->
@endsection
