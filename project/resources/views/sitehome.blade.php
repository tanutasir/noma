@extends('layouts.apps')

@section('content')
    <div class="panel-">
        <div class="panel-heading">
            <h1>{{$rec->h1}}</h1>
        </div>

        <div class="panel-body">
            <div class="node row">
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

            </div>
        </div>
    </div>
@endsection
