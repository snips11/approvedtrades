@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="container">
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
    
@endsection