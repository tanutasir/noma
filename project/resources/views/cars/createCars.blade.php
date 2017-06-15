@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin</div>
                    Create
                <div class="panel-body">
                    <input type="file" name="file_upload" id="file_upload" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
