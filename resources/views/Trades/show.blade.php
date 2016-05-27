@extends('layouts.app')

@section('content')
    <div class="row" id="trades_hero">
        <div class="col-md-12 ">
            <img src="{{$trades->image}}">
        </div>
    </div>
<div class="container">
    <div class="row">

            <div class="col-xs-12 col-sm-6 col-md-4">
                
                        <h3>{{$trades->trade}}</h3>
            </div>
    </div>
</div>
@endsection