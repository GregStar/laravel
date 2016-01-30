@extends('app')

@section('content')
    <section class="secondstep main_wrapper">
        <h3>Schritt 2:</h3>
        <h4>Wählen Sie Ihren Tisch</h4>
        <div class="restaurant_floor">
            <ul class="top_row_tables">
                <li class="table reservated_table" data="20"><span class=" icon-table_2pax"></span></li>
                <li class="table reservated_table" data="21"><span class="icon-table_2pax "></span></li>
                <li class="table reservated_table" data="41"><span class=" icon-table_4pax"></span></li>
                <li class="table reservated_table" data="61"><span class=" icon-table_6pax"></span></li>
                <li class="table reservated_table" data="22"><span class=" icon-table_2pax"></span></li>
                <li class="table reservated_table" data="42"><span class=" icon-table_4pax"></span></li>
                <li class="table reservated_table" data="23"><span class=" icon-table_2pax"></span></li>
                <li class="table reservated_table" data="62"><span class=" icon-table_6pax"></span></li>
                <li class="table reservated_table" data="24"><span class=" icon-table_2pax"></span></li>
                <li class="table reservated_table" data="25"><span class=" icon-table_2pax"></span></li>
                <li class="table reservated_table" data="26"><span class=" icon-table_2pax"></span></li>
                <li class="table reservated_table" data="43"><span class=" icon-table_4pax"></span></li>
                <li class="table reservated_table" data="27"><span class=" icon-table_2pax"></span></li>
                <li class="table reservated_table" data="81"><span class=" icon-table_8pax"></span></li>
                <li class="table reservated_table" data="44"><span class=" icon-table_4pax"></span></li>
                <li class="table reservated_table" data="82"><span class=" icon-table_8pax"></span></li>
                <li class="table reservated_table" data="28"><span class=" icon-table_2pax"></span></li>
            </ul>
        </div>
        <div class="entrance"></div>

        {!! Form::open(array('name'=>'f-reservation_table', 'url' => 'reservation/table')) !!}

        <div class="selectfield">
            {!! Form::label('f-reservation_table', 'Tisch wählen:')  !!}
            {!! Form::select('f-reservation_table',  array($result))  !!}
        </div>

            {!! Form::submit('Tisch wählen', array('name' => 'table', 'class' => 'btn btn_form', )) !!}
            {!! Form::close() !!}

    </section>
@stop