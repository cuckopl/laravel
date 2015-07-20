    
@foreach ($articleComments as $articleComments)
<div class="single-comment">
    <div class="comment-image">         
        <img class="media-object" src="http://placehold.it/64x64" alt="">
    </div>
    <div class="comment-info">
        {{$articleComments->user->name}}   
        <small>{{$articleComments->created_at}}</small>
    </div>
    <div class="comment-description">
        {{$articleComments->content}}
    </div>

</div>
@endforeach