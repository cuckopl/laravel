<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Define Charset -->
    <meta charset="utf-8"/>

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


<!-- begin Content -->

<!--content-->
@yield('content')
        <!--end content-->

<section>

    <!-- begin Home -->
    <article class="home" id="home">
        <form class="form-suscribe" role="form" method="POST" action="contact-form.php" data-ajax="1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 animated" data-animation="fadeIn" data-animation-delay="400">
                        <h1>Welcome To CrossFit Center</h1>
                        <h3>We're so sure you'll fall in love with CrossFit that we'll let you try a FREE Class.</h3>

                        <div class="form-group">
                            <label for="name" class="sr-only">Email your name</label>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Enter a valid email address</label>
                            <input name="email" type="email" class="form-control" id="email"
                                   placeholder="Enter a valid email address">
                        </div>
                        <div class="form-group">
                            <label for="phone" class="sr-only">Enter your phone number</label>
                            <input name="phone" type="tel" class="form-control" id="phone"
                                   placeholder="Enter your phone number">
                        </div>

                        <button type="submit" class="btn" data-loading-text="Sending...">Subscribe Now</button>
                        <div class="form-response"></div>

                    </div>
                </div>
            </div>
        </form>
        <div class="image_slide">
            <figure>
                <img src="/gym/img/image.jpg" alt="">
            </figure>
        </div>

        <div class="clearfix"></div>
    </article>
    <!-- end Home -->


    <!-- begin Features -->
    <article class="featrues arrow" id="featrues">
        <div class="container">

            <h2>Start <span>your training</span> today</h2>

            <div class="row">
                <div class="col-sm-6 col-md-4 features-item animated" data-animation="fadeInLeftBig"
                     data-animation-delay="200">
                    <i class="icon-users"></i>
                    <h4>Who we train</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, dolorem, neque sit dolorum
                        accusamus rerum quibusdam.</p>
                </div>
                <div class="col-sm-6 col-md-4 features-item animated" data-animation="fadeInUpBig"
                     data-animation-delay="200">
                    <i class="icon-clock"></i>
                    <h4>Who we train</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, dolorem, neque sit dolorum
                        accusamus rerum quibusdam.</p>
                </div>
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-sm-offset-0 features-item animated"
                     data-animation="fadeInRightBig" data-animation-delay="200">
                    <i class="icon-chart-bar"></i>
                    <h4>Who we train</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, dolorem, neque sit dolorum
                        accusamus rerum quibusdam.</p>
                </div>
            </div>

        </div>
    </article>
    <!-- end Features -->


    <!-- begin Club -->
    <article class="club" id="club" data-speed="3">
        <div class="container">
            <h2>See our <span>club</span></h2>

            <div class="col-md-6 animated" data-animation="fadeInLeftBig" data-animation-delay="200">
                <div class="panel-group" id="accordion">
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <i class="icon-right-circled"></i> How do I get a refund for unused sessions?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    <i class="icon-right-circled"></i> How do I get a refund for unused sessions?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    <i class="icon-right-circled"></i> How do I get a refund for unused sessions?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animated" data-animation="fadeInRightBig" data-animation-delay="200">
                <div class="video-yt">
                    <iframe width="640" height="360" src="//www.youtube.com/embed/UUwSKJjx9Go" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </article>
    <!-- end Club -->


    <!-- begin Coaches -->
    <article class="coaches" id="coaches">
        <div class="container">
            <h2>The <span>sport</span> coaches</h2>

            <div class="row">

                <div class="col-sm-6 col-md-4 animated" data-animation="bounceIn" data-animation-delay="200">
                    <div class="coaches-item">
                        <figure class="item-thumbnail">
                            <img src="/gym/img/coaches/coach01.jpg" alt="//">
                            <span class="overthumb"></span>
                            <div class="icons">
                                <a href="#coachmodal1" data-toggle="modal">Read full bio</a>
                            </div>
                        </figure>
                        <h5>Amanda Smithson</h5>
                        <h6>Yoga Coach</h6>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 animated" data-animation="bounceIn" data-animation-delay="400">
                    <div class="coaches-item">
                        <figure class="item-thumbnail">
                            <img src="/gym/img/coaches/coach02.jpg" alt="//">
                            <span class="overthumb"></span>
                            <div class="icons">
                                <a href="#coachmodal2" data-toggle="modal">Read full bio</a>
                            </div>
                        </figure>
                        <h5>Mike Smithson</h5>
                        <h6>Yoga Coach</h6>
                    </div>
                </div>

                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-sm-offset-0 animated" data-animation="bounceIn"
                     data-animation-delay="600">
                    <div class="coaches-item">
                        <figure class="item-thumbnail">
                            <img src="/gym/img/coaches/coach03.jpg" alt="//">
                            <span class="overthumb"></span>
                            <div class="icons">
                                <a href="#coachmodal3" data-toggle="modal">Read full bio</a>
                            </div>
                        </figure>
                        <h5>Lisa Smithson</h5>
                        <h6>Yoga Coach</h6>
                    </div>
                </div>

            </div>
            <div class="clearfix"></div>
        </div>
    </article>
    <!-- end Coaches -->


    <!-- begin Testimonials -->
    <article class="testimonials" id="testimonials" data-speed="5">
        <div class="container">
            <h2>Client <span>Testimonials</span></h2>

            <div id="owl-testimonials" class="owl-carousel animated" data-animation="slideInRight"
                 data-animation-delay="200">
                <div>
                    <figure>
                        <img src="/gym/img/testimonials/1.jpg" alt="//">
                    </figure>
                    <strong>Ema Thompson</strong>
                    <small>Fox Sport</small>
                    <div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quo
                        distinctio quae consectetur ipsa dolore sint maxime odit a obcaecati. Qui, iusto aperiam vitae
                        optio ipsam voluptatibus vel! Non, excepturi.
                    </div>
                </div>
                <div>
                    <figure>
                        <img src="/gym/img/testimonials/2.jpg" alt="//">
                    </figure>
                    <strong>Ema Thompson</strong>
                    <small>Fox Sport</small>
                    <div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quo
                        distinctio quae consectetur ipsa dolore sint maxime odit a obcaecati. Qui, iusto aperiam vitae
                        optio ipsam voluptatibus vel! Non, excepturi.
                    </div>
                </div>
                <div>
                    <figure>
                        <img src="/gym/img/testimonials/3.jpg" alt="//">
                    </figure>
                    <strong>Ema Thompson</strong>
                    <small>Fox Sport</small>
                    <div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quo
                        distinctio quae consectetur ipsa dolore sint maxime odit a obcaecati. Qui, iusto aperiam vitae
                        optio ipsam voluptatibus vel! Non, excepturi.
                    </div>
                </div>
                <div>
                    <figure>
                        <img src="/gym/img/testimonials/4.jpg" alt="//">
                    </figure>
                    <strong>Ema Thompson</strong>
                    <small>Fox Sport</small>
                    <div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quo
                        distinctio quae consectetur ipsa dolore sint maxime odit a obcaecati. Qui, iusto aperiam vitae
                        optio ipsam voluptatibus vel! Non, excepturi.
                    </div>
                </div>
                <div>
                    <figure>
                        <img src="/gym/img/testimonials/5.jpg" alt="//">
                    </figure>
                    <strong>Ema Thompson</strong>
                    <small>Fox Sport</small>
                    <div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quo
                        distinctio quae consectetur ipsa dolore sint maxime odit a obcaecati. Qui, iusto aperiam vitae
                        optio ipsam voluptatibus vel! Non, excepturi.
                    </div>
                </div>
                <div>
                    <figure>
                        <img src="/gym/img/testimonials/6.jpg" alt="//">
                    </figure>
                    <strong>Ema Thompson</strong>
                    <small>Fox Sport</small>
                    <div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quo
                        distinctio quae consectetur ipsa dolore sint maxime odit a obcaecati. Qui, iusto aperiam vitae
                        optio ipsam voluptatibus vel! Non, excepturi.
                    </div>
                </div>
                <div>
                    <figure>
                        <img src="/gym/img/testimonials/2.jpg" alt="//">
                    </figure>
                    <strong>Ema Thompson</strong>
                    <small>Fox Sport</small>
                    <div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quo
                        distinctio quae consectetur ipsa dolore sint maxime odit a obcaecati. Qui, iusto aperiam vitae
                        optio ipsam voluptatibus vel! Non, excepturi.
                    </div>
                </div>
                <div>
                    <figure>
                        <img src="/gym/img/testimonials/4.jpg" alt="//">
                    </figure>
                    <strong>Ema Thompson</strong>
                    <small>Fox Sport</small>
                    <div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quo
                        distinctio quae consectetur ipsa dolore sint maxime odit a obcaecati. Qui, iusto aperiam vitae
                        optio ipsam voluptatibus vel! Non, excepturi.
                    </div>
                </div>
                <div>
                    <figure>
                        <img src="/gym/img/testimonials/6.jpg" alt="//">
                    </figure>
                    <strong>Ema Thompson</strong>
                    <small>Fox Sport</small>
                    <div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quo
                        distinctio quae consectetur ipsa dolore sint maxime odit a obcaecati. Qui, iusto aperiam vitae
                        optio ipsam voluptatibus vel! Non, excepturi.
                    </div>
                </div>
                <div>
                    <figure>
                        <img src="/gym/img/testimonials/1.jpg" alt="//">
                    </figure>
                    <strong>Ema Thompson</strong>
                    <small>Fox Sport</small>
                    <div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quo
                        distinctio quae consectetur ipsa dolore sint maxime odit a obcaecati. Qui, iusto aperiam vitae
                        optio ipsam voluptatibus vel! Non, excepturi.
                    </div>
                </div>
            </div>

        </div>
    </article>
    <!-- end Testimonials -->


    <!-- begin Pricing -->
    <article class="pricing arrow" id="pricing">
        <div class="container">
            <h2>Crossfit <span>pricing</span> package</h2>

            <div class="row">
                <div class="col-sm-6 col-md-4 animated" data-animation="flipInY" data-animation-delay="200">
                    <ul class="pricing-item">
                        <li>$ 129
                            <small>3 month contract</small>
                        </li>
                        <li>Classes 2x/week</li>
                        <li>Open Gym Monday-Friday</li>
                        <li>Yoga Relax Classes</li>
                        <li>Adventure racing</li>
                        <li>Olympic Weightlifting</li>
                        <li><a href="#" class="btn">Buy Now</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-4 animated" data-animation="flipInY" data-animation-delay="400">
                    <ul class="pricing-item">
                        <li>$ 139
                            <small>6 month contract</small>
                        </li>
                        <li>Classes 2x/week</li>
                        <li>Open Gym Monday-Friday</li>
                        <li>Yoga Relax Classes</li>
                        <li>Adventure racing</li>
                        <li>Olympic Weightlifting</li>
                        <li><a href="#" class="btn">Buy Now</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-sm-offset-0 animated" data-animation="flipInY"
                     data-animation-delay="600">
                    <ul class="pricing-item">
                        <li>$ 169
                            <small>Unlimited CrossFit</small>
                        </li>
                        <li>Unlimited Crossfit Classes</li>
                        <li>Open Gym Monday-Friday</li>
                        <li>Yoga Relax Classes</li>
                        <li>Adventure racing</li>
                        <li>Olympic Weightlifting</li>
                        <li><a href="#" class="btn">Buy Now</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </article>
    <!-- end Pricing -->


    <!-- begin Gallery -->
    <article class="gallery" id="gallery">
        <figure class="item-thumbnail animated" data-animation="bounceIn" data-animation-delay="100">
            <img src="/gym/img/gallery/img01.jpg" alt="//">
            <span class="overthumb"></span>
            <div class="icons"><a href="/gym/img/gallery/img01.jpg" class="lightzoom fancybox" data-rel="gallery"
                                  title="Item 01"><i class="icon-eye"></i></a></div>
        </figure>
        <figure class="item-thumbnail animated" data-animation="bounceIn" data-animation-delay="200">
            <img src="/gym/img/gallery/img02.jpg" alt="//">
            <span class="overthumb"></span>
            <div class="icons"><a href="/gym/img/gallery/img02.jpg" class="lightzoom fancybox" data-rel="gallery"
                                  title="Item 02"><i class="icon-eye"></i></a></div>
        </figure>
        <figure class="item-thumbnail animated" data-animation="bounceIn" data-animation-delay="300">
            <img src="/gym/img/gallery/img03.jpg" alt="//">
            <span class="overthumb"></span>
            <div class="icons"><a href="/gym/img/gallery/img03.jpg" class="lightzoom fancybox" data-rel="gallery"
                                  title="Item 03"><i class="icon-eye"></i></a></div>
        </figure>
        <figure class="item-thumbnail animated" data-animation="bounceIn" data-animation-delay="400">
            <img src="/gym/img/gallery/img04.jpg" alt="//">
            <span class="overthumb"></span>
            <div class="icons"><a href="/gym/img/gallery/img04.jpg" class="lightzoom fancybox" data-rel="gallery"
                                  title="Item 04"><i class="icon-eye"></i></a></div>
        </figure>
        <figure class="item-thumbnail animated" data-animation="bounceIn" data-animation-delay="500">
            <img src="/gym/img/gallery/img05.jpg" alt="//">
            <span class="overthumb"></span>
            <div class="icons"><a href="/gym/img/gallery/img05.jpg" class="lightzoom fancybox" data-rel="gallery"
                                  title="Item 05"><i class="icon-eye"></i></a></div>
        </figure>
        <figure class="item-thumbnail animated" data-animation="bounceIn" data-animation-delay="600">
            <img src="/gym/img/gallery/img06.jpg" alt="//">
            <span class="overthumb"></span>
            <div class="icons"><a href="/gym/img/gallery/img06.jpg" class="lightzoom fancybox" data-rel="gallery"
                                  title="Item 06"><i class="icon-eye"></i></a></div>
        </figure>
        <figure class="item-thumbnail animated" data-animation="bounceIn" data-animation-delay="700">
            <img src="/gym/img/gallery/img07.jpg" alt="//">
            <span class="overthumb"></span>
            <div class="icons"><a href="/gym/img/gallery/img07.jpg" class="lightzoom fancybox" data-rel="gallery"
                                  title="Item 07"><i class="icon-eye"></i></a></div>
        </figure>
        <figure class="item-thumbnail animated" data-animation="bounceIn" data-animation-delay="800">
            <img src="/gym/img/gallery/img08.jpg" alt="//">
            <span class="overthumb"></span>
            <div class="icons"><a href="/gym/img/gallery/img08.jpg" class="lightzoom fancybox" data-rel="gallery"
                                  title="Item 08"><i class="icon-eye"></i></a></div>
        </figure>
        <div class="clearfix"></div>
    </article>
    <!-- end Gallery -->


    <!-- begin Patners -->
    <article class="patners" id="patners">
        <div class="container">
            <div id="owl-patners" class="owl-carousel">
                <div class="item"><a href="#"><img src="/gym/img/patners/logo01.png" alt="//"></a></div>
                <div class="item"><a href="#"><img src="/gym/img/patners/logo02.png" alt="//"></a></div>
                <div class="item"><a href="#"><img src="/gym/img/patners/logo03.png" alt="//"></a></div>
                <div class="item"><a href="#"><img src="/gym/img/patners/logo04.png" alt="//"></a></div>
                <div class="item"><a href="#"><img src="/gym/img/patners/logo02.png" alt="//"></a></div>

                <div class="item"><a href="#"><img src="/gym/img/patners/logo03.png" alt="//"></a></div>
                <div class="item"><a href="#"><img src="/gym/img/patners/logo01.png" alt="//"></a></div>
                <div class="item"><a href="#"><img src="/gym/img/patners/logo02.png" alt="//"></a></div>
                <div class="item"><a href="#"><img src="/gym/img/patners/logo04.png" alt="//"></a></div>
                <div class="item"><a href="#"><img src="/gym/img/patners/logo01.png" alt="//"></a></div>

                <div class="item"><a href="#"><img src="/gym/img/patners/logo02.png" alt="//"></a></div>
                <div class="item"><a href="#"><img src="/gym/img/patners/logo04.png" alt="//"></a></div>
                <div class="item"><a href="#"><img src="/gym/img/patners/logo01.png" alt="//"></a></div>
                <div class="item"><a href="#"><img src="/gym/img/patners/logo02.png" alt="//"></a></div>
                <div class="item"><a href="#"><img src="/gym/img/patners/logo03.png" alt="//"></a></div>
            </div>
        </div>
    </article>
    <!-- end Patners -->


    <!-- begin Contact -->
    <article class="contact" id="contact">
        <div class="contact-info">
            <div class="animated" data-animation="fadeInLeft" data-animation-delay="400">

                <h2>contact information</h2>
                <address>
                    <p><i class="icon-location"></i>Address CT5454, Street Two, New Somthing, Country</p>
                    <p><i class="icon-phone"></i>Telephone: +555 9098043</p>
                    <p><i class="icon-phone"></i>Fax: +444 6498439</p>
                    <p><i class="icon-mail"></i>Email: info@company.com</p>
                </address>
            </div>
        </div>
        <div class="map" id="map"></div>
    </article>
    <!-- end Contact -->
</section>
<!-- end Content -->


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
<!-- jQuery -->
<script src="/gym/js/vendors/jquery/jquery-1.9.1.min.js"></script>

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