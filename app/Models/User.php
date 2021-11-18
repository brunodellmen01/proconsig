<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Dyrynda\Database\Support\GeneratesUuid;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, GeneratesUuid, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'lastname',
        'email',
        'password',
        'role_id',
        'gender',
        'birthday',
        'phone',
        'status_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     * $table->string('document')->nullable()->after('role_id');
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($query) {
            $query->password = bcrypt('123456789');
        });
    }

    public function status()
    {
        return $this->belongsTo(\App\Models\Status::class, 'status_id')->withTrashed();
    }
}
