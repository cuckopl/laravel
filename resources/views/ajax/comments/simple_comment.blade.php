    
@foreach ($articleComments as $articleComments)
<div class="media">
    <a class="pull-left" href="#">
        <img class="media-object" src="http://placehold.it/64x64" alt="">
    </a>
    <div class="media-body">
        <h4 class="media-heading">{{$articleComments->user->name}}
            <small>{{$articleComments->created_at}}</small>
        </h4>
       {{$articleComments->content}}
    </div>
</div>
@endforeach