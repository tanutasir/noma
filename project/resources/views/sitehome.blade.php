@extends('layouts.apps')

@section('content')
    <div class="visible-xs col-xs-12">
        <div class="panel panel-default">
        <div class="panel-heading">
            <h1>{{$rec->h1}}</h1>
        </div>

        <div class="panel-body">
            <?php
            $cars = DB::table('cars')->orderBy('sid', 'asc')->get();

            ?>
            @foreach($cars as $car)
                <div class="node row">
                    <div class="imgdiv" align="center">
                        <img with="255" height="170" src="{{$car->img}}">
                        <br/>
                        <a href="{{__('words.Photo galery')}}">( {{__('words.Photo galery')}} )</a>
                    </div>
                    <div class="tabdiv">
                        <h2 class="h2">{{$car->nr}}</h2>
                        <?php
                        $tbls = DB::table('cars_tbl')->where('cars_id',$car->id)->get();
                        ?>
                        <table class="tbl">
                            <tr>
                                <th>Dienas</th>
                                <th>Maksa</th>
                            </tr>
                            @foreach($tbls as $tbl)
                                <tr>
                                    <td>{{$tbl->dienas}}</td>
                                    <td>&euro;{{$tbl->cena}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="aprdiv">
                        <div>{{$car->name}}</div>
                        <div>
                            <div>{{__('words.Equipment')}}</div>
                            <ul id="ul11">
                                <li>9 sēdvietas</li>
                                <li>6 ātrumi</li>
                                <li>2.0TDi (140Zs)</li>
                                <li>dīzeļdegviela</li>
                                <li>klimatkontrole</li>
                                <li>elektriskie logu pacēlāji</li>
                                <li>elekt.reg.spoguļi</li>
                            </ul>
                        </div>
                        <div style="float: left;">
                            Informējam, ka šajā tīmekļa vietnē tiek izmantotas sīkdatnes (angļu val.

                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
    </div>
    <div class="visible-sm col-sm-10  col-sm-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>{{$rec->h1}}</h1>
            </div>

            <div class="panel-body">
                <?php
                $cars = DB::table('cars')->orderBy('sid', 'asc')->get();

                ?>
                @foreach($cars as $car)
                    <div class="node row">
                        <div class="imgdiv" align="center">
                            <img with="255" height="170" src="{{$car->img}}">
                            <br/>
                            <a href="{{__('words.Photo galery')}}">( {{__('words.Photo galery')}} )</a>
                        </div>
                        <div class="tabdiv">
                            <h2 class="h2">{{$car->nr}}</h2>
                            <?php
                            $tbls = DB::table('cars_tbl')->where('cars_id',$car->id)->get();
                            ?>
                            <table class="tbl">
                                <tr>
                                    <th>Dienas</th>
                                    <th>Maksa</th>
                                </tr>
                                @foreach($tbls as $tbl)
                                    <tr>
                                        <td>{{$tbl->dienas}}</td>
                                        <td>&euro;{{$tbl->cena}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <div class="aprdiv">
                            <div>{{$car->name}}</div>
                            <div>
                                <div>{{__('words.Equipment')}}</div>
                                <ul id="ul">
                                    <li>9 sēdvietas</li>
                                    <li>6 ātrumi</li>
                                    <li>2.0TDi (140Zs)</li>
                                    <li>dīzeļdegviela</li>
                                    <li>klimatkontrole</li>
                                    <li>elektriskie logu pacēlāji</li>
                                    <li>elekt.reg.spoguļi</li>
                                </ul>
                            </div>
                            <div style="float: left;">
                                Informējam, ka šajā tīmekļa vietnē tiek izmantotas sīkdatnes (angļu val.

                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="visible-md col-md-12">
       <div class="panel panel-default">
            <div class="panel-heading">
                <h1>{{$rec->h1}}</h1>
            </div>

            <div class="panel-body">
                <?php
                $cars = DB::table('cars')->orderBy('sid', 'asc')->get();

                ?>
                @foreach($cars as $car)
                    <div class="node row">
                        <div class="imgdiv" align="center">
                            <img with="255" height="170" src="{{$car->img}}">
                            <br/>
                            <a href="{{__('words.Photo galery')}}">( {{__('words.Photo galery')}} )</a>
                        </div>
                        <div class="tabdiv">
                            <h2 class="h2">{{$car->nr}}</h2>
                            <?php
                            $tbls = DB::table('cars_tbl')->where('cars_id',$car->id)->get();
                            ?>
                            <table class="tbl">
                                <tr>
                                    <th>Dienas</th>
                                    <th>Maksa</th>
                                </tr>
                                @foreach($tbls as $tbl)
                                    <tr>
                                        <td>{{$tbl->dienas}}</td>
                                        <td>&euro;{{$tbl->cena}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <div class="aprdiv">
                            <div>{{$car->name}}</div>
                            <div>
                                <div>{{__('words.Equipment')}}</div>
                                <ul id="ul">
                                    <li>9 sēdvietas</li>
                                    <li>6 ātrumi</li>
                                    <li>2.0TDi (140Zs)</li>
                                    <li>dīzeļdegviela</li>
                                    <li>klimatkontrole</li>
                                    <li>elektriskie logu pacēlāji</li>
                                    <li>elekt.reg.spoguļi</li>
                                </ul>
                            </div>
                            <div style="float: left;">
                                Informējam, ka šajā tīmekļa vietnē tiek izmantotas sīkdatnes (angļu val.

                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="visible-lg col-lg-10 col-lg-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>{{$rec->h1}}</h1>
            </div>

            <div class="panel-body">
                <?php
                $cars = DB::table('cars')->orderBy('sid', 'asc')->get();

                ?>
                @foreach($cars as $car)
                    <div class="node row">
                        <div class="imgdiv" align="center">
                            <img with="255" height="170" src="{{$car->img}}">
                            <br/>
                            <a href="{{__('words.Photo galery')}}">( {{__('words.Photo galery')}} )</a>
                        </div>
                        <div class="tabdiv">
                            <h2 class="h2">{{$car->nr}}</h2>
                            <?php
                            $tbls = DB::table('cars_tbl')->where('cars_id',$car->id)->get();
                            ?>
                            <table class="tbl">
                                <tr>
                                    <th>Dienas</th>
                                    <th>Maksa</th>
                                </tr>
                                @foreach($tbls as $tbl)
                                    <tr>
                                        <td>{{$tbl->dienas}}</td>
                                        <td>&euro;{{$tbl->cena}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <div class="aprdiv">
                            <div>{{$car->name}}</div>
                            <div>
                                <div>{{__('words.Equipment')}}</div>
                                <ul id="ul">
                                    <li>9 sēdvietas</li>
                                    <li>6 ātrumi</li>
                                    <li>2.0TDi (140Zs)</li>
                                    <li>dīzeļdegviela</li>
                                    <li>klimatkontrole</li>
                                    <li>elektriskie logu pacēlāji</li>
                                    <li>elekt.reg.spoguļi</li>
                                </ul>
                            </div>
                            <div style="float: left;">
                                Informējam, ka šajā tīmekļa vietnē tiek izmantotas sīkdatnes (angļu val.

                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
