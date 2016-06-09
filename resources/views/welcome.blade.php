@extends('layouts.app')

@section('content')
<!--header image-->

<div class="row" id="hero">
    <div id="sign_up"><button type="button" class="btn btn-secondary"><i class="fa fa-users" aria-hidden="true"></i> TRADER AREA</button></div>
    <div class="container">
        <div class="col-md-6 ">
            <div class="panel panel-default">
                <div class="panel-body">A Basic Panel</div>
            </div>
        </div>
</div>    
    <!--<div class="row" id="slide">
        <div class="col-md-offset-3 col-md-6" id="slide_text">
            {!! Form::open(array('id' => 'form_hero', 'class'=>'form')) !!}
            {{ Form::label('firstname', 'Trade')}}
    {{ Form::text('firstname', null, array('class' => 'form-control', 'required' => '','maxlength'=>'255'))}}
    {{ Form::label('surname', 'Location')}}
    {{ Form::text('surname', null, array('class' => 'form-control', 'required' => '','maxlength'=>'255'))}}
    {{ Form::label('surname', 'Contact Number')}}
    {{ Form::text('surname', null, array('class' => 'form-control', 'required' => '','maxlength'=>'255'))}}
    {{ Form::submit('FIND A TRADER', array('class' => 'btn', 'id' => 'create_btn_home'))}}
{!! Form::close() !!}
        </div>      
    </div>-->
</div>
<!--header text-->
    <div class="row" id="header_text">
        <div class="col-md-offset-3 col-md-6 ">
            <h2>Find your approved tradesperson</h2>
        </div>
    </div>
    <!--about-->
    <div class="background_color">
    <div class="container" style="margin-bottom:60px;"> 
    <div class="row" id="about">
        <div class="col-md-8 " id="about_box">
            <h3>We go further than just supplying you a tradesperson</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum iaculis maximus mauris a tempus. 
                Morbi convallis eu erat non viverra. Quisque sodales quam at velit mollis, et tristique diam tincidunt. 
                In auctor fringilla enim, vitae ultrices urna laoreet sed. Integer ultrices congue sem. 
                Quisque cursus malesuada purus, ut mattis mi hendrerit ut. Nullam metus orci, fringilla vitae vulputate ut, 
                sagittis at nibh.pis tempor, a posuere lorem condimentum.</p>
        </div>
        <div class="col-md-4 " id="sell_box">
            {!! Form::open(array('id' => 'form_hero', 'class'=>'form')) !!}
                            {{ Form::label('firstname', 'Name', array('id' => 'home_label'))}}
                            {{ Form::text('firstname', null, array('class' => 'form-control', 'required' => '','maxlength'=>'255'))}}
                            {{ Form::label('surname', 'Contact Number', array('id' => 'home_label'))}}
                            {{ Form::text('surname', null, array('class' => 'form-control', 'required' => '','maxlength'=>'255'))}}
                            {{ Form::label('surname', 'Message' , array('id' => 'home_label'))}}
                            {{ Form::textarea('surname', null, array('class' => 'form-control', 'required' => '','maxlength'=>'255'))}}
                            {{ Form::submit('FIND A TRADER', array('class' => 'btn', 'id' => 'create_btn_trade'))}}
                        {!! Form::close() !!}
        </div>
    </div>
    </div>
    </div>
    <!--icon boxes-->
<div class="container"> 
    <div class="row" id="icon_title">
        <div class="col-md-offset-3 col-md-6 ">
            <h3>Let us find the best person for the job</h3>
        </div>
    </div>
    <div class="container">
    <div class="row">
        <a href="/trades/Electricians">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="panel panel-default" id="home_select">
                <div class="panel-body" id="trade_icons">
                    <img src="http://localhost:8000/images/electrician.png"></i>
                </div>
                <div class="panel-footer">
                    ELECTRICIAN
                </div>
            </div>
        </div>
        </a>
        <a href="/trades/Builders">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="panel panel-default" id="home_select">
                <div class="panel-body" id="trade_icons">
                    <img src="http://localhost:8000/images/builder.png"></i>
                </div>
                <div class="panel-footer">
                    BUILDER
                </div>
            </div>
        </div>
        </a>
        <a href="/trades/Carpenters">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="panel panel-default" id="home_select">
                <div class="panel-body" id="trade_icons">
                    <img src="http://localhost:8000/images/carpenter.png"></i>
                </div>
                <div class="panel-footer">
                    CARPENTER
                </div>
            </div>
        </div>
        </a>
        <!--bottom 3 icon boxes-->
        <a href="/trades/Painters">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="panel panel-default" id="home_select">
                <div class="panel-body" id="trade_icons">
                    <img src="http://localhost:8000/images/painter.png"></i>
                </div>
                <div class="panel-footer">
                    PAINTER
                </div>
            </div>
        </div>
        </a>
        <a href="/trades/Plumbers">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="panel panel-default" id="home_select">
                <div class="panel-body" id="trade_icons">
                    <img src="http://localhost:8000/images/plumber.png"></i>
                </div>
                <div class="panel-footer">
                    PLUMBER
                </div>
            </div>
        </div>
        </a>
        <a href="/trades/Roofers">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="panel panel-default" id="home_select">
                <div class="panel-body" id="trade_icons">
                    <img src="http://localhost:8000/images/roofer.png"></i>
                </div>
                <div class="panel-footer">
                    ROOFER
                </div>
            </div>
        </div>
        </a>
    </div>
</div>
@endsection
