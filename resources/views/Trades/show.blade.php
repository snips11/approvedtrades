@extends('layouts.app')

@section('content')
    <div class="row" id="trades_hero">
        <div class="col-md-12 ">
            <img src="{{$trades->image}}">
        </div>
    </div>
    <div class="trade_title_background">   
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h3>{{$trades->trade}}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="col-xs-12 col-sm-8 col-md-8" id="trade_content">
                <h4>{{$trades->title}}</h4>
                    <p>{{$trades->des}}</p>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4" id="trade_contact">
                        {!! Form::open(array('id' => 'form_hero', 'class'=>'form')) !!}
                            {{ Form::label('firstname', 'Name')}}
                            {{ Form::text('firstname', null, array('class' => 'form-control', 'required' => '','maxlength'=>'255'))}}
                            {{ Form::label('surname', 'Contact Number')}}
                            {{ Form::text('surname', null, array('class' => 'form-control', 'required' => '','maxlength'=>'255'))}}
                            {{ Form::label('surname', 'Message')}}
                            {{ Form::textarea('surname', null, array('class' => 'form-control', 'required' => '','maxlength'=>'255'))}}
                            {{ Form::submit('FIND A TRADER', array('class' => 'btn', 'id' => 'create_btn_trade'))}}
                        {!! Form::close() !!}  
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-12" id="trade_test">
                <h3>Testimonials</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum iaculis maximus mauris a tempus. 
                Morbi convallis eu erat non viverra. Quisque sodales quam at velit mollis, et tristique diam tincidunt.</p>
            </div>
        </div>    
    </div>
<div id="credits">
<div class="row">
        <div class="col-sm-offset-3 col-sm-6 ">
                <img src="/images/gas.png">
                <img src="/images/gas.png">
                <img src="/images/gas.png">
            </div>
</div>
</div>                    
@endsection