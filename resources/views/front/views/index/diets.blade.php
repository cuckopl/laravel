@extends('front/layouts/gym/gym')
@section ('content')
    <article class="pricing arrow" id="">
        <div class="container">
            <h2>Diety <span>do</span> pobrania</h2>
            <div class="row">
                @foreach ($diets as $key => $image)
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-sm-offset-0 animated flipInY visible"
                         data-animation="flipInY" data-animation-delay="600">
                        <ul class="pricing-item">
                            <li>Dieta {{$key}}</li>
                            <li>{{$image}}</li>
                            <li><a href="/material/Diety/{{$image}}" class="btn">Pobierz</a></li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    </article>

