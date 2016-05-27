@extends('layouts.app')

@section('content')
<!--header image-->
<div id="hero">
    <div class="row" id="slide">
        <div class="col-md-offset-3 col-md-6" id="slide_text">
            {!! Form::open(array('id' => 'form_hero', 'class'=>'form')) !!}
            {{ Form::label('firstname', 'Trade')}}
    {{ Form::text('firstname', null, array('class' => 'form-control', 'required' => '','maxlength'=>'255'))}}
    {{ Form::label('surname', 'Location')}}
    {{ Form::text('surname', null, array('class' => 'form-control', 'required' => '','maxlength'=>'255'))}}
    {{ Form::label('surname', 'Contact Number')}}
    {{ Form::text('surname', null, array('class' => 'form-control', 'required' => '','maxlength'=>'255'))}}
    {{ Form::submit('FIND A TRADER', array('class' => 'btn', 'id' => 'create_btn',
    'style' => 'width:100%;   
    margin-top: 20px;
    border-radius: 2px;
    background-color: #2D353D;
    color:white;'))}}
{!! Form::close() !!}
        </div>      
    </div>
</div>
<!--header text-->
    <div class="row" id="header_text">
        <div class="col-md-offset-3 col-md-6 ">
            <h2>Find your approved tradesperson</h2>
        </div>
    </div>
    <!--about-->
    <div class="container">
    <div class="row" id="icon_title">
        <div class="col-md-6 ">
            <h3>About content</h3>
        </div>
        <div class="col-md-6 ">
            <h3>BOX</h3>
        </div>
    </div>
    <!--icon boxes-->
    <div class="row" id="icon_title">
        <div class="col-md-offset-3 col-md-6 ">
            <h3>Let us find the best person for the job</h3>
        </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="panel panel-default" id="home_select">
                <div class="panel-body" id="trade_icons">
                    <i class="fa fa-rocket" aria-hidden="true"></i>
                </div>
                <div class="panel-footer">
                    TRADE
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="panel panel-default" id="home_select">
                <div class="panel-body" id="trade_icons">
                    <i class="fa fa-ship" aria-hidden="true"></i>
                </div>
                <div class="panel-footer">
                    TRADE
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="panel panel-default" id="home_select">
                <div class="panel-body" id="trade_icons">
                    <i class="fa fa-shield" aria-hidden="true"></i>
                </div>
                <div class="panel-footer">
                    TRADE
                </div>
            </div>
        </div>
        <!--bottom 3 icon boxes-->
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="panel panel-default" id="home_select">
                <div class="panel-body" id="trade_icons">
                    <i class="fa fa-wifi" aria-hidden="true"></i>
                </div>
                <div class="panel-footer">
                    TRADE
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="panel panel-default" id="home_select">
                <div class="panel-body" id="trade_icons">
                    <i class="fa fa-sun-o" aria-hidden="true"></i>
                </div>
                <div class="panel-footer">
                    TRADE
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="panel panel-default" id="home_select">
                <div class="panel-body" id="trade_icons">
                    <i class="fa fa-tag" aria-hidden="true"></i>
                </div>
                <div class="panel-footer">
                    TRADE
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
