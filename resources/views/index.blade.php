@extends('templates/outs/home')

@section('content')

    <body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    iConstruct
                </a>
            </div>

            <ul class="nav navbar-nav">
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
                <li><a href="{{ url('/projects') }}">Projects</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
        </div>
    </nav>

    @stop

    {{--@section('footer')--}}

        {{--<div class="container">--}}
            {{--<div class="row">--}}

                    {{--<hr class="special">--}}
                    {{--<p class="text-center last-line">Copyright {{ date("Y") }} &copy;  <a href="facebook.com/avajbt" target="_blank">AVA-JBT</a></p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

    {{--@endsection--}}
