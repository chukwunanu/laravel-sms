<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
        'schoolUId',
        'school_name',
        'address',
        'city',
        'state',
        'po_box',
        'email',
        'phone',
        'principal_name',
        'vice_principal_name'
    ];
}
