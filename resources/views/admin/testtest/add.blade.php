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
                        {!! Form::label('content','content') !!}
                        </br>
                        {!! Form::text('{{content}}',null,['class'=>'form-control','foo'=>'bar'])!!}
                    </div>
                                    <div class="form-group">
                        {!! Form::label('user_id','user_id') !!}
                        </br>
                        {!! Form::text('{{user_id}}',null,['class'=>'form-control','foo'=>'bar'])!!}
                    </div>
                                    <div class="form-group">
                        {!! Form::label('article_id','article_id') !!}
                        </br>
                        {!! Form::text('{{article_id}}',null,['class'=>'form-control','foo'=>'bar'])!!}
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

<script type="text/javascript">var modalRoute = '{{route('TESTTESTAdd')}}';</script>
<script type="text/javascript" src="/admin_template/js/laravel-dynamic-modal.js"></script>




