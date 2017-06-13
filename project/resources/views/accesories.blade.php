@extends('layouts.apps')

@section('content')
    <div class="panel-">
        <div class="panel-heading">
           <h1>{{$rec->h1}}</h1>
        </div>

        <div class="panel-body">
            {{ $rec->body }}
        </div>
    </div>
@endsection
