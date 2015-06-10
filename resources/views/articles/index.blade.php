
@extends('app')


@section ('content')
<h1>Articles</h1>

@foreach($articles  as $article)
<!-- Title -->
<h1><a href="{{ url('/articles',$article->id)}}">{{$article->title}}</a></h1>

<!-- Author -->
<p class="lead">
    dodano przez <a href="#">{{$article->user->name}}</a>
</p>

<hr>

<!-- Date/Time -->
<p><span class="glyphicon glyphicon-time"></span> {{$article->published_at->diffForHumans()}}</p>

<hr>

<!-- Preview Image -->
<img class="img-responsive" src="{{$article->getImage()}}" alt="">
<hr>

<!-- Post Content -->
<p>{{substr ($article->body,0,240)}} 
    <a href='{{url('/articles',$article->id)}}'>...Więcej</a></p>

<hr>
@endforeach
<div class="text-center">
    {!!$articles->render()!!}

</div>
@stop