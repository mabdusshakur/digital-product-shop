<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subscription;
class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'slug', 'category_id', 'subscription_id', 'stock', 'status', 'flash_sale', 'view_count', 'sold_count'];

    public function image()
    {
        return $this->hasMany(Image::class);
    }
    public function subscription()
    {
        return $this->hasMany(Subscription::class);
    }
}
