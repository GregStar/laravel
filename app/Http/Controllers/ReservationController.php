<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\Session;
use App\Tables;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Symfony\Component\Console\Helper\Table;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('reservation/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeSession(Request $request)
    {
        $request->session()->put('date', $request['f-reservation_date']);
        $request->session()->put('time', $request['f-reservation_time']);
        $request->session()->put('pax', $request['f-reservation_persons']);
        $request->session()->put('name', $request['f-user_name']);
        $request->session()->put('email', $request['f-user_email']);

        $tableNumbersTaken = array();

        $data = $request->session()->all();
        $pax = $data['pax'];
        $date = $data['date'];

        $tables = Tables::where("pax", "$pax")->get();
        foreach($tables as $table) {
            $tableNumbersFree = explode(',', $table->table_nrs);
        }

        $reservations = Reservation::where('pax', "$pax")->where('date', "$date")->get();
        foreach($reservations as $reservation) {
            array_push($tableNumbersTaken,  $reservation->table);
        }
        $tableReserve = (array_diff($tableNumbersFree, $tableNumbersTaken));
        $request->session()->put('freetable', $tableReserve);

        $data = $request->session()->all() ;
        $items = array();
        foreach ($data as $key => $value){
            $items =  $value;
        }
        $result = array_combine($items,$items);

        return \View::make('reservation/table', compact('result', $result));
    }

    public function storeSessionTable(Request $request)
    {

        $request->session()->put('table', $request['f-reservation_table']);


        return view ('reservation/confirm');


    }
    public function storeSessionConfirm(Request $request)
    {
        $request->session()->put('message', $request['f-user_message']);
        $request->session()->put('newsletter', $request['f-newsletter']);
        $request->session()->put('agb', $request['f-agb']);

        $data = $request->session()->all();

        $reservation = new Reservation;
        $reservation -> remember_token = $data['_token'];
        $reservation -> date = $data['date'];
        $reservation -> time = $data['time'];
        $reservation -> pax = $data['pax'];
        $reservation -> name = $data['name'];
        $reservation -> email = $data['email'];
        $reservation -> table = $data['table'];
        $reservation -> message = $data['message'];
        $reservation -> newsletter = $data['newsletter'];
        $reservation -> agb = $data['agb'];
        $reservation -> save();
    }
    public function getTables($pax, $date)
    {



    }



    public function table()
    {
        return view('reservation/table');
    }
    public function confirm()
    {
        return view('reservation/confirm');
    }
}
