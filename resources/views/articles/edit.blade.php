@extends('app')

@section('content')
Article {!!$article->title!!}

<article>
    {!! Form::Model($article,['method'=>'PATCH' , 'action'=>['ArticlesController@update',$article->id],'files'=> true]) !!}

    @include ('articles.partials.article_form',['submitButtonText'=>'Update'])



    {!! Form::Close() !!}

    @include('errors.list')

</article>
@stop