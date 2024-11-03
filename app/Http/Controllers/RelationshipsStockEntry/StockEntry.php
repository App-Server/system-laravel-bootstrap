<?php

namespace App\Http\Controllers\RelationshipsStockEntry;

use App\Http\Controllers\Controller;
use App\Models\RegisterProductModels;
use Illuminate\Http\Request;
use App\Models\StockEntryComment;
use App\http\Requests\StoreStockEntryComment;

class StockEntry extends Controller
{
    protected $comment;
    protected $productregistration;

    // Inject both Comment and OrderModels
    public function __construct(StockEntryComment $comment, RegisterProductModels $productregistration)
    {
        $this->comment = $comment;
        $this->productregistration = $productregistration;  
    }

    public function index($productregistrationId)
    {
        // Find the product registration by its ID
        if (!$productregistration = $this->productregistration->find($productregistrationId)) {
            return redirect()->back();
        }

        // Retrieve comments related to this product registration
        $comments = $productregistration->comments()->get();

        // Calculate the total quantity
        $totalQuantity = $comments->sum('quantity');

        // Calculate the total cost
        $totalCost = $comments->reduce(function ($carry, $comment) {
            return $carry + ($comment->quantity * $comment->purchase_cost);
        }, 0);

        // Calculate the average cost per item
        $averageCost = $totalQuantity > 0 ? $totalCost / $totalQuantity : 0;

        return view('register-product.stock-entry.index', compact('comments', 'productregistration', 'totalQuantity', 'totalCost', 'averageCost'));
    }

    public function store(Request $request, $productregistrationId)
    {
        if (!$productregistration = $this->productregistration->find($productregistrationId)) {
            return redirect()->back();
        }
        $productregistration->comments()->create($request->all());
        session()->flash('success', 'Stock entry registered successfully!');
        return redirect()->route('stock-entry.index', $productregistration->id);
    }
}
