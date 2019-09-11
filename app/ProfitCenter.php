<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfitCenter extends Model
{
	public $timestamps = false;
	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'code', 'status',
    ];

    /**
     * Get the user that owns the ProfitCenter.
     */
    public function user()
    {
        return $this->hasMany('App\User');
    }
}

