<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\GeneratesUuid;

class Adresses extends Model
{
    use SoftDeletes, GeneratesUuid;

    protected $table = "adresses";
    protected $dates = ['dob'];
    protected $fillable = [
        'uuid',
        'name',
        'number',
        'district',
        'zipcode',
        'complement',
        'city',
        'state',
    ];
}
