<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductGen extends Model
{
    protected $fillable = [
        'product_line_id','gen','basic_spec','cold_chain'
    ];

    public function Products()
    {
        return $this->belongsTo('App\ProductLine', 'product_line_id');
    }
}
