<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\GeneratesUuid;

class Status extends Model
{
    use SoftDeletes, GeneratesUuid;

    protected $table = "status";
    protected $dates = ['dob'];
    protected $fillable = [
        'uuid',
        'name',
    ];
}
