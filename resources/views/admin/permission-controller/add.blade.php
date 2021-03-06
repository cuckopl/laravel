
<!-- Modal -->
<div class="modal fade laravel-dynamic-modal" id="userModal-new" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        {!! Form::Model($permission,['method'=>'POST' , 'route'=>['addAclRole',$permission->id],'files'=> true]) !!}

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add new role</h4>
            </div>
            <div class="modal-body">

                @include ('admin.partials.acl-permission-form.acl-permission',['submitButtonText'=>'Update'])

                @include('errors.list')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                {!! Form::submit('Add role',['class'=>'btn btn-primary'])!!}
            </div>

        </div>
        {!! Form::Close() !!}

    </div>
</div>

<script type="text/javascript">var modalRoute = '{{route('addAclPremission')}}';</script>
<script type="text/javascript" src="/admin_template/js/laravel-dynamic-modal.js"></script>




