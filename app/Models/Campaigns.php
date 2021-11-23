<?php

namespace App\Models;

use Dyrynda\Database\Support\GeneratesUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Campaigns extends Model
{
    use SoftDeletes, GeneratesUuid;

    protected $table = "campaigns";
    protected $fillable = [
        'uuid',
        'code',
        'name',
        'company_id',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($query) {
            $query->code = substr(uniqid(rand()), 0, 6);
        });
    }

    public function companies()
    {
        return $this->belongsTo(\App\Models\Companies::class, 'company_id')->withTrashed();
    }
}

