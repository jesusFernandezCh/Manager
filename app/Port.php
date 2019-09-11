<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Port extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name', 'country_id','description'
    ];

	
	/**
     * Get the account for the blog country.
     */
    public function country()
    {
        return $this->belongsTo('App\Country', 'country_id');
    }
}
