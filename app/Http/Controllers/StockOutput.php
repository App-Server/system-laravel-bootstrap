<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateStockOutput;
use App\Models\StockOutputModels;
use Illuminate\Http\Request;
use StockOutputTable;
use App\Models\User;
use App\Models\RegisterProductModels;

class StockOutput extends Controller
{
    public function index()
    {
        $stockoutputtable = StockOutputModels::all();
        $productregistration = RegisterProductModels::all();
        $users = User::all();
        return view('stock-output.index', compact('stockoutputtable', 'users', 'productregistration'));
    }

    public function store(StoreUpdateStockOutput $request)
    {
        $data = $request->all();
        $stockoutputtable = StockOutputModels::create($data);
        session()->flash('success', 'Stock Output registered successfully!');
        return redirect()->route('stock-output.index');
    }

    public function show($id)
    {
        if (!$stockoutputtable = StockOutputModels::find($id))
        return redirect()->route(('stock-output.index'));
        return view('stock-output.details', compact('stockoutputtable'));
    }
}
