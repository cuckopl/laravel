@extends('app')
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

@section ('content')
<h1>Articles</h1>

<article>
    <h2><a href="{{ url('/articles',$article->id)}}">{{$article->title}}</a></h2>
    <img class="img-responsive" src="{{$article->getImage()}}" alt="">
    <hr>
    <div class='body'>{{$article->body}} </div>

    <hr>
    @unless ($article->tags->isEmpty())
    <div>Tagi:

        @foreach ($tags as $tag) 
        <a href="{{url('tags',$tag)}}">{{$tag}}</a>
        @endforeach
    </div>
    <hr>
    @endunless

    <div id="comments"><!-- Ajax load comments --> </div>


    <div class="text-center">
        <button id="load_comments"  class="btn btn-primary" > Załaduj komentarze  </button>
    </div>
    <div class="well">
        <h4>Leave a Comment:</h4>
            <div class="form-group">
                <textarea id='comment_content' class="form-control" rows="3"></textarea>
            </div>
            <button id='add_comment'  class="btn btn-primary">Submit</button>
    </div>

    <!-- Comment -->


    <!-- Comment -->
    <!--    <div class="media">
            <a class="pull-left" href="#">
                <img class="media-object" src="http://placehold.it/64x64" alt="">
            </a>
            <div class="media-body">
                <h4 class="media-heading">Start Bootstrap
                    <small>August 25, 2014 at 9:30 PM</small>
                </h4>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                 Nested Comment 
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Nested Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>
                 End Nested Comment 
            </div>
        </div>-->


</article>
<input type="hidden" name="_token" value="{{ csrf_token() }}" />
@stop


<script type="text/javascript">
    
    var commentCount=3;
    var userId='{{Auth::id()}}';
    
function loadComments(articleId, amount) {
    commentCount+=3;
    $.ajax({
        method: "POST",
        url: '{{url('comments/get')}}',
        beforeSend: function (request)
        {
            request.setRequestHeader('X-CSRF-Token', $('input[name="_token"]').val());
        },
        data: {articleId: articleId, amount: amount}
    })
            .done(function (data) {
                   $('#load_comments').show();
                   $('#comments').html(data);
            });
}

function addComment (articleId,userId,content){
    $.ajax({
        method: "POST",
        url: '{{url('comments/add')}}',
        beforeSend: function (request)
        {
            request.setRequestHeader('X-CSRF-Token', $('input[name="_token"]').val());
        },
        data: {article_id: articleId, content: content,user_id:userId}
    })
            .done(function (data) {
                 $('#add_comment').show();
                 $('#comments').prepend(data);
            });
}

$(document).ready(function () {
  
    $('#load_comments').click(function ()  {
        $('#load_comments').hide();
        loadComments({{$article->id}}, commentCount);
        
    });
    
     $('#add_comment').click(function ()  {
         if (!userId){
           return   alert('Aby dodwać komentarze zaloguj się');
         }
        $('#add_comment').hide();
        content=$('#comment_content').val();
        addComment({{$article->id}}, userId,content);
        
    });
});
</script>