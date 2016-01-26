@extends('app')
@section ('content')

<section id="header" class="home-slider ">

    <div class="wooden">
        <div class="pos-center">

            <div class="slides wow slideInLeft" data-wow-delay="1s">
                @foreach($articlesTop  as $article)
                <div class="item pepers">
                    <div class="caption">
                        <h3>{{$article->title}}</h3>
                        <p>
                            {{substr ($article->body,0,240)}}
                            <a href="{{ url('/articles',$article->id)}}">Czytaj artykuł</a>
                        </p>
                    </div>
                    <img  src="{!!$article->getImage()!!}" alt="" />
                </div>

                @endforeach
            </div>

            <div class="pagination">
                <ul>
                    @for($i=1;$i<=$articlesTop->count();$i++)
                    <li slide="{{ $i }}"><a>{{ $i }}</a></li>
                    @endfor

                </ul>
            </div>
        </div>
    </div>

    <section class="caption quote">
        <div class="pos-center slideInLeft bounceIn" data-wow-delay="2s">
            <blockquote>
                <p>“Jakiś fajny cytat.”</p>
            </blockquote>

        </div>
        <hr class="fancy-line">

    </section>


</section>
<section id="home" class="content">
    <section class="boxes">
        <div class="pos-center">

            <section class="box first wow slideInLeft" data-wow-delay="1s" >
                <div class="step1">
                    <h2>Rwd Themes</h2>
                    <p>Created from scratch <a style='color: red;' href='http://cuckopl.sk5.eu/CSS/rwd-bootstrap/myindex.php' target='_blank'>Check more</a></p>
                </div>
            </section>

            <section class="box second wow bounceInUp" data-wow-delay=1s">
                <div class="step1">
                    <h2>Based Ona Laravel 5.1 </h2>
                    <p>Sysmtem based on Laravel 5.1 framework</p>
                </div>
                <div class="step2 hidden">
                    <h2>Ostatnio dodane:</h2>

                    <ul class="icons-list">
                        <li class="chicken"><a href="#">Sałatka z chrupiącym indykiem</a></li>
                        <li class="chicken"><a href="#">Bagietka francuska</a></li>
                        <li class="chicken"><a href="#">Zapiekanka krakowska</a></li>
                        <li class="chicken"><a href="#">Sałatka z chrupiącym kurczakiem</a></li>
                        <li class="chicken"><a href="#">Schab po węgiersku</a></li>
                    </ul>
                    <a href="#">Wszystkie przepisy</a>
                </div>
            </section>

            <section class="box third wow slideInRight" data-wow-delay="1s">
                <div class="step1">
                    <h2><a href="/admin" >Basic Admin</a></h2>
                    <p>Basic admin content. Acl system CRUD generator, User Permissions , Group Permissions.</p>
                </div>
                <div class="step2 hidden">
                    <h2>Ostatnio dodane:</h2>

                    <ul class="icons-list">
                        <li class="waiter"><a href="#">Restauracja Da Pietro</a></li>
                        <li class="waiter"><a href="#">Miód Malina</a></li>
                        <li class="waiter"><a href="#">Trattoria Mamma Mia</a></li>
                        <li class="waiter"><a href="#">Pod Wawelem</a></li>
                        <li class="waiter"><a href="#">Pomodorino</a></li>
                    </ul>
                    <a href="#">Wszystkie</a>
                </div>
            </section>

        </div>
    </section>

    <section class="food-fight">
        <div class="pos-center">
            <header>
                <h2>Porównywarka <br> Sprzętu  </h2>
                <h4>Porównaj</h4>
            </header>

            <div class="opponent good">
                <div class="header">
                    <!--<small style="color: #ff3333" >AMD</small>-->

                </div>
                <!--                        <div class="details">
                                            1.4
                                            <small>tłuszcz</small>
                                        </div>-->
                <div class="image">
                    <img style="max-width:100%;" src="http://i.imgur.com/uMLkoV4.png" alt="" />
                </div>
                <!--<p>AMD ATI </p>-->
            </div>
            <div class="vs-small"><img  style ="max-width: 100%" src="img/icon-food-fight.png" /></div>

            <div class="opponent bad">
                <div class="header">
                    <!--<small style="color: #6699ff">INTEL</small>-->
                </div>
                <!--                        <div class="details">
                                            2.1
                                            <small>tłuszcz</small>
                                        </div>-->
                <div class="image">
                    <img style="max-width:100%;"  src="https://pbs.twimg.com/profile_images/532732477320593408/_rEfoNQ3.png" alt="" />
                </div>
                <!--<p>INTEL</p>-->
            </div>
            <!--<div class="clear"></div>-->
            <div class="vs-image"><img  style ="max-width: 100%" src="img/icon-food-fight.png" /></div>
        </div>
    </section>
    <section class="inspirations">
        <div class="pos-center">
            <header>
                <h2>Komputerowe Zamieszanie</h2>
                <h4>Zobacz wszystkie artykuły</h4>
            </header>

            <div class="slider">
                <!--<a class="prev" href="#">&LeftArrow;</a>-->
                <div class="slides-container">
                    <div class="items">

                        @foreach ($articlesRandom as $article)
                        <div>
                            <a href="#"><img src="{{$article->getImage()}}" alt="" /></a>
                            <h2><a href="#">{{$article->title}}</a></h2>
                            <p>  {{substr ($article->body,0,200)}}[...]</p>
                            <a class="more" href="{{ url('/articles',$article->id)}}">Czytaj dalej [...]</a>
                        </div>

                        @endforeach

                    </div>
                </div>
                <!--<a class="next" href="#">&RightArrow;</a>-->
            </div>

        </div>
    </section>
    <hr class="fancy-line">

    <section class="comments">
        <div class="pos-center">
            <header>
                <h2>Poznaj opinie innych</h2>
                <h4><a href="#">Zobacz wszystkie komentarze</a></h4>
            </header>

            <section class="container">
                <span class="flyer">&uArr;</span>

                @foreach ($comments as $comment)
                <section class="first">
                    <header>
                        <small>{{$comment->user->name}} w dniu {{$comment->created_at}}</small>
                        <a href="{{ url('/articles',$comment->article->id)}}">{{$comment->article->title}}</a>

                    </header>
                    <img alt='' src='http://place-hold.it/150x150/666/fff/000.gif' />                        
                    <blockquote>{{substr($comment->content,0,200)}} [...]</blockquote>
                </section>
                @endforeach

                <!--
                                <section>
                                    <header>
                                        <small>Kasia w dniu 23.03.2013</small>
                                        LOREM IPSUM
                                    </header>
                                    <img alt='' src='http://place-hold.it/150x150/666/fff/000.gif' />
                                    <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed magna orci, eget egestas tellus. Mauris id lectus lorem, et condimentum est.</blockquote>
                                </section>
                
                
                                <section class="last">
                                    <header>
                                        <small>Roman w dniu 23.03.2013</small>
                                        LOREM IPSUM
                                    </header>
                                    <img alt='' src='http://place-hold.it/150x150/666/fff/000.gif' />
                                    <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed magna orci, eget egestas tellus. Mauris id lectus lorem, et condimentum est.</blockquote>
                                </section>-->

                <div class="clear"></div>
            </section>
        </div>
    </section>
</section>



@stop
