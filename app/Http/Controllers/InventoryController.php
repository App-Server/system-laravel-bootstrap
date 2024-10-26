<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisterProductModels;
use App\Models\StockEntryModels;
use App\Models\StockOutputModels;
use Illuminate\Support\Facades\DB;

class InventoryController extends Controller
{
    public function index()
    {
        // Query all products with pagination
        $products = RegisterProductModels::paginate(50);

        // Query total stock entry and output for each product by SKU
        $stockData = DB::table('product_registration as p')
            ->leftJoin('stock_entry as e', 'p.sku', '=', 'e.sku')
            ->leftJoin('stock_output as o', 'p.sku', '=', 'o.sku')
            ->select(
                'p.sku',
                'p.product_name',
                DB::raw('COALESCE(SUM(e.quantity), 0) as total_entry'),
                DB::raw('COALESCE(SUM(o.quantity), 0) as total_output'),
                DB::raw('COALESCE(SUM(e.quantity), 0) - COALESCE(SUM(o.quantity), 0) as balance')
            )
            ->groupBy('p.sku', 'p.product_name')
            ->get();

        return view('inventory.index', compact('products', 'stockData'));
    }
}
