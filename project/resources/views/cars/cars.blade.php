@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cars</div>

                <div class="span4">
                    <h3>Sortable Rows</h3>
                    <table class="table table-striped table-bordered sorted_table">
                        <thead>
                        <tr>
                            <th>A Column</th>
                            <th>B Column</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>A Item 1</td>
                            <td>B Item 1</td>
                        </tr>
                        <tr>
                            <td>A Item 2</td>
                            <td>B Item 2</td>
                        </tr>
                        <tr>
                            <td>A Item 3</td>
                            <td>B Item 3</td>
                        </tr>
                        <tr>
                            <td>A Item 4</td>
                            <td>B Item 4</td>
                        </tr>
                        <tr>
                            <td>A Item 5</td>
                            <td>B Item 5</td>
                        </tr>
                        <tr>
                            <td>A Item 6</td>
                            <td>B Item 6</td>
                        </tr>
                        </tbody>
                    </table>
                </div>



                <div class="panel-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
