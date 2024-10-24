<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StockEntryModels;
use App\Models\StockOutputModels;
use App\Models\RegisterProductModels;

class InventoryController extends Controller
{
    public function index()
    {
        // Get products and eager load related stock entries and outputs
        $products = RegisterProductModels::with(['stockEntries', 'stockOutputs'])->paginate(50);

        // Pass products to the view
        return view('inventory.index', compact('products'));
    }
}
