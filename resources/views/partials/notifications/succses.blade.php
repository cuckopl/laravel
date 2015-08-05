<div class="alert alert-success alert-dismissable">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    <ul>
        @foreach ($messages as $message)
        
        <li>{{$message}}</li>
        @endforeach
    </ul>

</div>