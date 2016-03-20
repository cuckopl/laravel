@extends('front/layouts/gym/gym')
@section ('content')
        <!-- begin Content -->
<section>

    <!-- begin Home -->
    <article class="home" id="home">
        <form class="form-suscribe" role="form" method="POST" action="contact-form.php" data-ajax="1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 animated" data-animation="fadeIn" data-animation-delay="400">
                        @if (Auth::guest())
                            <h1>Witamy w Jedz-Eco</h1>
                            <h3>Aktywuj swoje konto! I zdobadz dostep do treningów.</h3>
                            <button type="submit" href="#blocker" data-toggle="modal" class="btn"
                                    data-loading-text="Sending...">
                                Aktwuj dostep
                            </button>
                        @else
                            @if ($templateVarUserActive)
                                <h1>Witamy w Jedz-Eco</h1>
                                <h3>Jeszcze nie aktywowales konta. Aktywuj je juz teraz.</h3>
                                <button type="submit" href="#blocker" data-toggle="modal" class="btn"
                                        data-loading-text="Sending...">
                                    Aktwuj dostep
                                </button>
                            @else
                                <h1>Dziękujemy!</h1>
                                <h3>Twoje konto jest w pelni aktywowane. Przegladaj i pobieraj swoje treningi</h3>
                            @endif
                        @endif
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

            <h2>Zacznij <span>swój trenning</span> dzisiaj</h2>

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
    {{--<!-- begin Club -->--}}
    {{--<article class="club" id="club" data-speed="3">--}}
    {{--<div class="container">--}}
    {{--<h2>See our <span>club</span></h2>--}}

    {{--<div class="col-md-6 animated" data-animation="fadeInLeftBig" data-animation-delay="200">--}}
    {{--<div class="panel-group" id="accordion">--}}
    {{--<div class="panel">--}}
    {{--<div class="panel-heading">--}}
    {{--<h4 class="panel-title">--}}
    {{--<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">--}}
    {{--<i class="icon-right-circled"></i> How do I get a refund for unused sessions?--}}
    {{--</a>--}}
    {{--</h4>--}}
    {{--</div>--}}
    {{--<div id="collapseOne" class="panel-collapse collapse in">--}}
    {{--<div class="panel-body">--}}
    {{--Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad--}}
    {{--squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="panel">--}}
    {{--<div class="panel-heading">--}}
    {{--<h4 class="panel-title">--}}
    {{--<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">--}}
    {{--<i class="icon-right-circled"></i> How do I get a refund for unused sessions?--}}
    {{--</a>--}}
    {{--</h4>--}}
    {{--</div>--}}
    {{--<div id="collapseTwo" class="panel-collapse collapse">--}}
    {{--<div class="panel-body">--}}
    {{--Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad--}}
    {{--squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="panel">--}}
    {{--<div class="panel-heading">--}}
    {{--<h4 class="panel-title">--}}
    {{--<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">--}}
    {{--<i class="icon-right-circled"></i> How do I get a refund for unused sessions?--}}
    {{--</a>--}}
    {{--</h4>--}}
    {{--</div>--}}
    {{--<div id="collapseThree" class="panel-collapse collapse">--}}
    {{--<div class="panel-body">--}}
    {{--Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad--}}
    {{--squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-6 animated" data-animation="fadeInRightBig" data-animation-delay="200">--}}
    {{--<div class="video-yt">--}}
    {{--<iframe width="640" height="360" src="//www.youtube.com/embed/UUwSKJjx9Go" allowfullscreen></iframe>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</article>--}}
    {{--<!-- end Club -->--}}


    {{--<!-- begin Coaches -->--}}
    {{--<article class="coaches" id="coaches">--}}
    {{--<div class="container">--}}
    {{--<h2>The <span>sport</span> coaches</h2>--}}

    {{--<div class="row">--}}

    {{--<div class="col-sm-6 col-md-4 animated" data-animation="bounceIn" data-animation-delay="200">--}}
    {{--<div class="coaches-item">--}}
    {{--<figure class="item-thumbnail">--}}
    {{--<img src="/gym/img/coaches/coach01.jpg" alt="//">--}}
    {{--<span class="overthumb"></span>--}}
    {{--<div class="icons">--}}
    {{--<a href="#coachmodal1" data-toggle="modal">Read full bio</a>--}}
    {{--</div>--}}
    {{--</figure>--}}
    {{--<h5>Amanda Smithson</h5>--}}
    {{--<h6>Yoga Coach</h6>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="col-sm-6 col-md-4 animated" data-animation="bounceIn" data-animation-delay="400">--}}
    {{--<div class="coaches-item">--}}
    {{--<figure class="item-thumbnail">--}}
    {{--<img src="/gym/img/coaches/coach02.jpg" alt="//">--}}
    {{--<span class="overthumb"></span>--}}
    {{--<div class="icons">--}}
    {{--<a href="#coachmodal2" data-toggle="modal">Read full bio</a>--}}
    {{--</div>--}}
    {{--</figure>--}}
    {{--<h5>Mike Smithson</h5>--}}
    {{--<h6>Yoga Coach</h6>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="col-sm-6 col-sm-offset-3 col-md-4 col-sm-offset-0 animated" data-animation="bounceIn"--}}
    {{--data-animation-delay="600">--}}
    {{--<div class="coaches-item">--}}
    {{--<figure class="item-thumbnail">--}}
    {{--<img src="/gym/img/coaches/coach03.jpg" alt="//">--}}
    {{--<span class="overthumb"></span>--}}
    {{--<div class="icons">--}}
    {{--<a href="#coachmodal3" data-toggle="modal">Read full bio</a>--}}
    {{--</div>--}}
    {{--</figure>--}}
    {{--<h5>Lisa Smithson</h5>--}}
    {{--<h6>Yoga Coach</h6>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--<div class="clearfix"></div>--}}
    {{--</div>--}}
    {{--</article>--}}
    {{--<!-- end Coaches -->--}}


    {{--<!-- begin Testimonials -->--}}
    {{--<article class="testimonials" id="testimonials" data-speed="5">--}}
    {{--<div class="container">--}}
    {{--<h2>Client <span>Testimonials</span></h2>--}}

    {{--<div id="owl-testimonials" class="owl-carousel animated" data-animation="slideInRight"--}}
    {{--data-animation-delay="200">--}}
    {{--<div>--}}
    {{--<figure>--}}
    {{--<img src="/gym/img/testimonials/1.jpg" alt="//">--}}
    {{--</figure>--}}
    {{--<strong>Ema Thompson</strong>--}}
    {{--<small>Fox Sport</small>--}}
    {{--<div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quo--}}
    {{--distinctio quae consectetur ipsa dolore sint maxime odit a obcaecati. Qui, iusto aperiam vitae--}}
    {{--optio ipsam voluptatibus vel! Non, excepturi.--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div>--}}
    {{--<figure>--}}
    {{--<img src="/gym/img/testimonials/2.jpg" alt="//">--}}
    {{--</figure>--}}
    {{--<strong>Ema Thompson</strong>--}}
    {{--<small>Fox Sport</small>--}}
    {{--<div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quo--}}
    {{--distinctio quae consectetur ipsa dolore sint maxime odit a obcaecati. Qui, iusto aperiam vitae--}}
    {{--optio ipsam voluptatibus vel! Non, excepturi.--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div>--}}
    {{--<figure>--}}
    {{--<img src="/gym/img/testimonials/3.jpg" alt="//">--}}
    {{--</figure>--}}
    {{--<strong>Ema Thompson</strong>--}}
    {{--<small>Fox Sport</small>--}}
    {{--<div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quo--}}
    {{--distinctio quae consectetur ipsa dolore sint maxime odit a obcaecati. Qui, iusto aperiam vitae--}}
    {{--optio ipsam voluptatibus vel! Non, excepturi.--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div>--}}
    {{--<figure>--}}
    {{--<img src="/gym/img/testimonials/4.jpg" alt="//">--}}
    {{--</figure>--}}
    {{--<strong>Ema Thompson</strong>--}}
    {{--<small>Fox Sport</small>--}}
    {{--<div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quo--}}
    {{--distinctio quae consectetur ipsa dolore sint maxime odit a obcaecati. Qui, iusto aperiam vitae--}}
    {{--optio ipsam voluptatibus vel! Non, excepturi.--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div>--}}
    {{--<figure>--}}
    {{--<img src="/gym/img/testimonials/5.jpg" alt="//">--}}
    {{--</figure>--}}
    {{--<strong>Ema Thompson</strong>--}}
    {{--<small>Fox Sport</small>--}}
    {{--<div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quo--}}
    {{--distinctio quae consectetur ipsa dolore sint maxime odit a obcaecati. Qui, iusto aperiam vitae--}}
    {{--optio ipsam voluptatibus vel! Non, excepturi.--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div>--}}
    {{--<figure>--}}
    {{--<img src="/gym/img/testimonials/6.jpg" alt="//">--}}
    {{--</figure>--}}
    {{--<strong>Ema Thompson</strong>--}}
    {{--<small>Fox Sport</small>--}}
    {{--<div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quo--}}
    {{--distinctio quae consectetur ipsa dolore sint maxime odit a obcaecati. Qui, iusto aperiam vitae--}}
    {{--optio ipsam voluptatibus vel! Non, excepturi.--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div>--}}
    {{--<figure>--}}
    {{--<img src="/gym/img/testimonials/2.jpg" alt="//">--}}
    {{--</figure>--}}
    {{--<strong>Ema Thompson</strong>--}}
    {{--<small>Fox Sport</small>--}}
    {{--<div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quo--}}
    {{--distinctio quae consectetur ipsa dolore sint maxime odit a obcaecati. Qui, iusto aperiam vitae--}}
    {{--optio ipsam voluptatibus vel! Non, excepturi.--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div>--}}
    {{--<figure>--}}
    {{--<img src="/gym/img/testimonials/4.jpg" alt="//">--}}
    {{--</figure>--}}
    {{--<strong>Ema Thompson</strong>--}}
    {{--<small>Fox Sport</small>--}}
    {{--<div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quo--}}
    {{--distinctio quae consectetur ipsa dolore sint maxime odit a obcaecati. Qui, iusto aperiam vitae--}}
    {{--optio ipsam voluptatibus vel! Non, excepturi.--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div>--}}
    {{--<figure>--}}
    {{--<img src="/gym/img/testimonials/6.jpg" alt="//">--}}
    {{--</figure>--}}
    {{--<strong>Ema Thompson</strong>--}}
    {{--<small>Fox Sport</small>--}}
    {{--<div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quo--}}
    {{--distinctio quae consectetur ipsa dolore sint maxime odit a obcaecati. Qui, iusto aperiam vitae--}}
    {{--optio ipsam voluptatibus vel! Non, excepturi.--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div>--}}
    {{--<figure>--}}
    {{--<img src="/gym/img/testimonials/1.jpg" alt="//">--}}
    {{--</figure>--}}
    {{--<strong>Ema Thompson</strong>--}}
    {{--<small>Fox Sport</small>--}}
    {{--<div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quo--}}
    {{--distinctio quae consectetur ipsa dolore sint maxime odit a obcaecati. Qui, iusto aperiam vitae--}}
    {{--optio ipsam voluptatibus vel! Non, excepturi.--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--</article>--}}
    {{--<!-- end Testimonials -->--}}


    {{--<!-- begin Pricing -->--}}
    {{--<article class="pricing arrow" id="pricing">--}}
    {{--<div class="container">--}}
    {{--<h2>Crossfit <span>pricing</span> package</h2>--}}

    {{--<div class="row">--}}
    {{--<div class="col-sm-6 col-md-4 animated" data-animation="flipInY" data-animation-delay="200">--}}
    {{--<ul class="pricing-item">--}}
    {{--<li>$ 129--}}
    {{--<small>3 month contract</small>--}}
    {{--</li>--}}
    {{--<li>Classes 2x/week</li>--}}
    {{--<li>Open Gym Monday-Friday</li>--}}
    {{--<li>Yoga Relax Classes</li>--}}
    {{--<li>Adventure racing</li>--}}
    {{--<li>Olympic Weightlifting</li>--}}
    {{--<li><a href="#" class="btn">Buy Now</a></li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="col-sm-6 col-md-4 animated" data-animation="flipInY" data-animation-delay="400">--}}
    {{--<ul class="pricing-item">--}}
    {{--<li>$ 139--}}
    {{--<small>6 month contract</small>--}}
    {{--</li>--}}
    {{--<li>Classes 2x/week</li>--}}
    {{--<li>Open Gym Monday-Friday</li>--}}
    {{--<li>Yoga Relax Classes</li>--}}
    {{--<li>Adventure racing</li>--}}
    {{--<li>Olympic Weightlifting</li>--}}
    {{--<li><a href="#" class="btn">Buy Now</a></li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="col-sm-6 col-sm-offset-3 col-md-4 col-sm-offset-0 animated" data-animation="flipInY"--}}
    {{--data-animation-delay="600">--}}
    {{--<ul class="pricing-item">--}}
    {{--<li>$ 169--}}
    {{--<small>Unlimited CrossFit</small>--}}
    {{--</li>--}}
    {{--<li>Unlimited Crossfit Classes</li>--}}
    {{--<li>Open Gym Monday-Friday</li>--}}
    {{--<li>Yoga Relax Classes</li>--}}
    {{--<li>Adventure racing</li>--}}
    {{--<li>Olympic Weightlifting</li>--}}
    {{--<li><a href="#" class="btn">Buy Now</a></li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</article>--}}
    {{--<!-- end Pricing -->--}}


    {{--<!-- begin Gallery -->--}}
    {{--<article class="gallery" id="gallery">--}}
    {{--<figure class="item-thumbnail animated" data-animation="bounceIn" data-animation-delay="100">--}}
    {{--<img src="/gym/img/gallery/img01.jpg" alt="//">--}}
    {{--<span class="overthumb"></span>--}}
    {{--<div class="icons"><a href="/gym/img/gallery/img01.jpg" class="lightzoom fancybox" data-rel="gallery"--}}
    {{--title="Item 01"><i class="icon-eye"></i></a></div>--}}
    {{--</figure>--}}
    {{--<figure class="item-thumbnail animated" data-animation="bounceIn" data-animation-delay="200">--}}
    {{--<img src="/gym/img/gallery/img02.jpg" alt="//">--}}
    {{--<span class="overthumb"></span>--}}
    {{--<div class="icons"><a href="/gym/img/gallery/img02.jpg" class="lightzoom fancybox" data-rel="gallery"--}}
    {{--title="Item 02"><i class="icon-eye"></i></a></div>--}}
    {{--</figure>--}}
    {{--<figure class="item-thumbnail animated" data-animation="bounceIn" data-animation-delay="300">--}}
    {{--<img src="/gym/img/gallery/img03.jpg" alt="//">--}}
    {{--<span class="overthumb"></span>--}}
    {{--<div class="icons"><a href="/gym/img/gallery/img03.jpg" class="lightzoom fancybox" data-rel="gallery"--}}
    {{--title="Item 03"><i class="icon-eye"></i></a></div>--}}
    {{--</figure>--}}
    {{--<figure class="item-thumbnail animated" data-animation="bounceIn" data-animation-delay="400">--}}
    {{--<img src="/gym/img/gallery/img04.jpg" alt="//">--}}
    {{--<span class="overthumb"></span>--}}
    {{--<div class="icons"><a href="/gym/img/gallery/img04.jpg" class="lightzoom fancybox" data-rel="gallery"--}}
    {{--title="Item 04"><i class="icon-eye"></i></a></div>--}}
    {{--</figure>--}}
    {{--<figure class="item-thumbnail animated" data-animation="bounceIn" data-animation-delay="500">--}}
    {{--<img src="/gym/img/gallery/img05.jpg" alt="//">--}}
    {{--<span class="overthumb"></span>--}}
    {{--<div class="icons"><a href="/gym/img/gallery/img05.jpg" class="lightzoom fancybox" data-rel="gallery"--}}
    {{--title="Item 05"><i class="icon-eye"></i></a></div>--}}
    {{--</figure>--}}
    {{--<figure class="item-thumbnail animated" data-animation="bounceIn" data-animation-delay="600">--}}
    {{--<img src="/gym/img/gallery/img06.jpg" alt="//">--}}
    {{--<span class="overthumb"></span>--}}
    {{--<div class="icons"><a href="/gym/img/gallery/img06.jpg" class="lightzoom fancybox" data-rel="gallery"--}}
    {{--title="Item 06"><i class="icon-eye"></i></a></div>--}}
    {{--</figure>--}}
    {{--<figure class="item-thumbnail animated" data-animation="bounceIn" data-animation-delay="700">--}}
    {{--<img src="/gym/img/gallery/img07.jpg" alt="//">--}}
    {{--<span class="overthumb"></span>--}}
    {{--<div class="icons"><a href="/gym/img/gallery/img07.jpg" class="lightzoom fancybox" data-rel="gallery"--}}
    {{--title="Item 07"><i class="icon-eye"></i></a></div>--}}
    {{--</figure>--}}
    {{--<figure class="item-thumbnail animated" data-animation="bounceIn" data-animation-delay="800">--}}
    {{--<img src="/gym/img/gallery/img08.jpg" alt="//">--}}
    {{--<span class="overthumb"></span>--}}
    {{--<div class="icons"><a href="/gym/img/gallery/img08.jpg" class="lightzoom fancybox" data-rel="gallery"--}}
    {{--title="Item 08"><i class="icon-eye"></i></a></div>--}}
    {{--</figure>--}}
    {{--<div class="clearfix"></div>--}}
    {{--</article>--}}
    {{--<!-- end Gallery -->--}}


    {{--<!-- begin Patners -->--}}
    {{--<article class="patners" id="patners">--}}
    {{--<div class="container">--}}
    {{--<div id="owl-patners" class="owl-carousel">--}}
    {{--<div class="item"><a href="#"><img src="/gym/img/patners/logo01.png" alt="//"></a></div>--}}
    {{--<div class="item"><a href="#"><img src="/gym/img/patners/logo02.png" alt="//"></a></div>--}}
    {{--<div class="item"><a href="#"><img src="/gym/img/patners/logo03.png" alt="//"></a></div>--}}
    {{--<div class="item"><a href="#"><img src="/gym/img/patners/logo04.png" alt="//"></a></div>--}}
    {{--<div class="item"><a href="#"><img src="/gym/img/patners/logo02.png" alt="//"></a></div>--}}

    {{--<div class="item"><a href="#"><img src="/gym/img/patners/logo03.png" alt="//"></a></div>--}}
    {{--<div class="item"><a href="#"><img src="/gym/img/patners/logo01.png" alt="//"></a></div>--}}
    {{--<div class="item"><a href="#"><img src="/gym/img/patners/logo02.png" alt="//"></a></div>--}}
    {{--<div class="item"><a href="#"><img src="/gym/img/patners/logo04.png" alt="//"></a></div>--}}
    {{--<div class="item"><a href="#"><img src="/gym/img/patners/logo01.png" alt="//"></a></div>--}}

    {{--<div class="item"><a href="#"><img src="/gym/img/patners/logo02.png" alt="//"></a></div>--}}
    {{--<div class="item"><a href="#"><img src="/gym/img/patners/logo04.png" alt="//"></a></div>--}}
    {{--<div class="item"><a href="#"><img src="/gym/img/patners/logo01.png" alt="//"></a></div>--}}
    {{--<div class="item"><a href="#"><img src="/gym/img/patners/logo02.png" alt="//"></a></div>--}}
    {{--<div class="item"><a href="#"><img src="/gym/img/patners/logo03.png" alt="//"></a></div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</article>--}}
    {{--<!-- end Patners -->--}}


    {{--<!-- begin Contact -->--}}
    {{--<article class="contact" id="contact">--}}
    {{--<div class="contact-info">--}}
    {{--<div class="animated" data-animation="fadeInLeft" data-animation-delay="400">--}}

    {{--<h2>contact information</h2>--}}
    {{--<address>--}}
    {{--<p><i class="icon-location"></i>Address CT5454, Street Two, New Somthing, Country</p>--}}
    {{--<p><i class="icon-phone"></i>Telephone: +555 9098043</p>--}}
    {{--<p><i class="icon-phone"></i>Fax: +444 6498439</p>--}}
    {{--<p><i class="icon-mail"></i>Email: info@company.com</p>--}}
    {{--</address>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="map" id="map"></div>--}}
    {{--</article>--}}
    {{--<!-- end Contact -->--}}
</section>
<!-- end Content -->

<script type="text/javascript">
    $(document).ready(function () {
        $('.show_reg').click(function (event) {
            $('.reg_hide').show();
        });
        $(".modalPop").click(function () {
            $('#blocker').bPopup({
                positionStyle: 'fixed'
            });

        });

    });


</script>

<div class="credit ad_adInfo" style="position:relative;z-index: 88;">
    <div class='show_reg' style='color:white;font-size: 1.3em;text-align:center;padding:10px;cursor: pointer;'>
        Regulamin
    </div>
    <div class="reg_hide" style='display:none;'>
        <p class="ad_adInfo" style="color:white">
            Niniejszy landing page jest częścią usługi Wybierz-nagrode.pl, która umożliwia zdobycie określonej ilości
            punktów oraz odblokowanie przydzielonych jej nagród szczegółowo określonych w zakładce "Nagrody" na stronie
            panelu użytkownika w/w usługi. Serwis jest usługą subskrypcyjną dostępną w sieci Plus, Orange, Play. Dla
            sieci PLUS poprzez wysłanie sms aktywacyjnego wpisanie na stronie kodu PIN otrzymanego darmowym sms'em na
            podany numer telefonu komórkowego użytkownik potwierdza zaakceptowanie Regulaminu serwisu. Wraz z aktywacją
            subskrypcji użytkownik otrzymuje wynik wykonanego testu. Subskrybenci serwisu otrzymują sms w poniedziałek
            około godziny 10:00. Sms zawiera informacje o usłudze. Koszt za każdy sms przychodzący to 15 zł (18,45 zł
            brutto). Dezaktywacji subskrypcji można dokonać w dowolnym momencie poprzez wysłanie SMS o treści STOP
            NAGRODA pod numer 61515 (Koszt wysłania sms to 0 zł). Życzymy przyjemnego korzystania ze strony i wielu
            zdobytych nagród!

        </p>
    </div>
</div>
<!-- Modal -->

<div id="blocker" class="modal" style="text-align: center;">
    <!--<div class="modal fade"  data-backdrop="static"  id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">-->
    <div class="modal-dialog">
        <div class="modal-content" style="">
            <div class="modal-header">
                <!--<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>-->
                <h4 class="modal-title" id="myModalLabel"></h4>
            </div>
            <div class='step1'>
                <div class="modal-body" style="font-size: 16px;font-weight: 600;">
                    <div clas='step1'>
                        W celu weryfikacji podaj <span style="color: red;">  numer telefonu.</span>
                    </div>
                </div>
                <div class="modal-footer" style="text-align: center;font-size: 16px;font-weight: 600;">
                    <div id="codeDiv">
                        <div class='step1'>
                            Podaj swój numer:
                        </div>
                        <div id="respons"></div>
                        </br>
                        <div class="form-group">
                            <input type="text" name='number' class="form-control"
                                   style="margin: auto;width:250px; height:30px;" id="number">
                        </div>
                    </div>
                    <div style='font-size:10px;'>

                        <input class="reg" type="checkbox" checked="checked"> Akceptuje <a
                                href="/docs/regulamin_FIT.pdf" target="blank">regulamin</a> <a
                                id='show-small-reg' href="#"> (czytaj więcej)</a> </br>
                    </div>
                    <div id='reg-small' style="display:none;">
                        Koszt wysłania SMS na numer 92550 wynosi 3zł  (3,69zł brutto)
                        Przyjmuję do wiadomości, iż zamawiam treści cyfrowe nie zapisane na nośniku materialnym i wyrażam zgodę na rozpoczęcie spełniania świadczenia przed upływem terminu do odstąpienia od umowy oraz potwierdzam, że jestem świadomy utraty prawa odstąpienia od umowy z chwilą rozpoczęcia spełniania świadczenia. Akceptuję regulamin i wyrażam zgodę na rozpoczęcie świadczenia usługi przed upływem terminu na odstąpienie od umowy (14 dni). Wiem, że tracę ustawowe prawo do odstąpienia, ale mogę w każdej chwili wypowiedzieć umowę. Rozumiem, że zamówienie usługi wiąże się z obowiązkiem zapłaty.
                        Reklamacje: reklamacje@jedz-eco.pl
                    </div>
                    <div id='reg_error' style="color:red;"></div>
                    </br>
                    <button class="myButton button-small" onclick="step1()" style="margin-left: auto;" value="Aktwuj"
                            name='submit'>Weryfikuj
                    </button>
                    <br>
                    <input id="title_site" type="text" style="visibility: hidden" value="<?php echo '55f1a7233a071' ?>">
                </div>
            </div>
            <div class='step2'>
                <div class="modal-body" style="font-size: 16px;font-weight: 600;">
                    <div clas=''>
                        Wpisz <span style="color: red;"> przesłany pin.</span>
                    </div>

                </div>
                <div class="modal-footer" style="text-align: center;font-size: 16px;font-weight: 600;">
                    <div id="codeDiv">
                        <div class=''>
                        </div>
                        <div id="respons"></div>
                        Wpisz poniżej pin:
                        </br>
                        <div class="form-group">
                            <input type="text" name='pin' class="form-control"
                                   style="margin: auto;width:250px; height:30px;" id="pin">
                        </div>
                    </div>
                    <div id='reg_error' style="color:red;"></div>
                    </br>
                    <button class="myButton button-small" onclick="step2()" style="margin-left: auto;" value="Aktwuj"
                            name='submit'>Weryfikuj
                    </button>
                    <br>
                    <input id="title_site" type="text" style="visibility: hidden" value="">
                </div>
            </div>
            <div class='step3'>
                <div class="modal-body" style="font-size: 16px;font-weight: 600;">
                    <div clas=''>
                        Podaj swój adres <span style="color: red;"> email </span> zostaną na niego przesłane odpowiednie
                        informacje.
                    </div>
                </div>
                <div class="modal-footer" style="text-align: center;font-size: 16px;font-weight: 600;">
                    <div id="codeDiv">
                        <div class=''>
                        </div>
                        <div id="respons"></div>
                        </br>
                        <div class="form-group">
                            <input type="text" name='pin' class="form-control"
                                   style="margin: auto;width:250px; height:30px;" id="email">
                        </div>
                    </div>
                    <div id='reg_error' style="color:red;"></div>
                    </br>
                    <button class="myButton" onclick="step3()" style="margin-left: auto;" value="Wyślij Email"
                            name='submit'>Aktywuj
                    </button>
                    <br>
                    <input id="title_site" type="text" style="visibility: hidden" value="">

                </div>
            </div>
        </div>
    </div>
    <!--</div>-->
</div>
<script>
    var currentStep = 0;
    var referrer = document.referrer;
    var reg = 'Zaznacz, że zapoznałeś się z regulaminem';

    function validate() {
        var valid = true;
        if (!$('.reg').prop('checked')) {
            valid = false;
            alert('Zaznacz ze zapoznałeś sie z regulaminem!');
        }
        if ($('#number').val().length < 8) {
            valid = false;
            alert('Wpisz poprawny numer!');

        }

        return valid;
    }

    function loadDataAjax(data, url, callback) {

        var id;
        url = 'http://www.zgarnijciuchy.pl' + url;
        console.log(url);
        return $.ajax({
            url: '/processub',
            data: {data: data, title: $('#title_site').val(), url: url},
            type: 'get',
        }).done(function (data) {
            console.log(JSON.parse(data));
            callback(JSON.parse(data));
        });
    }

    $(function () {

        $('.step2').hide();
        $('.step3').hide();
        // $('#myModal').modal('show');
    });


    function step1() {
        result = validate();
        console.log(result);
        if (!result) {
            return false;
        }
        data = {
            'number': $('#number').val(),
            'step': 1
        };
        $('.step1').hide();
        loadDataAjax(data, '/s/check-code-sub', function (data) {
            console.log(data['status']);
            if (data['status'] == true) {
                $('.step1').hide();
                $('.step2').show();
                $('.step3').hide();
            } else {
                $('.step1').show();
            }

        });
    }

    function step2() {
        data = {
            'pin': $('#pin').val(),
            'step': 2,
            'referer': referrer
        };
        $('.step2').hide();
        loadDataAjax(data, '/s/check-code-sub', function (data) {
            console.log(data);
            if (data['status'] == true) {
                $('.step1').hide();
                $('.step2').hide();
                $('.step3').show();
            } else {
                $('.step2').show();
                alert(data['msg']);
            }

        });
    }

    function step3() {
        data = {
            'email': $('#email').val(),
            'step': 3
        };
        $('.step3').hide();
        loadDataAjax(data, '/s/check-code-sub', function (data) {
            console.log(data);
            if (data['status'] == true) {
                $('.step1').hide();
                $('.step2').hide();
                $('.step3').hide();
                alert(data['msg']);
                $('.step4').show();

            } else {
                $('.step3').show();
            }
        });
    }

    $('#show-small-reg').click(function () {
        $('#reg-small').show();
    });


</script>
@stop