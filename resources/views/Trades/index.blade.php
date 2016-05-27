@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="row" id="trades_title">
        <div class="col-md-offset-3 col-md-6 ">
            <h3>Choose a trade</h3>
        </div>
    </div>
<div class="container">
    <div class="row">
        @foreach ($trades as $trade)
        <a href="{{ route ('trades.show', $trade->trade)}}">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="panel panel-default" id="home_select">
                    <div class="panel-body" id="trade_icons">
                        <i class="fa fa-rocket" aria-hidden="true"></i>
                    </div>
                    <div class="panel-footer">
                        {{$trade->trade}}
                    </div>
                </div>
            </div>
        </a>    
        @endforeach
    </div>
</div>
@endsection