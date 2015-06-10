@extends('app')


@section ('content')
<h1>Create New Article</h1>

<article>
    {!! Form::Model($article = new App\Article(),['url'=>'articles','files'=> true]) !!}

    @include ('articles.partials.article_form',['submitButtonText'=>'Add'])


    {!! Form::Close() !!}

    @include('errors.list')


</article>
@stop