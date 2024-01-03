<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = ['phone_number', 'address', 'web_name', 'logo', 'favicon', 'email', 'iframe_map_link', 'delivery_policy', 'return_policy', 'privacy_policy', 'custom_script_element', 'custom_head_element', 'currency_unicode'];
}
