<?php

namespace App\Models;

use Dyrynda\Database\Support\GeneratesUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Companies extends Model
{
    use SoftDeletes, GeneratesUuid;

    protected $table = "companies";
    protected $fillable = [
        'uuid',
        'code',
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
        'user_id',
        'date_cancell'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($query) {
            $query->code = substr(uniqid(rand()), 0, 6);
        });
    }

    public function status()
    {
        return $this->belongsTo(\App\Models\Status::class, 'status_id')->withTrashed();
    }
}
