@extends('layouts.apps')

@section('content')
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">

            <div class="panel-heading">
                <h1>{!! (isset($rec->h1)) ? htmlspecialchars_decode($rec->h1,ENT_QUOTES)  : "" !!}</h1>
            </div>

            <div class="panel-body">
                {!! (isset($rec->body)) ? htmlspecialchars_decode($rec->body,ENT_QUOTES)  : "" !!}
            </div>
        </div>
    </div>
@endsection
