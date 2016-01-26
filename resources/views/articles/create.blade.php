@extends('app')


@section ('content')


<article>
    <div class="pos-center">
        <h1>Create New Article</h1>
        {!! Form::Model($article = new App\Article(),['url'=>'articles','files'=> true]) !!}

        @include ('articles.partials.article_form',['submitButtonText'=>'Add'])


        {!! Form::Close() !!}

        @include('errors.list')
    </div>

</article>
@stop