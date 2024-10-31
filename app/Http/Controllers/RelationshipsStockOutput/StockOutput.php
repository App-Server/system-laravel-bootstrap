<?php

namespace App\Http\Controllers\RelationshipsStockOutput;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StockOutput extends Controller
{
    public function index()
    {
        return view('register-product.stock-output.index');
    }
}
