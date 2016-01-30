@extends('app')

@section('content')
    <section class="thirdstep main_wrapper">

    <h3>Schritt 3:</h3>
    {!! Form::open(array('name'=>'f-reservation_confirm', 'url' => 'reservation/confirm')) !!}

    {!! Form::label('f-user_message', 'Haben Sie einen speziellen Wunsch?')  !!}
    <div class ="textarea">
        {!! Form::textarea('f-user_message', null, array('cols' => '50', 'rows' => '10', 'placeholder' => 'Bitte besorgen Sie einen Strauß rote Rosen')) !!}
    </div>
    <br />
    <div class="checkbox">
        {!! Form::label('f-newsletter', 'Bitte senden sie mir den Gourmetnewsletter')  !!}
        {!! Form::checkbox('f-newsletter')!!}
        <br />
        {!! Form::label('f-agb', "Ich habe die AGB's gelesen",array('class' => 'agbs'))  !!}
        {!! Form::checkbox('f-agb')!!}
        <br />
    </div>
    <div class="btn_reservation reservatiton__btn--wrapper">
        {!! Form::submit('Tisch reservieren', array('name' => 'f-user_reservation', 'class' => 'btn btn_xl submit')) !!}
    </div>
    {!! Form::close() !!}
</section>
@stop