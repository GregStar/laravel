<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'rememberToken',
        'date',
        'time',
        'pax',
        'name',
        'email',
        'table',
        'message',
        'newsletter',
        'agb'
    ];

}
