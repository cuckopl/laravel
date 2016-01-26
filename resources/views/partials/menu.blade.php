<div class="pos-center wow slideInRight " data-wow-delay="1s">
    <h1><a href="#">lovetoeat.pl</a></h1>

    <nav id="main-nav">
        @if (0)
        current-menu-item
        @endif

        <div>
            <div class="dropdown-nav button-link">
                Menu 
            </div>

            <ul class="menu">
                <li>
                    <a href="{{url('/')}}">Home</a>
                    <ul class="sub-menu">

                    </ul>
                </li>
                @if (!Auth::guest())
                <li>
                    <a href="{{url('/articles/create')}}">Nowy Post</a>
                </li>
                @endif
                <li class="">
                    <a href="{{url('/articles')}}">Blog</a>
                <li><a href="#">Kontakt</a></li>
                @if (Auth::guest())
                <li>
                    <a href="#">Akcje</a>
                    <ul class="sub-menu">
                        <li><a href="{{ url('/auth/login') }}">Login</a></li>
                        <li><a href="{{ url('/auth/register') }}">Register</a></li>
                    </ul>
                </li>
                @else
                <li>
                    <a href="#">Akcje</a>
                    <ul class="sub-menu">
                        <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                    </ul>
                </li>
                @endif

            </ul>
        </div>                    
    </nav>
</div>