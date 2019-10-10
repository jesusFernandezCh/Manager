<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocsInstruction extends Model
{
    protected $fillable = [
        'id',
        'account_id',
        'cnee',
        'preshipmentinspection',
        'agency',
        'shipper',
        'bnl_ntfly',
        'bl_cnee',
        'certs_cnee',
        'invoice',
        'co_forma',
        'packing_list',
        'hc',
        'halai',
        'haccp',
        'legalization',
        'quality_certificate',
        'exports_declaration',
        'waver_besc',
        'no_dioxyn',
        'lab_analysis',
        'no_radiation',
        'aditional_requirements'
    ];

     /**
    * Get the user that owns the Account.
    */
    public function account()
    {
        return $this->belongsTo('App\Account', 'account_id');
    }
}