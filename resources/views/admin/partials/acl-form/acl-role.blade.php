<div class="form-group">


    {!! Form::label('Name') !!}
    </br>
    {!! Form::text('name',null,['class'=>'form-control','foo'=>'bar'])!!}
</div>
<div class="form-group">


    {!! Form::label('body','Slug') !!}
    </br>
    {!! Form::text('slug',null,['class'=>'form-control','foo'=>'bar'])!!}

</div>

<div class="form-group">
    {!! Form::label('body','Description') !!}
    </br>
    {!! Form::text('description',null,['class'=>'form-control','foo'=>'bar'])!!}

</div>
<div class="form-group">


    {!! Form::label('body','Add User Permission') !!}
    </br>
    {!! Form::select('roles[]',$permissions, $role->getRolePermissions(), array('multiple','class'=>'form-control','style'=>'height:500px')) !!}

</div>



