<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/uploadify/uploadify.css') }}"  rel="stylesheet">
    <link href="{{ asset('css/admin_style.css') }}" rel="stylesheet">

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
                <a class="navbar-brand" href="{{ url('/') }}">
                    ADMIN PANEL
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;<li class="">
                        <a href="{{url('/admin/cars')}}">Automašīnu noma</a>
                    </li>
                    <li class="">
                        <a href="{{url('/admin/cars')}}">Cars</a>
                    </li>
                    <li class="">
                        <a href="{{url('/admin/cars')}}">Cars</a>
                    </li>
                    <li class="">
                        <a href="{{url('/admin/cars')}}">Cars</a>
                    </li>

                    {{--<li class="{{$rec->link == __('words.ltransfers')?'active':''}}">--}}
                        {{--<a href="/{{__('words.lang')}}/{{__('words.ltransfers')}}">{{__('words.transfers')}}</a>--}}
                    {{--</li>--}}
                    {{--<li class="{{$rec->link == __('words.laccessories')?'active':''}}">--}}
                        {{--<a href="/{{__('words.lang')}}/{{__('words.laccessories')}}">{{__('words.accessories')}}</a>--}}
                    {{--</li>--}}
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

    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
<script src="{{ asset('libs/uploadify/jquery.uploadify.min.js') }}?<?php echo @date("U")?>"  type="text/javascript"></script>
<script src="{{ asset('libs/sortable/jquery-sortable.js') }}?<?php echo @date("U")?>"  type="text/javascript"></script>

<script src="{{ asset('js/admin_script.js') }}"  type="text/javascript></script>
<script type="text/javascript">
    $(function() {
        setTimeout(function(){
            $('#file_upload').uploadify({
                'formData'      : {'_token' : '{{ csrf_token() }}'},
                'swf'      : 'http://noma/libs/uploadify/uploadify.swf',
                'uploader' : 'http://noma/admin/uploadcar',
                'onUploadSuccess' : function(file, data, response) {
                    alert('The file was saved to: ' + data);
                },
                'cancelImg' : 'http://noma/libs/uploadify/uploadify-cancel.png'

            });
        },10);
    });
</script>
</body>
</html>
