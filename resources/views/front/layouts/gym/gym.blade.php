<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Define Charset -->
    <meta charset="utf-8"/>

    <!-- jQuery -->
    <script src="/gym/js/vendors/jquery/jquery-1.9.1.min.js"></script>

    <!-- Page Title -->
    <title>GYM Guide Center Landing</title>

    <!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

    <!-- <meta http-equiv="X-UA-Compatible" content="IE=9" />-->

    <!-- CSS -->
    <link rel="stylesheet" href="/gym/css/vendors/bootstrap.min.css">

    <!-- Font icons -->
    <link rel="stylesheet" href="/gym/css/vendors/fontello.css">
    <!--[if IE 7]>
    <link rel="stylesheet" href="/gym/css/fontello-ie7.css"><![endif]-->

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="/gym/js/vendors/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/gym/js/vendors/owl.carousel/assets/owl.theme.default.min.css">

    <!-- fancybox.js -->
    <link rel="stylesheet" href="/gym/js/vendors/fancybox/jquery.fancybox.css"/>

    <!-- Animate.css -->
    <link rel="stylesheet" href="/gym/css/vendors/animate.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/gym/css/styles.css"/>
    <link rel="stylesheet" href="/gym/css/colors/orange.css"/>
    <!-- Custom Media-Queties -->
    <link rel="stylesheet" href="/gym/css/media-queries.css"/>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Media queries -->
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->


    <!-- Modernizr -->
    <script src="/gym/js/vendors/modernizr.custom.js"></script>


</head>
<body>

<!-- begin Header -->
<header>
    <nav class="navbar navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse">

                <ul class="nav navbar-nav navbar-right login-navbar ">
                    <li class="login-button">
                        <button type="button">Login</button>
                        <div class="login-content login-content-login">
                            <div>
                                <div class="login-forms">
                                    <i class="icon-cancel">Close the dialog</i>
                                    <h2>Login</h2>
                                    <form>
                                        <p><label>Email</label><input type="text"></p>
                                        <p><label>Password</label><input type="password"></p>
                                        <p>
                                            <button>Login</button>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="login-button">
                        <button type="button">singup</button>
                        <div class="login-content login-content-singup">
                            <div>
                                <div class="login-forms">
                                    <i class="icon-cancel">Close the dialog</i>
                                    <h2>Sign Up</h2>
                                    <form>
                                        <p><label>Email</label><input type="text"></p>
                                        <p><label>Password</label><input type="password"></p>
                                        <p><label>Repeat Password</label><input type="password"></p>
                                        <p>
                                            <button>Sign Up</button>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right menu-effect">
                    <li class="active"><a href="#home">Home</a></li>
                    <li><a href="#coaches">Coaches</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                </ul>

            </div><!--/.nav-collapse -->
        </div>
    </nav>
</header>
<!-- end Header -->

<!--content-->
@yield('content')
        <!--end content-->


<!-- Footer -->
<footer>
    <ul class="social animated" data-animation="pulse" data-animation-delay="400">
        <li><a href="#" data-original-title="Twitter"><i class="icon-twitter"></i></a></li>
        <li><a href="#" data-original-title="Facebook"><i class="icon-facebook"></i></a></li>
        <li><a href="#" data-original-title="Google +"><i class="icon-gplus"></i></a></li>
        <li><a href="#" data-original-title="Linkedin"><i class="icon-linkedin"></i></a></li>
        <li><a href="#" data-original-title="Behance"><i class="icon-behance"></i></a></li>
        <li><a href="#" data-original-title="Pinterest"><i class="icon-pinterest"></i></a></li>
    </ul>
    <p class="copy">Copyright 2014-2016 GYM Guide. All rights reserved. Desygned By MustacheThemes.</p>
</footer>
<!-- end Footer -->


<!-- Coach Modal -->
<div class="modal fade" id="coachmodal1" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Amanda Smithson</h4>
            </div>
            <div class="modal-body">
                <figure>
                    <img src="/gym/img/coaches/coach01.jpg" alt="img">
                </figure>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum consequuntur recusandae dolores,
                    ullam ut eligendi, beatae at, illo possimus voluptatum iste explicabo expedita voluptate itaque!
                    Iure esse, vero placeat magni.</p>
            </div>
        </div>
    </div>
</div>

<!-- Coach Modal -->
<div class="modal fade" id="coachmodal2" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Mike Smithson</h4>
            </div>
            <div class="modal-body">
                <figure>
                    <img src="/gym/img/coaches/coach02.jpg" alt="img">
                </figure>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum consequuntur recusandae dolores,
                    ullam ut eligendi, beatae at, illo possimus voluptatum iste explicabo expedita voluptate itaque!
                    Iure esse, vero placeat magni.</p>
            </div>
        </div>
    </div>
</div>

<!-- Coach Modal -->
<div class="modal fade" id="coachmodal3" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Lisa Smithson</h4>
            </div>
            <div class="modal-body">
                <figure>
                    <img src="/gym/img/coaches/coach03.jpg" alt="img">
                </figure>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum consequuntur recusandae dolores,
                    ullam ut eligendi, beatae at, illo possimus voluptatum iste explicabo expedita voluptate itaque!
                    Iure esse, vero placeat magni.</p>
            </div>
        </div>
    </div>
</div>


<!-- ******************************************************************** -->
<!-- ************************* Javascript Files ************************* -->


<!-- Respond.js media queries for IE8 -->
<script src="/gym/js/vendors/respond.min.js"></script>

<!-- Bootstrap-->
<script src="/gym/js/vendors/bootstrap.min.js"></script>

<!-- One Page Scroll -->
<script src="/gym/js/vendors/jquery/jquery.nav.js"></script>

<!-- Isotope -->
<script src="/gym/js/vendors/jquery/jquery.isotope.min.js"></script>

<!-- Owl Carousel -->
<script src="/gym/js/vendors/owl.carousel/owl.carousel.min.js"></script>

<!-- Fancybox -->
<script src="/gym/js/vendors/fancybox/jquery.fancybox.js"></script>

<!-- Appear -->
<script src="/gym/js/vendors/jquery/jquery.appear.js"></script>

<!-- bgYtVideo -->
<script src="js/jquery.bgYtVideo.js"></script>

<!-- Gmaps -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="/gym/js/vendors/gmaps.js"></script>

<!-- Login Animation -->
<script src="/gym/js/vendors/classie.js"></script>
<script src="/gym/js/vendors/uiMorphingButton_fixed.js"></script>

<!-- Placeholder.js -->
<!--[if lte IE 9]>
<script src="/gym/js/vendors/placeholder.js"></script>
<script>Placeholder.init();</script> <![endif]-->

<!-- Custom -->
<script src="/gym/js/script.js"></script>

<!-- *********************** End Javascript Files *********************** -->
<!-- ******************************************************************** -->


</body>
</html>


