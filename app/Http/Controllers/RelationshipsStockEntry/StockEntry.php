<?php

namespace App\Http\Controllers\RelationshipsStockEntry;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StockEntry extends Controller
{
    public function index()
    {
        return view('register-product.stock-entry.index');
    }
}
