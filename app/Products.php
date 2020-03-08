<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql';
    protected $table = 'products';
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'price',
        'stock',
        'available',
    ];

    public function category()
    {
        return $this->hasOne('App\Categories', 'category_id', 'id');
    }
}
