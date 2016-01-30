@extends('app')

@section('content')
    <section class="header_img header_reservation_img">
    </section>
    <section class="textbox reservation">
        <h2>Reservieren Sie ihren Tisch gleich hier!</h2>
    </section>
    <section class="main_wrapper firststep clearfix">
        <h3>Schritt 1:</h3>
        <h4>Wann möchten sie zu uns kommen?</h4>
        <div class="teaser_img_reservation pic grow"></div>
        {!! Form::open(array('name'=>'f-reservation_form', 'url' => 'reservation')) !!}
        <ul class="reservation_form">
            <li>
                {!! Form::label('f-reservation_date', 'Datum:')  !!}
                <br />
                {!! Form::text('f-reservation_date',null,array('id' => "mydate", "gldp-id" => "mydate")) !!}
                <div gldp-el="mydate"style="width:400px; height:300px; position:absolute; top:70px; left:100px;"></div>

            </li>
            <li>
                {!! Form::label('f-reservation_time', 'Zeit:')  !!}
                <br />
                   {!! Form::select('f-reservation_time', array('18:00' => '18:00','18:15' => '18:15','18:30' => '18:30', '18:45' => '18:45', '19:00' => '19:00', '19:15' => '19:15', '19:30' => '19:30','19:45' => '19:45','20:00' => '20:00','20:15' => '20:15', '20:30' => '20:30','20:45' => '20:45','21:00' => '21:00'))  !!}
            </li>
            <li>
                {!! Form::label('f-reservation_persons', 'Personennzahl:')  !!}
                <br />
                {!! Form::selectRange('f-reservation_persons', 1, 8)  !!}
            </li>
            <li>
                {!! Form::label('f-user_name', 'Name:')  !!}
                <br />
                {!! Form::text('f-user_name',null,array('placeholder' => 'Mustermann')) !!}
            </li>
            <li>
                {!! Form::label('f-user_email', 'E-mail:')  !!}
                <br />
                {!! Form::email('f-user_email', null, array('placeholder' => 'mustermann@a1.net')) !!}
            </li>
            <li> {!! Form::submit('Tisch finden', array('name' => 'free_table', 'class' => 'btn btn_form', 'action'=>'select_table')) !!}
            </li>
        </ul>
        {!! Form::close() !!}
    </section>
@stop