 
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>RWD SITE</title>
        <link rel="stylesheet" href="/css/reset.css">
        <link rel="stylesheet" href="/css/common.css">
        <link rel="stylesheet" href="/css/screen.css">
        <link rel="stylesheet" href="/css/jqtransform.css">
        <link rel="stylesheet" href="/css/extra.css">
        <link rel="stylesheet" href="/js/wow/animate.css">
        <!-- Bootstrap Core JavaScript -->
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
        <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
        <script src="/js/wow/wow.js"></script>
        <script src="js/scripts.js"></script>
     <!--<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>-->

        <script>
            new WOW().init();
        </script>

    </head>

    <body>

        <!--Navigation--> 
        <header>
            @include('partials/menu')
        </header>
        @if (Session::has('flash_message'))
        <div class="flash alert-info">
            <p>{{ Session::get('flash_message') }}</p>
        </div>
        @endif

        <!--content-->
        @yield('content')
        <!--end content-->

        <footer>
            <div class="pos-center wow slideInLeft">
                <section class="menu">
                    <ul>
                        <li><a href="#">Pomidor</a></li>
                        <li><a href="#">Pietruszka</a></li>
                        <li><a href="#">Makaron</a></li>
                        <li><a href="#">Warzywa</a></li>
                        <li><a href="#">Kurczak</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Kuchnia japońska</a></li>
                        <li><a href="#">Włoskie smaki</a></li>
                        <li><a href="#">Hiszpańskie tapas</a></li>
                        <li><a href="#">Kuchnia tajska</a></li>
                        <li><a href="#">Kuchnia francuska</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Lunch</a></li>
                        <li><a href="#">Przystawka</a></li>
                        <li><a href="#">śniadanie</a></li>
                        <li><a href="#">Obiad</a></li>
                        <li><a href="#">Deser</a></li>
                    </ul>
                </section>

                <section class="tag-cloud">
                    @foreach($tags as $tag)
                    <a style='font-size: {{rand(1,30)}}px;' href="{{url('/tags',$tag->name)}}">{{$tag->name}}</a>
                    @endforeach

                </section>
            </div>
        </footer>
    </body>

</html>






<!-- Scripts -->
