@extends('layouts.apps')

@section('content')
    <div class="panel-">
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


       {{--     <div class="node row">
                <div class="imgdiv col-md-4">
                    <img src="/img/aa3200.jpg"/>
                </div>
                <div class="tabdiv col-md-2">
                    <table class="tbl">
                        <tr>
                            <th>Dienas</th>
                            <th>Maksa</th>
                        </tr>
                        <tr>
                            <td>1-2</td>
                            <td>€ 70</td>
                        </tr>
                        <tr>
                            <td>3-7</td>
                            <td>€ 65</td>
                        </tr>
                        <tr>
                            <td>8-30</td>
                            <td>€ 60</td>
                        </tr>
                    </table>
                </div>
                <div class="aprdiv">
                    <ul id="ul">
                        <li>9 sēdvietas</li>
                        <li>6 ātrumi</li>
                        <li>2.0TDi (140Zs)</li>
                        <li>dīzeļdegviela</li>
                        <li>klimatkontrole</li>
                        <li>elektriskie logu pacēlāji</li>
                        <li>elekt.reg.spoguļi</li>
                        <li>miglas lukturi</li>
                        <li>kruīzkontrole</li>
                    </ul>
                </div>
            </div>
            <div class="node row">

            </div>
            <div class="node row">

            </div>--}}
        </div>
    </div>
@endsection
