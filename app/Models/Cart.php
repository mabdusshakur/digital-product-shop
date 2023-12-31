<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable=['product_id','user_id','subscription_id','quantity'];

    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function subscription(){
        return $this->belongsTo(Subscription::class);
    }
}
