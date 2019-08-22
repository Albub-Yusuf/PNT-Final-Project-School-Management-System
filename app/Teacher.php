<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use SoftDeletes;
    protected $fillable = [

        'code',
        'name',
        'bs_major',
        'bs_academy',
        'bs_result',
        'conducting_subject',
        'phone',
        'email',
        'password',
        'present_address',
        'permanent_address',
        'join_date',
        'teacher_image'

    ];
}
