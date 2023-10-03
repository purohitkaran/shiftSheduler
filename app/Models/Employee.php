<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'empid',
        'empfname',
        'emplname',
        'mobileno',
        'address',
        'province',
        'postalcode',
        'designation',
        'email',
        'password',
        'roles',
    ];
}
