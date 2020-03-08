<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orders extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql';
    protected $table = 'orders';
    protected $fillable = [
        'cart_id',
        'unique_code',
    ];

    public function cart()
    {
        return $this->hasMany('App\Carts', 'cart_id', 'id');
    }
}
