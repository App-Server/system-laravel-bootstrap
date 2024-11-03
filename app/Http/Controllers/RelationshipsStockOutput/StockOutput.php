<?php

namespace App\Http\Controllers\RelationshipsStockOutput;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StockOutputComment;
use App\Models\RegisterProductModels;

class StockOutput extends Controller
{
    protected $commentsoutput;
    protected $productoutput;

    // Inject both Comment and OrderModels
    public function __construct(StockOutputComment $commentsoutput, RegisterProductModels $productoutput)
    {
        $this->commentsoutput = $commentsoutput;
        $this->productoutput = $productoutput;  
    }

    public function index($productoutputId)
    {
        // Find the product registration by its ID
        if (!$productoutput = $this->productoutput->find($productoutputId)) {
            return redirect()->back();
        }

        // Retrieve comments related to this product registration
        $commentsoutput = $productoutput->comments()->get();

        return view('register-product.stock-output.index', compact('commentsoutput', 'productoutput'));
    }

    public function store(Request $request, $productoutputId)
    {
        if (!$productoutput = $this->productoutput->find($productoutputId)) {
            return redirect()->back();
        }
        $productoutput->comments()->create($request->all());
        session()->flash('success', 'Stock output registered successfully!');
        return redirect()->route('stock-output.index', $productoutput->id);
    }
}
