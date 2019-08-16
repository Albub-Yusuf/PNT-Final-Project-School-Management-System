<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;
    protected $fillable = [

        'name',
        'father_name',
        'mother_name',
        'phone',
        'email',
        'permanent_address',
        'present_address',
        'day','month','year',
        'session',
        'birth_certificate_number',
        'gender',
        'class',
        'department',
        'student_image',
        'student_signature',
        'guardian_image',
        'father_occupation'

    ];
}
