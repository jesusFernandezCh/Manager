<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class ShipDetails extends Model
{
    public $timestamps  = false;

    protected $fillable = [
        'operation_id',
        'vessel',
        'shipping_date',
        'eta',
        'update_eta_on',
        'bl',
        'container',
        'seals',
        'date_insured',
        'total_pcs',
        'total_quantity',
        'total_gw',
        'invoice_supplier',
        'invoice_ppl',
        'invoice_forwarder',
    ];

    /**
    * Get the user that owns the Operation.
    */
    public function operation()
    {
       return $this->belongsTo('App\Operation', 'operation_id');
    }

    public function scopeProducts()
    {
        return DB::table('product_gens')
            ->join('product_lines', 'product_lines.id', '=', 'product_gens.product_line_id')
            ->select(DB::raw("CONCAT(product_lines.line,'-',product_gens.gen,'-',product_gens.basic_spec,'-',product_gens.cold_chain) AS name"),'product_gens.id')
            ->pluck('name','id');
    }
}
