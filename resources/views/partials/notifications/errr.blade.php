<div class="alert alert-danger alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <ul>
        @foreach ($messages as $message)
        <li>{{$message}}</li>
        @endforeach
    </ul>

</div>

