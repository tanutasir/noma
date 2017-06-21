@extends('layouts.apps')

@section('content')
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
               <h1>{{$rec->h1}}</h1>
            </div>

            <div class="panel-body">
                {{ $rec->body }}
            </div>
        </div>
    </div>
@endsection
