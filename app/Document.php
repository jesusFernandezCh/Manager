<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'document_type_id', 'account_id', 'operation_id', 'file'
    ];

    /**
     * Get the account for the blog document_type.
     */
    public function documentTypes()
    {
        return $this->belongsToMany('App\Document_type', 'documents_meta_types');
    }
    /**
     * Get the account for the blog accounts.
     */
    public function accounts()
    {
        return $this->belongsTo('App\Account', 'account_id');
    }
    public function operations()
    {
        return $this->belongsTo('App\Operation', 'operation_id');
    }

    /**
     * Get the account for the blog operations.
     */
/*    public function operations()
    {
        return $this->belongsTo('App\operation', 'operation_id');
    }*/
}
