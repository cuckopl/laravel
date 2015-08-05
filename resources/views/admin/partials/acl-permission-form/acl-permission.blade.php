<div class="form-group">


    {!! Form::label('Name') !!}
    </br>
    {!! Form::select('name',$actions,$permission->name,['class'=>'form-control','foo'=>'bar'])!!}
</div>
<div class="form-group">


    {!! Form::label('body','Slug') !!}
    </br>
    {!! Form::select('slug',[true=>'Yes',false=>'No'],$permission->slug,['class'=>'form-control','foo'=>'bar'])!!}

</div>

<div class="form-group">
    {!! Form::label('body','Description') !!}
    </br>
    {!! Form::text('description',null,['class'=>'form-control','foo'=>'bar'])!!}

</div>


