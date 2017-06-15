@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="container">
                            <ul class="nav nav-tabs">
                                <li><a href="#">{{ __('words.rental') }}</a></li>
                                <li><a href="#">{{ __('words.transfers') }}</a></li>
                                <li><a href="#">{{ __('words.accessories') }}</a></li>
                                <li><a href="#">{{ __('words.about') }}</a></li>
                                <li><a href="#">{{ __('words.contacts') }}</a></li>
                            </ul>
                            {{--<br>--}}
                            {{--<p><strong>Note:</strong> This example shows how to create a basic navigation tab. It is not toggleable/dynamic yet (you can't click on the links to display different content)- see the last example in the Bootstrap Tabs and Pills Tutorial to find out how this can be done.</p>--}}
                        </div>
                    </div>

                    <div class="panel-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae consequat mauris, efficitur blandit felis. Proin sit amet ultricies dui. Nam fermentum elementum nibh, vel venenatis est dapibus ornare. Pellentesque turpis nunc, interdum ac facilisis scelerisque, rhoncus sed neque. Proin eget luctus ex. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus fermentum tellus velit, eget euismod dolor mollis a. Duis sed elit non lacus tempus imperdiet. Fusce venenatis leo placerat, elementum arcu mollis, posuere est. Morbi non gravida lorem, at gravida ligula. Curabitur vulputate, erat in maximus congue, arcu odio luctus sapien, in mattis mi justo quis libero.

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
