<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transactions extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql';
    protected $table = 'transactions';
    protected $fillable = [
        'order_id',
        'user_id',
        'total_qty',
        'total_amount',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function order()
    {
        return $this->hasOne('App\Orders', 'order_id', 'id');
    }
}
