

<!-- Modal -->
<div class="modal fade" id="userModal-{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        {!! Form::Model($user,['method'=>'POST' , 'route'=>['updateUser',$user->id],'files'=> true]) !!}

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">User Name: {{$user->name}}</h4>
            </div>
            <div class="modal-body">


                @include ('admin.partials.user-form.user-form',['submitButtonText'=>'Update'])



                @include('errors.list')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                {!! Form::submit('Save Changes',['class'=>'btn btn-primary'])!!}
            </div>

        </div>
        {!! Form::Close() !!}

    </div>
</div>


<script type="text/javascript">
    $('#userModal-{{$user->id}}').modal('show');
    var adminModal = new AdminAjaxLoader();
    $('#userModal-{{$user->id}}').on('click', '[type=submit]', function (event) {
        button = $(this);
        button.hide();
        event.preventDefault();
        event.stopPropagation();
        adminModal.data = $(this).closest('form').serialize();
        adminModal.url = '{{route('updateUser',$user->id)}}';
        adminModal.cssPath = '#extradata';
        adminModal.type = 'POST';
        adminModal.succesFunction = function (data) {
            button.show();
            if (data['status'] === true) {
                $('#userModal-{{$user->id}}').modal('hide');
                setTimeout(function () {
                    $('#userModal-{{$user->id}}').parent().empty();
                    displayInfo(data['info']);
                }, 1000);
            } else {
                $('#userModal-{{$user->id}}').children('.modal-dialog').prepend(data['info']);
                console.log($('#userModal-{{$user->id}}'));
            }

        };
        adminModal.failFunction = function (data) {
            $('#userModal-{{$user->id}}').modal('hide');
            setTimeout(function () {
                $('#userModal-{{$user->id}}').parent().empty();
                displayInfo(data['info']);
            }, 1000);
        };
        adminModal.lodAjax();
    }
    );



</script>
