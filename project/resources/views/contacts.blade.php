@extends('layouts.apps')

@section('content')
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">

            <div class="panel-heading">
                <h1>{{$rec->h1}}</h1>
            </div>

            <div class="panel-body">
                <div class="col-sm-6">
                    <h2>{{__('words.how to find us')}}</h2>
                    {{--<iframe width="100%" height="450"--}}
                            {{--frameborder="0"--}}
                            {{--style="border:0"--}}
                            {{--src="https://www.google.com/maps/embed/v1/place?q=56.941322%2024.291753&key=AIzaSyDbeU9ytoAke4I7-tMMA1WW9o85dQ8VVWM&language={{$lang}}"--}}
                            {{--allowfullscreen>--}}

                    {{--</iframe>--}}
                    <iframe
                            width="100%"
                            height="450"
                            frameborder="0"
                            style="border:0"
                            src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJDbq-fAjN7kYRK0Oa9XJJye0&key=AIzaSyDbeU9ytoAke4I7-tMMA1WW9o85dQ8VVWM&language={{$lang}}"
                            allowfullscreen>
                    </iframe>
                </div>
                <div class="col-sm-6">
                    <h2>{{__('words.contact us')}}</h2>
                    <form>
                        <div class="form-group">
                            {{--<label for="InputName">{{__('words.name')}}</label>--}}
                            <input type="text" class="form-control" id="InputName" aria-describedby="textHelp" placeholder="{{__('words.name')}}">
                        </div>
                        <div class="form-group">
                            {{--<label for="exampleInputEmail1">Email address</label>--}}
                            <input type="email" class="form-control" id="inputEmail1" aria-describedby="emailHelp" placeholder="{{__('words.e-mail')}}">
                            {{--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
                        </div>
                        <div class="form-group">
                            {{--<label for="InputName">{{__('words.name')}}</label>--}}
                            <input type="number" class="form-control" id="InputPhone" aria-describedby="phoneHelp" placeholder="{{__('words.phone')}}">
                        </div>
                        <div class="form-group">
                            {{--<label for="textarea">Example textarea</label>--}}
                            <textarea class="form-control" id="exampleTextarea" rows="4" placeholder="{{__('words.message')}}"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">{{__('words.send')}}</button>
                    </form>
                </div>
                <div class="col-md-12">
                    <h2>Rekvizīti</h2>
                    {!! (isset($rec->body)) ? htmlspecialchars_decode($rec->body,ENT_QUOTES)  : "" !!}
                </div>

            </div>
        </div>
    </div>
@endsection
