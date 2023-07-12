<!--== Header Area Start ==-->
<header id="header-area">
    <div class="preheader-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-7 col-7">
                    <div class="preheader-left">
                        <a href="mailto:info@pakfellow.com"><i class="fa fa-envelope"></i> info@pakfellow.com</a>
                        <a><i class="fa fa-whatsapp"></i> +44 7577 638 786</a>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-5 col-5 text-right">
                    <div class="preheader-right">
                        @if(!Auth::check())
                        <a title="Login" class="btn-auth btn-auth-rev" href="{{route('register-user')}}">Login</a>
                        <a title="Register" class="btn-auth btn-auth" href="{{route('register-user')}}">Signup</a>
                        @else
                        <a title="Logout" class="btn-auth btn-auth-rev" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <a title="Logout" class="btn-auth btn-auth" href="{{route('add-blog')}}">Post A Blog</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom-area" id="fixheader">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="main-menu navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{route('home')}}">
                            <img src="{{asset('assets/img/logo.png')}}" alt="Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menucontent" aria-controls="menucontent" aria-expanded="false">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="menucontent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item {{(Route::currentRouteName() == 'home') ? 'active' : ''}}"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                                <li class="nav-item {{(Route::currentRouteName() == 'about') ? 'active' : ''}}"><a class="nav-link" href="{{route('about')}}">About</a></li>
                                <li class="nav-item {{(Route::currentRouteName() == 'events') ? 'active' : ''}}"><a class="nav-link" href="{{route('events')}}">Events</a></li>
                                <li class="nav-item {{(Route::currentRouteName() == 'centers') ? 'active' : ''}}"><a class="nav-link" href="{{route('centers')}}">Centers</a></li>
                                <li class="nav-item {{(Route::currentRouteName() == 'directory') ? 'active' : ''}}"><a class="nav-link" href="{{route('directory')}}">Fellows</a></li>
                                <li class="nav-item {{(Route::currentRouteName() == 'blog-list') ? 'active' : ''}}"><a class="nav-link" href="{{route('blog-list')}}">Blogs</a></li>

                                @if(!Auth::check() || Auth::user()->user_type_id != 1)
                                <li class="nav-item {{(Route::currentRouteName() == 'contact-us') ? 'active' : ''}}"><a class="nav-link" href="{{route('contact-us')}}">Contact</a></li>
                                @endif

                                @if(Auth::check() && Auth::user()->user_type_id == 1)
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button">Admin Section</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="{{route('approve-blogs')}}">Approve Blogs</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{route('approve-comments')}}">Approve Comments</a></li>
                                    </ul>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!--== Header Area End ==-->