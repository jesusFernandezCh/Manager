<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner_bank extends Model
{
    protected $fillable = [
        'company_id', 'bank_name','bank_adress','swift_code', 'aba','benefaccount_ibank','acc_currency','beneficiary_name','intermediary_info','curren_account'
    ];

    public function account()
    {
       return $this->belongsTo('App\Account', 'company_id');
    } 

    public function currency()
    {
       return $this->belongsTo('App\Currency', 'acc_currency');
    } 
}
