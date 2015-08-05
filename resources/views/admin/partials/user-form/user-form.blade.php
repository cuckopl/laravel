<div class="form-group">

    {!! Form::label('Name') !!}
    </br>
    {!! Form::text('name',null,['class'=>'form-control','foo'=>'bar'])!!}
</div>
<div class="form-group">


    {!! Form::label('body','Email') !!}
    </br>
    {!! Form::text('email',null,['class'=>'form-control','foo'=>'bar'])!!}

</div>
<div class="form-group">


    {!! Form::label('body','Add User Group') !!}
    </br>
    {!! Form::select('group[]', $groups,$user->getUserRole(), array('class'=>'form-control')) !!}


</div>
<div class="form-group">


    {!! Form::label('body','Add User Permission') !!}
    </br>
    {!! Form::select('roles[]', $permissions,$user->getUserPermissions(), array('multiple','class'=>'form-control','style'=>'height:500px')) !!}

</div>


