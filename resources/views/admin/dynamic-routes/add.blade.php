<!-- Modal -->
<div class="modal fade laravel-dynamic-modal" id="userModal-new" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        {!! Form::Model($model,['method'=>'POST' , 'route'=>['addAclRole',0],'files'=> true]) !!}

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add new role</h4>
            </div>
            <div class="modal-body">
                                    <div class="form-group">
                        {!! Form::label('id','id') !!}
                        </br>
                        {!! Form::text('{{id}}',null,['class'=>'form-control','foo'=>'bar'])!!}
                    </div>
                                    <div class="form-group">
                        {!! Form::label('name','name') !!}
                        </br>
                        {!! Form::text('{{name}}',null,['class'=>'form-control','foo'=>'bar'])!!}
                    </div>
                                    <div class="form-group">
                        {!! Form::label('code_eval','code_eval') !!}
                        </br>
                        {!! Form::text('{{code_eval}}',null,['class'=>'form-control','foo'=>'bar'])!!}
                    </div>
                                    <div class="form-group">
                        {!! Form::label('module_id','module_id') !!}
                        </br>
                        {!! Form::text('{{module_id}}',null,['class'=>'form-control','foo'=>'bar'])!!}
                    </div>
                                    <div class="form-group">
                        {!! Form::label('created_at','created_at') !!}
                        </br>
                        {!! Form::text('{{created_at}}',null,['class'=>'form-control','foo'=>'bar'])!!}
                    </div>
                                    <div class="form-group">
                        {!! Form::label('updated_at','updated_at') !!}
                        </br>
                        {!! Form::text('{{updated_at}}',null,['class'=>'form-control','foo'=>'bar'])!!}
                    </div>
                                    <div class="form-group">
                        {!! Form::label('as','as') !!}
                        </br>
                        {!! Form::text('{{as}}',null,['class'=>'form-control','foo'=>'bar'])!!}
                    </div>
                
                @include('errors.list')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                {!! Form::submit('Add',['class'=>'btn btn-primary'])!!}
            </div>

        </div>
        {!! Form::Close() !!}

    </div>
</div>

<script type="text/javascript">var modalRoute = '{{route('DynamicRoutesAdd')}}';</script>
<script type="text/javascript" src="/admin_template/js/laravel-dynamic-modal.js"></script>




