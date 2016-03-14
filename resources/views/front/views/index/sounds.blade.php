@extends('front/layouts/gym/gym')
@section ('content')
    <article class="pricing arrow" id="">
        <div class="container">
            <h2>Dzwonki <span>do</span> pobrania</h2>
            <div class="row">
                @foreach ($sounds as $key => $image)
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-sm-offset-0 animated flipInY visible"
                         data-animation="flipInY" data-animation-delay="600">
                        <ul class="pricing-item">
                            <li >{{$key}}</li>
                            <li style="height:150px;">{{$image}}</li>
                            <li><a href="/material/Dzwonki/{{$image}}" class="btn">Pobierz</a></li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    </article>

