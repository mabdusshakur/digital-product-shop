<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'regular_price', 'sale_price'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
