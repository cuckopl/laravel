
@extends('app')


@section ('content')

<section class="caption white">
    <div class="pos-center">
        <h2>Ostatnio dodane wpisy </h2>
    </div>
</section>
<section id="articles">
    <div class="pos-center">
        <div class="left-col">

            @foreach($articles  as $article)

            <div class="user-articles">
                <div class="info">
                    <h3><a href="{{ url('/articles',$article->id)}}">{{$article->title}}</a></h3>
                    <div class="details">
                        <p class="lead">
                            dodano przez <a href="#">{{$article->user->name}}</a>
                        </p>
                        <p><span class="glyphicon glyphicon-time"></span> {{$article->published_at->diffForHumans()}}</p>
                    </div>

                </div>

                <div>

                    <img src="{{$article->getImage()}}">

                    <div class="description">
                        <span> Pare pierwszych słów pogróbione  </span> 
                        {{substr ($article->body,0,240)}}
                        <a href='{{url('/articles',$article->id)}}'>...Więcej</a></p>

                    </div>
                </div>

            </div>

            @endforeach




            <div class="blog-paggination">

                <div class="pagination-site">
                    <div class="next">NEXT</div>
                    <div class="sites">
                        <ul>
                            <li class="active">1</li>
                            <li class="">2</li>
                            <li class="">3</li>
                            <li class="">4</li>
                            <li class="">5</li>
                            <li class="">6</li>
                        </ul>
                    </div>
                    <div class="prev">PREV</div>
                </div>
            </div>
        </div>

<!--        <div class="right-col">
            <div class="nav-items">
                <div class="item articles">
                    <h2>Najlepsze artykuły</h2>
                    <ul>
                        <li>Art 1</li>
                        <li>Art 2</li>
                        <li>Art 3</li>
                        <li>Art 4</li>
                        <li>Art 5</li>
                    </ul>
                </div>

                <div class="item categories">
                    <h2>Kategorie</h2>
                    <ul>
                        <li>Art 1</li>
                        <li>Art 2</li>
                        <li>Art 3</li>
                        <li>Art 4</li>
                        <li>Art 5</li>
                    </ul>
                </div>
                <div class="item tags">
                    <h2>Tagi</h2>
                    <div>
                        <a href='#' title='2 tematy' style='font-size: 16.5px;'>TAGI</a>
                        Dodać do każdego widoku tagi ! Dodać do templatki w footera tagi 
                    </div>
                </div>
            </div>
        </div>-->

</section>

<div class="text-center">
    {!!$articles->render()!!}

</div>

@stop