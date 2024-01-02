<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        return response()->view('sitemap', ['products' => Product::orderBy('updated_at', 'desc')->get()])->header('Content-Type', 'text/xml');
    }
}
