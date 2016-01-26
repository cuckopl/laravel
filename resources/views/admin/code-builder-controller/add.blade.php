<div class="modal   laravel-dynamic-modal" role="dialog" aria-labelledby="gridSystemModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        {!! Form::Model($module,['method'=>'POST' , 'route'=>['addAclRole',$module->id],'files'=> true]) !!}

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Configure new module</h4>
            </div>
            <div class="modal-body">
                {!! Form::select('table_name', $tables,null, array('class'=>'form-control')) !!}

            </div>
            <div class="modal-body">
                {!! Form::text('controller_name',null,['class'=>'form-control'])!!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                {!! Form::submit('Add new module',['class'=>'btn btn-primary'])!!}
            </div>
        </div><!-- /.modal-content -->
        {!! Form::Close() !!}

    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script type="text/javascript">var modalRoute = '{{route('codeBuilderStore')}}';</script>
<script type="text/javascript" src="/admin_template/js/laravel-dynamic-modal.js"></script>