<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $rec->title }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        .navbar{
            min-height:50px;
        }
    </style>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/'.Session::get('language')) }}">
                    <h1>AUTO NOMA</h1>
                    {{--{{ config('app.name', 'Auto Noma') }}--}}
                </a>


            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->

                <?php
                    if($lang == "lv") {
                        $href = "/";
                    }else{
                        $href =  "/".__('words.lang');
                    }
                ?>
                <ul class="nav navbar-nav">
                    <li class="first {{$rec->link == __('words.lrental')?'active':''}}">
                        <a href="{{$href}}">{{__('words.rental')}}</a>
                    </li>
                    <li class="{{$rec->link == __('words.ltransfers')?'active':''}}">
                        <a href="/{{__('words.lang')}}/{{__('words.ltransfers')}}">{{__('words.transfers')}}</a>
                    </li>
                    <li class="{{$rec->link == __('words.laccessories')?'active':''}}">
                        <a href="/{{__('words.lang')}}/{{__('words.laccessories')}}">{{__('words.accessories')}}</a>
                    </li>
                    <li class="{{$rec->link == __('words.labout')?'active':''}}">
                        <a href="/{{__('words.lang')}}/{{__('words.labout')}}">{{__('words.about')}}</a>
                    </li>
                    <li class="{{$rec->link == __('words.lcontacts')?'active':''}}">
                        <a href="/{{__('words.lang')}}/{{__('words.lcontacts')}}">{{__('words.contacts')}}</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->

                    <li>
                        {{--<div id="langs">--}}
                            <ul id="langs">
                                <li class="first {{__('words.lang') == 'lv' ?'active':''}}"><a href="{{url('/lv/')}}">LV</a></li>
                                <li class="{{__('words.lang') == 'en' ?'active':''}}"><a href="{{url('/en/')}}">EN</a></li>
                                <li class="last {{__('words.lang') == 'ru' ?'active':''}}"><a href="{{url('/ru/')}}">RU</a></li>
                            </ul>
                        {{--</div>--}}
                    </li>
                    @if (Auth::guest())
                        {{--<li><a href="{{ route('login') }}">Login</a></li>--}}
                        {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    {{--<div id="main-menu">--}}

                        {{--<div class="containers">--}}
                            {{--<div class="row">--}}
                                {{--<ul id="ul1" class="list-inline">--}}
                                    {{--<li class="col-xs-12 first {{$rec->link == __('words.lrental')?'active':''}}"><a href="{{$href}}">{{__('words.rental')}}</a></li>--}}
                                    {{--<li class="col-xs-12 {{$rec->link == __('words.ltransfers')?'active':''}}"><a href="/{{__('words.lang')}}/{{__('words.ltransfers')}}">{{__('words.transfers')}}</a></li>--}}
                                    {{--<li class="col-xs-12 {{$rec->link == __('words.laccessories')?'active':''}}"><a href="/{{__('words.lang')}}/{{__('words.laccessories')}}">{{__('words.accessories')}}</a></li>--}}
                                    {{--<li class="col-xs-12 {{$rec->link == __('words.labout')?'active':''}}"><a href="/{{__('words.lang')}}/{{__('words.labout')}}">{{__('words.about')}}</a></li>--}}
                                    {{--<li class="col-xs-12 last {{$rec->link == __('words.lcontacts')?'active':''}}"><a href="/{{__('words.lang')}}/{{__('words.lcontacts')}}">{{__('words.contacts')}}</a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="clear"></div>--}}
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>