<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    protected $fillable = [

        'sessions',
        'class',
        'roll',
        'name',
        'date',
        'day',
        'month',
        'year',
        'amount',
        'collected_by',
        'status',


    ];
}
