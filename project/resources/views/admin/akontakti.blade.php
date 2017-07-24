@extends('layouts.appadmin')

@section('content')
<?php
    $recLv = DB::table('data_lang')->where('lang', 'lv')->where('link','kontakti')->first();
    $recEn = DB::table('data_lang')->where('lang', 'en')->where('link','contacts')->first();
    $recRu = DB::table('data_lang')->where('lang', 'ru')->where('link','kontakty')->first();
?>

    <div class="col-md-10 col-md-offset-1">

        <div class="panel panel-default">

            <div class="panel-body">
                {{--<div id="exTab3" class="container">--}}
                    <ul  class="nav nav-pills">
                        <li class="active">
                            <a  href="#1b" data-toggle="tab">Lv</a>
                        </li>
                        <li>
                            <a href="#2b" data-toggle="tab">En</a>
                        </li>
                        <li>
                            <a href="#3b" data-toggle="tab">Ru</a>
                        </li>
                    </ul>
<form action="/admin/kontakti/save" method="post">
    {{ csrf_field() }}
                    <div class="tab-content clearfix">
                        <div class="tab-pane active" id="1b">
                            <br/>
                            <div class="form-group">
                                <label for="InputTitleLv">Title</label>
                                <input type="text" class="form-control" id="InputTitleLv" name="InputTitleLv" value="{{ $recLv->title }}" aria-describedby="h1HelpLv" placeholder="">
                                <small id="h1HelpLv" class="form-text text-muted">Title Tag.</small>
                            </div>
                            <div class="form-group">
                                <label for="InputMetaDescriptionLv">Meta Description</label>
                                <input type="text" class="form-control" id="InputMetaDescriptionLv"  name="InputMetaDescriptionLv" value="{{ $recLv->meta }}" aria-describedby="mdHelpLv" placeholder="">
                                <small id="mdHelpLv" class="form-text text-muted">MetaDescription.</small>
                            </div>
                            <div class="form-group">
                                <label for="InputH1Lv">H1</label>
                                <input type="text" class="form-control" id="InputH1Lv" name="InputH1Lv" value="{{ $recLv->h1 }}" aria-describedby="h1HelpLv" placeholder="">
                                <small id="h1HelpLv" class="form-text text-muted">H1 virsraksts.</small>
                            </div>
                            <hr/>
                            <div class="form-group">
                                <label for="InputBodyLv">Rekvizīti</label>
                                <textarea type="text" class="form-control" name="InputBodyLv" id="InputBodyLv" aria-describedby="h1Help" placeholder="">{{ $recLv->body }}</textarea>
                                {{--<small id="h1Help" class="form-text text-muted">H1 virsraksts.</small>--}}
                            </div>

                        </div>
                        <div class="tab-pane" id="2b">
                            <br/>
                            <div class="form-group">
                                <label for="InputTitleEn">Title</label>
                                <input type="text" class="form-control" id="InputTitleEn" name="InputTitleEn" value="{{ $recEn->title }}" aria-describedby="h1HelpEn" placeholder="">
                                <small id="h1HelpEn" class="form-text text-muted">Title Tag.</small>
                            </div>
                            <div class="form-group">
                                <label for="InputMetaDescriptionEn">Meta Description</label>
                                <input type="text" class="form-control" id="InputMetaDescriptionEn" name="InputMetaDescriptionEn" value="{{ $recEn->meta }}" aria-describedby="mdHelpEn" placeholder="">
                                <small id="mdHelpEn" class="form-text text-muted">MetaDescription.</small>
                            </div>
                            <div class="form-group">
                                <label for="InputH1En">H1</label>
                                <input type="text" class="form-control" id="InputH1En" name="InputH1En" value="{{ $recEn->h1 }}" aria-describedby="h1HelpEn" placeholder="">
                                <small id="h1HelpEn" class="form-text text-muted">H1 virsraksts.</small>
                            </div>
                            <hr/>
                            <div class="form-group">
                                <label for="InputBodyEn">Rekvizīti</label>
                                <textarea type="text" class="form-control" name="InputBodyEn" id="InputBodyLv" aria-describedby="h1Help" placeholder="">{{ $recEn->body }}</textarea>
                                {{--<small id="h1Help" class="form-text text-muted">H1 virsraksts.</small>--}}
                            </div>
                        </div>
                        <div class="tab-pane" id="3b">
                            <br/>
                            <div class="form-group">
                                <label for="InputTitleRu">Title</label>
                                <input type="text" class="form-control" id="InputTitleRu" name="InputTitleRu" value="{{ $recRu->title }}" aria-describedby="h1HelpRu" placeholder="">
                                <small id="h1HelpRu" class="form-text text-muted">Title Tag.</small>
                            </div>
                            <div class="form-group">
                                <label for="InputMetaDescriptionRu">Meta Description</label>
                                <input type="text" class="form-control" id="InputMetaDescriptionRu" name="InputMetaDescriptionRu" value="{{ $recRu->meta }}" aria-describedby="mdHelpRu" placeholder="">
                                <small id="mdHelpRu" class="form-text text-muted">MetaDescription.</small>
                            </div>
                            <div class="form-group">
                                <label for="InputH1Ru">H1</label>
                                <input type="text" class="form-control" id="InputH1Ru" name="InputH1Ru" value="{{ $recRu->h1 }}" aria-describedby="h1HelpEn" placeholder="">
                                <small id="h1HelpRu" class="form-text text-muted">H1 virsraksts.</small>
                            </div>
                            <hr/>
                            <div class="form-group">
                                <label for="InputBodyRu">Rekvizīti</label>
                                <textarea type="text" class="form-control" name="InputBodyRu" id="InputBodyLv" aria-describedby="h1Help" placeholder="">{{ $recRu->body }}</textarea>
                                {{--<small id="h1Help" class="form-text text-muted">H1 virsraksts.</small>--}}
                            </div>
                        </div>
                    </div>
            <br/>
                    <div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
</form>
                {{--</div>--}}
{{--                {{ $recLv->body }}--}}
            </div>
        </div>
    </div>


@endsection
