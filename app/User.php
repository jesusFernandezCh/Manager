<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Caffeinated\Shinobi\Concerns\HasRolesAndPermissions;

class User extends Authenticatable
{
    use Notifiable;
    use HasRolesAndPermissions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname', 'email', 'password', 'profitcenter_id', 'image', 'status', 'phone1', 'phone2', 'cell1', 'cell2'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token', 'password'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the profitCenter for the blog user.
     */
    public function profitCenters()
    {
        return $this->belongsTo('App\ProfitCenter', 'profitcenter_id');
    }

    /**
     * Get the user that owns the operation.
     */
    public function operation()
    {
        return $this->hasMany('App\Operation');
    }

}
