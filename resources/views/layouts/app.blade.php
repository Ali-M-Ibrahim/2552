<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<!-- Mirrored from https://themeelite.com/demos/trio/image+text-rotator/ by HTTrack Website Copier/3.x [XR&CO], Fri, 30 Oct 2026 14:13:37 GMT -->
<head>
    @yield('title')
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Metas Page details-->
    <title>Trio - Bootstrap Responsive Agency/Portfolio HTML5 Template</title>
    <meta name="description" content="UX designer and web developer">
    <meta name="author" content="">
    <!-- Mobile Specific Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--main style-->
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/component.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">

    <!--google font style-->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,200,500,600,700,800,100' rel='stylesheet' type='text/css'>
    <!--font-family: 'Raleway', sans-serif; -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600italic,600,700italic,700' rel='stylesheet' type='text/css'>
    <!--font-family: 'Open Sans', sans-serif; -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!--font-family: 'Montserrat', sans-serif; -->

    <!-- font icon css style-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body onLoad="load()" onUnload="GUnload()">

<!--wrapper start-->
<div class="wrapper" id="wrapper">
    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!--Header start -->
    <header>
        <!--Language -->
        <div class="container">
            <div class="row relative">
                <ul class="language">
                    <li> <a href="#" data-toggle="dropdown">English</a><i class="fa fa-caret-down"></i>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#" class="french">French</a></li>
                            <li><a href="#" class="italian">Italian</a></li>
                            <li><a href="#" class="spanish">Spanish</a></li>
                            <li><a href="#" class="portuguese">Portuguese</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--/Language -->
        <!--menu start-->
        <div class="menu">
            <div class="navbar-wrapper">
                <div class="container">
                    <div class="navwrapper">
                        <div class="navbar navbar-inverse navbar-static-top">
                            <div class="container">
                                <div class="logo"><a href="#">Tiro</a> </div>
                                <nav class="navArea">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                                    </div>
                                    <div class="navbar-collapse collapse">
                                        <ul class="nav navbar-nav" id="navigation">
                                            <li class="menuItem" id="home"><a href="#wrapper">Home</a></li>
                                            <li class="menuItem"><a href="#about">About us</a></li>
                                            <li class="menuItem"><a href="#services">Services</a></li>
                                            <li class="menuItem"><a href="#works">Works</a></li>
                                            <li class="menuItem"><a href="#team">our team</a></li>
                                            <li class="menuItem"><a href="#testimonial">Testimonial</a></li>
                                            <li class="menuItem"><a href="blog.html">blog</a> </li>
                                            <li class="menuItem"><a href="#contact">Contact</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- End Navbar -->
                </div>
            </div>
        </div>
        <!--menu end-->

        <!--banner start-->
        <div class="banner row" id="banner">
            <div class="col-xs-12 col-sm-6 col-md-12 col-lg-12 noPadd slides-container" style="height:100%">
                <!--background slide show start-->
                <div class="slide">
                    <!--header text1 start-->
                    <div class="container hedaer-inner">
                        <div class="bannerText">
                            <h1>The Trio</h1>
                            <h3>Creative design studio</h3>
                            <p>Creating the brand experience you & your audience deserve with Inbound Marketing.<br>
                                We already work with over 130 clients.</p>
                            <p class="banner-link"><a href="#about" class="smooth"> Our Introduction <i class="fa fa-chevron-down"></i></a></p>
                        </div>
                    </div>
                    <!--header text1 end-->
                    <img src="images/header-image/image01.jpg" alt="image01"> </div>
                <div class="slide">
                    <!--header text2 start-->
                    <div class="container hedaer-inner">
                        <div class="bannerText">
                            <h1>Create Brand</h1>
                            <h3>our true area of expertise</h3>
                            <p>We create simple, beautiful, and conversion focus designs for your customers.<br>
                                And delivered more than 210 design projects.</p>
                            <p class="banner-link"><a href="#services" class="smooth">Our Expertise <i class="fa fa-chevron-down"></i></a></p>
                        </div>
                    </div>
                    <!--header text2 end-->
                    <img src="images/header-image/image02.jpg" alt="image02"> </div>
                <!--background slide show end-->
            </div>
        </div>
        <!--banner end-->

    </header>
    <!--Header end -->
    <!--Welcome section start -->

    @yield('content')
    <!--Footer -->
    <footer class="footer white_section">
        <div class="container">
            <div class="row">
                <div class="pull-left">
                    <p>&copy; 2015 Trio.com. All Rights Reserved</p>
                </div>
                <div class="pull-right">
                    <div class="socialshare"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-youtube-play"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-rss"></i></a> </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer end -->
    <a class="gototop smooth" href="#wrapper"><i class="fa fa-caret-up"></i></a> </div>
<!--wrapper end-->

<!--modernizr js-->
<script type="text/javascript" src="{{asset('js/modernizr.custom.26633.js')}}"></script>
<!--jquary min js-->
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!--for placeholder jquery-->
<script type="text/javascript" src="js/jquery.placeholder.js"></script>

<!--for header jquery-->
<script type="text/javascript" src="js/stickUp.js"></script>
<script src="js/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $('#banner').superslides({
        animation: 'fade',
        play: 5000
    });
</script>

<!--for portfolio jquery-->
<script src="js/jquery.isotope.js" type="text/javascript"></script>
<link rel='stylesheet' property='stylesheet' id='theme'  href='css/jquery-ui-1.8.16.custom.css' type='text/css' media='all' />
<link rel='stylesheet' property='stylesheet'  href='css/lightbox.min.css' type='text/css' media='all' />

<script type="text/javascript" src="js/jquery.ui.widget.min.js"></script>
<script type="text/javascript" src="js/jquery.ui.rlightbox.js"></script>

<!--contact form js-->
<script type="text/javascript" src="js/jquery.contact.js"></script>
<script src="http://maps.google.com/maps?file=api&amp;v=2.x&amp;key=ABQIAAAAjU0EJWnWPMv7oQ-jjS7dYxSPW5CJgpdgO_s4yyMovOaVh_KvvhSfpvagV18eOyDWu7VytS6Bi1CWxw" type="text/javascript"></script>
<script type="text/javascript">
    //<![CDATA[
    var map;

    function load() {
        if (GBrowserIsCompatible()) {
            map = new GMap2(document.getElementById("map"));
            map.setCenter(new GLatLng(-37.817682, 144.957595), 13);
            document.getElementById("map").checked = true;
            toggleZoom(false);
        }
    }

    function toggleZoom(isChecked) {
        if (isChecked) {
            map.enableScrollWheelZoom();
        } else {
            map.disableScrollWheelZoom();
        }
    }

    //]]>
</script>

<!--about jquery-->
<script defer src="js/jquery.flexslider.js"></script>

<!--for coundown jquary-->
<script type="text/javascript" src="js/jquery.countTo.js"></script>

<script src="js/jquery.easing.js"></script>
<script src="js/jquery.mousewheel.js"></script>
<script defer src="js/slideroption.js"></script>
<script type="text/javascript">
    jQuery(function($) {
        $(document).ready( function() {
            "use strict";
            //enabling stickUp on the '.navbar-wrapper' class
            $('.navbar-wrapper').stickUp({
                parts: {
                    0: 'banner',
                    1: 'about',
                    2: 'services',
                    3: 'works',
                    4: 'team',
                    5: 'testimonial',
                    6: 'blog',
                    7: 'contact'
                },
                itemClass: 'menuItem',
                itemHover: 'active',
                topMargin: 'auto'
            });

            // run rlightbox
            $( ".lb" ).rlightbox();
            $( ".lb_title-overwritten" ).rlightbox({overwriteTitle: true});

            $('.flexslider').flexslider({
                animation: "fade",
                animationLoop: true,
                slideshow: true,
                pauseOnAction: false,
                slideshowSpeed: 7000,
                controlNav: true,
                start: function(slider){
                    $('body').removeClass('loading');
                }
            });

            //Home Testimonial
            var activeImage;
            var getmaxHeight = 0;
            $(".testimonialText li").each(function(index, element) {
                if($(this).height()>getmaxHeight){
                    getmaxHeight = $(this).height();
                    $(".footerTopContent").height(getmaxHeight);
                }
            });

            $(".testimonialText li").fadeTo("fast",0);
            $(".testimonialText li:first").fadeTo("fast",1);
            $(".imageSlide .imageBox").removeClass("activeImage");
            $(".imageSlide .imageBox:first").addClass("activeImage");
            $(".imageSlide .imageBox").mouseenter(function(){
                if(!$(this).hasClass("activeImage")){
                    var gi = $(this).index();
                    //console.log(gi);
                    $(".imageSlide .imageBox").removeClass("activeImage");
                    $(this).addClass("activeImage");
                    $(".testimonialText li").fadeTo("fast",0);
                    $(".testimonialText li:eq("+gi+")").fadeTo("fast",1);
                }
            })

            if ($(window).width() > 960) {
                $('.worklogo').flexslider({
                    animation: "slide",
                    slideshow: true,
                    itemWidth: 186,
                    itemMargin: 0
                });
            }
            else {
                $('.worklogo').flexslider({
                    animation: "slide",
                    slideshow: true,
                    itemWidth: 186,
                    itemMargin: -2
                });
            }

        });

        // for client work jquary

        var windowBottom = $(window).height()+0;
        var index=0;
        $(document).scroll(function(){
            divposition = parseInt($('.factabout').offset().top);
            divsrollpos = parseInt($(window).scrollTop());
            ctop = parseInt(divposition-divsrollpos);
            if(ctop<Math.round(windowBottom/2)){
                if(index==0){

                    $('.timer').each(count);

                }
                index++;
            }
        });


        function count(options) {
            var $this = $(this);
            options = $.extend({}, options || {}, $this.data('countToOptions') || {});
            $this.countTo(options);
        }

    });
</script>
<!--for theme custom jquery-->
<script src="js/custom.js"></script>
</body>

<!-- Mirrored from https://themeelite.com/demos/trio/image+text-rotator/ by HTTrack Website Copier/3.x [XR&CO], Fri, 30 Oct 2026 14:13:57 GMT -->
</html>
