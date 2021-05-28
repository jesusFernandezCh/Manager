<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Caffeinated\Shinobi\Concerns\HasRolesAndPermissions;
use Illuminate\Support\Facades\App;

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
        'name','email','password','estatus'
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
     * [empleado relación 1:N]
     * @return  [type]  [return description]
     */
    public function empleado()
    {
        return $this->belongsTo('App\models\Empleado','id');
    }

    // /**
    //  * Get the profitCenter for the blog user.
    //  */
    // public function profitCenters()
    // {
    //     return $this->belongsTo('App\ProfitCenter', 'profitcenter_id');
    // }

    // /**
    //  * Get the user that owns the operation.
    //  */
    // public function operation()
    // {
    //     return $this->hasMany('App\Operation');
    // }

}
