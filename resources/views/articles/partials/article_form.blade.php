<div class="form-group">


    {!! Form::label('title') !!}
    </br>
    {!! Form::text('title',null,['class'=>'form-control','foo'=>'bar'])!!}
</div>
<div class="form-group">


    {!! Form::label('body','Treść posta') !!}
    </br>
    {!! Form::textarea('body',null,['class'=>'form-control','foo'=>'bar'])!!}
</div>

<div class="form-group">


    {!! Form::label('published_at','Data Publikacji') !!}
    </br>
    {!! Form::input('date','published_at',$article->published_at,['class'=>'form-control','foo'=>'bar'])!!}
</div>


<div class="form-group">


    {!! Form::label('image','Zdjęcie główne') !!}
    </br>
    {!! Form::input('file','image',null,['class'=>'form-control','foo'=>'bar'])!!}
</div>

<div class="form-group text-center">
    Aktualne zdjęcie główne:
    <hr>
    @if($article->getImage())
    <img class="img-responsive" src="{{$article->getImage()}}">
    @else
    <hr>
    Brak zdjęcia głównego

    @endif
    <hr>
</div>

<div class="form-group">


    {!! Form::label('tag_list','Tags:') !!}
    </br>
    {!! Form::select('tag_list[]',$tags,null,['class'=>'form-control','multiple'=>'multiple','id'=>'tag_list'])!!}
</div>


<div class="form-group">
    {!! Form::submit($submitButtonText,['class'=>'form-control'])!!}
</div>

<script type="text/javascript">
    $('#tag_list').select2({placeholder: 'chose a tag', tags: false});
</script>