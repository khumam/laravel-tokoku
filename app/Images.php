<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Images extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql';
    protected $table = 'addresses';
    protected $fillable = [
        'product_id',
        'name',
        'url',
    ];

    public function product()
    {
        return $this->belongsTo('App\Products', 'product_id', 'id');
    }
}
