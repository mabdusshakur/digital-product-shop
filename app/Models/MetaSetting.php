<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetaSetting extends Model
{
    use HasFactory;
    protected $fillable = ['meta_title', 'meta_description', 'meta_keywords', 'meta_author'];
}
