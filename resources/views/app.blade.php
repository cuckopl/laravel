
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Blog Post - Start Bootstrap Template</title>

        <!-- Bootstrap Core CSS -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="/css/blog-post.css" rel="stylesheet">
        <!-- jQuery -->
        <!--<script src="/js/jquery.js"></script>-->

        <!-- Bootstrap Core JavaScript -->
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
        <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Start Bootstrap</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="{{url('/articles')}}">Najnowsze wpisy</a>
                        </li>
                        <li>
                            <a href="#">Tagi</a>
                        </li>
                        @if (!Auth::guest())
                        <li>
                            <a href="{{url('/articles/create')}}">Nowy Post</a>
                        </li>
                        <!--                        <li>
                                                    <a href="#">Services</a>
                                                </li>
                                                <li>
                                                    <a href="#">Contact</a>
                                                </li>-->
                        @endif

                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                        <li><a href="{{ url('/auth/login') }}">Login</a></li>
                        <li><a href="{{ url('/auth/register') }}">Register</a></li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                            </ul>
                        </li>
                        @endif
                    </ul>

                </div>


                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Page Content -->
        <div class="content">
            @if (Session::has('flash_message'))
            <div class="flash alert-info">
                <p>{{ Session::get('flash_message') }}</p>
            </div>
            @endif


        </div>
        <div class="container">

            <div class="row">

                <!-- Blog Post Content Column -->
                <div class="col-lg-8">

                    @yield('content')


                </div>

                <!-- Blog Sidebar Widgets Column -->
                <div class="col-md-4">

                    <!-- Blog Search Well -->
                    <div class="well">
                        <h4>Blog Search</h4>
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                        </div>
                        <!-- /.input-group -->
                    </div>

                    <!-- Blog Categories Well -->
                    <div class="well">
                        <h4>Blog Categories</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled">
                                    <li><a href="#">Category Name</a>
                                    </li>
                                    <li><a href="#">Category Name</a>
                                    </li>
                                    <li><a href="#">Category Name</a>
                                    </li>
                                    <li><a href="#">Category Name</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled">
                                    <li><a href="#">Category Name</a>
                                    </li>
                                    <li><a href="#">Category Name</a>
                                    </li>
                                    <li><a href="#">Category Name</a>
                                    </li>
                                    <li><a href="#">Category Name</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>

                    <!-- Side Widget Well -->
                    <div class="well">
                        <h4>Side Widget Well</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                    </div>

                    <div class="well">
                        <h4>Tagi</h4>
                        @foreach($tags as $tag)
                        <a href="{{url('/tags',$tag->name)}}">{{$tag->name}}</a>
                        @endforeach
                    </div>

                </div>

            </div>
            <!-- /.row -->

            <hr>

            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; Your Website 2014</p>
                    </div>
                </div>
                <!-- /.row -->
            </footer>

        </div>
        <!-- /.container -->



    </body>

</html>






<!-- Scripts -->
