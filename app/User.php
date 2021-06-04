<?php

namespace App;

use App\Models\Empleado;
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
    public function Empleado()
    {
        return $this->belongsTo(Empleado::class,'empleado');
    }

    
    // /**
    //  * Get the user that owns the operation.
    //  */
    // public function operation()
    // {
    //     return $this->hasMany('App\Operation');
    // }

}
