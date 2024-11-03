<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisterProductModels;

class ProductOutput extends Controller
{
    public function index()
    {
        $registerProducts = RegisterProductModels::all();
        return view('product-output.index', compact('registerProducts'));
    }
}
