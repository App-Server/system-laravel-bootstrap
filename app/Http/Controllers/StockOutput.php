<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateStockOutput;
use App\Models\StockOutputModels;
use Illuminate\Http\Request;
use StockOutputTable;

class StockOutput extends Controller
{
    public function index()
    {
        $stockoutputtable = StockOutputModels::all();
        return view('stock-output.index', compact('stockoutputtable'));
    }

    public function store(StoreUpdateStockOutput $request)
    {
        $data = $request->all();
        $stockoutputtable = StockOutputModels::create($data);
        session()->flash('success', 'Stock Output registered successfully!');
        return redirect()->route('stock-output.index');
    }
}
