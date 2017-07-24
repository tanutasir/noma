@extends('layouts.appp')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1 class="post-title">{{$rec->h1}}</h1>
                        </div>

                        <div class="panel-body">
                            <?php
                                $cars = DB::table('cars')->orderBy('sid', 'asc')->get();
                            ?>
                            @foreach($cars as $car)
                                <div class="node row">
                                    <div class="col-sm-4 col-sm-offset-0 imgdiv" align="center">
                                        <img class="img-responsive" src="{{$car->img}}">
                                        <br/>
                                        <a href="{{__('words.Photo galery')}}">( {{__('words.Photo galery')}} )</a>
                                    </div>
                                <div class="col-sm-8 imgdiv" align="center">
                                    <div class="col-sm-4 imgdiv" align="center">
                                        {{--<img class="" src="{{$car->img}}">--}}
                                        <br/>
                                        <a href="{{__('words.Photo galery')}}">( {{__('words.Photo galery')}} )</a>
                                    </div>
                                    <div class="col-sm-8 imgdiv" align="center">
                                        {{--<img class="img-responsive" src="{{$car->img}}">--}}
                                        <br/>
                                        <a href="{{__('words.Photo galery')}}">( {{__('words.Photo galery')}} )</a>
                                    </div>
                                </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
