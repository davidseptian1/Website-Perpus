<!-- resources/views/dashboard/charts/user_logins.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>User Login Chart</h1>
                <hr>
                {!! $chart->container() !!}
            </div>
        </div>
    </div>

    {!! $chart->script() !!}
@endsection
<script src="https://code.highcharts.com/highcharts.js"></script>
