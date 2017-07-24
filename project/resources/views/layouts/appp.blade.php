<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{!! $rec->meta !!}">
    <title>{!! $rec->title!!}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default {{--navbar-static-top--}}">
        <div class="container">
            <div class="row">
            <div class="col-md-10 col-md-offset-1">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    AUTOMAŠĪNU NOMA
                </a>
            </div>
            <?php
            if($lang == "lv") {
                $href = "/";
            }else{
                $href =  "/".__('words.lang');
            }
            ?>
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <div class="head-div"{{--style="height: 100px;"--}}>

                    <ul class="navbar-right list-inline" id="lang-bar">
                        <!-- Authentication Links -->
                        {{--<ul id="langs">--}}
                        <?php

                        $data = DB::table('data')->where('id', $rec->data_id)->first();
                        $a = 'words.l'.$data->name;
                        $lat = Lang::get('words.l'.$data->name,[],'lv');
                        if($data->name == 'rental'){
                            $lat = "/";
                        }else{
                            $lat = '/lv/'.$lat;
                        }
                        $eng = Lang::get('words.l'.$data->name,[],'en');
                        $rus = Lang::get('words.l'.$data->name,[],'ru');
                        ?>

                        <li class="first {{__('words.lang') == 'lv' ?'active':''}}"><a href="{{url($lat)}}">LV</a></li>
                        <li class="{{__('words.lang') == 'en' ?'active':''}}"><a href="{{url('/en/'.$eng)}}">EN</a></li>
                        <li class="last {{__('words.lang') == 'ru' ?'active':''}}"><a href="{{url('/ru/'.$rus)}}">RU</a></li>
                        {{--</ul>--}}

                        @if (Auth::guest())
                            {{--<li><a href="{{ route('login') }}">Login</a></li>--}}
                            {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
                        @else
                            <li>
                                <a href="{{url('/admin')}}">Admin panel</a>
                            </li>
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


                <!-- Left Side Of Navbar -->
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
            {{--<ul id="langs">--}}
            {{--<li class="first {{__('words.lang') == 'lv' ?'active':''}}"><a href="{{url('/lv/')}}">LV</a></li>--}}
            {{--<li class="{{__('words.lang') == 'en' ?'active':''}}"><a href="{{url('/en/')}}">EN</a></li>--}}
            {{--<li class="last {{__('words.lang') == 'ru' ?'active':''}}"><a href="{{url('/ru/')}}">RU</a></li>--}}
            {{--</ul>--}}
            <!-- Right Side Of Navbar -->
            </div>
            </div>
            </div>
        </div>
    </nav>


            @yield('content')


</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>--}}
<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
