<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FreightRate extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'forwarder',
        'log_unit',
        'pol',
        'pod',
        'line',
        'currency',
        'basic_freight',
        'baf',
        'adds_on',
        'freight_all_in',
        'transit_time',
        'days_free_plug',
        'days_free_storage',
        'days_free_dem',
        'valid_until',
        'route',
        'rate_sumary',
    ];

    /**
    * Get the user that owns the Account.
    */
    public function Account()
    {
       return $this->belongsTo('App\Account', 'forwarder');
    }
    /**
    * Get the user that owns the Logunit.
    */
    public function LogUnit()
    {
       return $this->belongsTo('App\Logunit', 'log_unit');
    }
    /**
    * Get the user that owns the Ports
    */
    public function Pol()
    {
       return $this->belongsTo('App\Port', 'pol');
    }
     /**
    * Get the user that owns the Ports
    */
    public function Pod()
    {
       return $this->belongsTo('App\Port', 'pod');
    }
     /**
    * Get the user that owns the Ports
    */
    public function Line()
    {
       return $this->belongsTo('App\FreightLine', 'line');
    }
   
    public function scopeFreightRates()
    {
        return DB::table('freight_rates')
            ->join('accounts', 'accounts.id', '=', 'freight_rates.forwarder')
            ->join('freight_lines', 'freight_lines.id', '=', 'freight_rates.line')
            ->select(DB::raw("CONCAT(accounts.name,'-',freight_lines.shipping_line) AS name"),'freight_rates.id')
            ->pluck('name','id')
            ->prepend(__('Selected...'), '');
    }
}
