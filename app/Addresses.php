<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Addresses extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql';
    protected $table = 'addresses';
    protected $fillable = [
        'user_id',
        'address'
    ];

    public function user()
    {
        return $this->belongsTo('App/User', 'user_id', 'id');
    }
}
