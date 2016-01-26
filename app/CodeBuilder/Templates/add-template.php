
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
                <?php foreach ($data->tableColumns as $column): ?>
                    <div class="form-group">
                        {!! Form::label('<?php echo $column ?>','<?php echo $column ?>') !!}
                        </br>
                        {!! Form::text('{{<?php echo $column ?>}}',null,['class'=>'form-control','foo'=>'bar'])!!}
                    </div>
                <?php endforeach; ?>

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

<script type="text/javascript">var modalRoute = '{{route('<?php echo $data->routes->aliases['store']?>')}}';</script>
<script type="text/javascript" src="/admin_template/js/laravel-dynamic-modal.js"></script>




