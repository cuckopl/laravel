@extends('app')
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

@section ('content')


<section id='single-article'>
    <div class="header">
        <div class="pos-center">

            <div class="title"><a href="{{ url('/articles',$article->id)}}">{{$article->title}}</a></div>
            <div class='info'>
                <p>Autor: {{$article->user->name}}</p>
                <div class="rating">*************rating</div>
            </div>
        </div>
    </div>
    <div class='nav'>
        <div class="pos-center">
            <div class='breadcrumb'>Artykuły -> Komputery -> Dyski Twarde</div>
            <!--<div class='search'>szukajka </div>-->
        </div>
    </div>
    <div class="pos-center">


        <div class="content">
            <div class="left-col">
                <div class="article-content">
                    <img class="cover" src="{{$article->getImage()}}"/>
                    <div class="article-description">
                        {!!$article->body!!} 
                    </div>
                </div>
                <hr>
                @unless ($article->tags->isEmpty())
                <div>Tagi:

                    @foreach ($tags as $tag) 
                    <a href="{{url('tags',$tag)}}">{{$tag}}</a>
                    @endforeach
                </div>
                <hr>
                @endunless
                <div class="user-comments">

                    <div id="comments"> </div>


                    <div class="text-center">
                        <button id="load_comments"  class="button-link" > Załaduj komentarze  </button>
                    </div>
                    <div class="well">
                        <div class="form-group">
                            <textarea id='comment_content' placeholder="Treść komentarza..." class="form-control" rows="3"></textarea>
                        </div>
                        <button id='add_comment'  class="button-link">Wyślij</button>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                </div>
            </div>






<!--            <div class="right-col">

                <div class='item user-info'></div>
                <div class="item tags"></div>
                <div class='item articles'></div>


            </div>-->
        </div>
    </div>

</section>

@stop

<script> $.ajaxSetup({ headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') } }); </script>
<script type="text/javascript">

var commentCount = 3;
var userId = '{{Auth::id()}}';
function loadComments(articleId, amount) {
commentCount += 3;
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

function addComment (articleId, userId, content){
$.ajax({
method: "POST",
url: '{{url('comments/add')}}',
beforeSend: function (request)
{
request.setRequestHeader('X-CSRF-Token', $('input[name="_token"]').val());
},
data: {article_id: articleId, content: content, user_id:userId}
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
content = $('#comment_content').val();
$('#comment_content').val('');
addComment({{$article->id}}, userId, content);
});
});
</script>



