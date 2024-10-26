<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStockEntry;
use App\Http\Requests\UpdateStockEntry;
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

    public function store(StoreStockEntry $request)
    {
        $data = $request->all();
        $stockentrytable = StockEntryModels::create($data);
        session()->flash('success', 'Stock Entry registered successfully!');
        return redirect()->route('stock-entry.index');
    }

    public function show($id)
    {
        if (!$stockentrytable = StockEntryModels::find($id))
        return redirect()->route(('stock-entry.index'));
        return view('stock-entry.details', compact('stockentrytable'));
    }

    public function edit($id)
    {
        $stockentrytable = StockEntryModels::find($id);
        if (!$stockentrytable) {
            session()->flash('error', 'Estoque não encontrado!');
            return redirect()->route('stock-entry.index'); // Redirect to index if not found
        }

        return view('stock-entry.edit', compact('stockentrytable'));
    }

    public function update(UpdateStockEntry $request, $id)
    {
        // Find the stock entry by ID
        $stockentrytable = StockEntryModels::find($id);

        if (!$stockentrytable) {
            session()->flash('error', 'Estoque não encontrado!');
            return redirect()->route('stock-entry.index');
        }

        // Update the stock entry with validated data
        $validatedData = $request->validated();
        $stockentrytable->update($validatedData);

        session()->flash('success', 'Atualizado com sucesso!');
        return redirect()->route('stock-entry.index');
    }

}
