<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carts extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql';
    protected $table = 'carts';
    protected $fillable = [
        'product_id',
        'order_id',
        'user_id',
        'qty',
        'amount'
    ];

    public function product()
    {
        return $this->belongsTo('App\Products', 'product_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function order()
    {
        return $this->belongsTo('App\Orders', 'order_id', 'id');
    }
}
