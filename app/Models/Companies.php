<?php

namespace App\Models;

use Dyrynda\Database\Support\GeneratesUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Companies extends Model
{
    use SoftDeletes, GeneratesUuid;

    protected $fillable = [
        'uuid',
        'fantasy_name',
        'company_name',
        'document',
        'responsible_name',
        'email',
        'status_id',
        'phone',
        'address_id',
        'total_users',
        'total_users_fgts',
        'total_users_siap',
        'total_users_military',
        'license_end',
        'coefficient_id',
        'date_cancell'
    ];
}
