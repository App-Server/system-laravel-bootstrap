<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateStockEntry;
use App\Models\EnterpriseModels;
use App\Models\StockEntryModels;
use Illuminate\Http\Request;
use App\Models\RegisterProductModels;

class StockEntry extends Controller
{
    public function index()
    {
        $stockentrytable = StockEntryModels::all();
        $productregistration = RegisterProductModels::all();
        return view('stock-entry.index', compact('stockentrytable', 'productregistration'));
    }

    public function store(StoreUpdateStockEntry $request)
    {
        $data = $request->all();
        $stockentrytable = StockEntryModels::create($data);
        session()->flash('success', 'Stock Entry registered successfully!');
        return redirect()->route('stock-entry.index');
    }
}
