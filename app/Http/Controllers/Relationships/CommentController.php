<?php

namespace App\Http\Controllers\Relationships;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\OrderModels;
use App\Http\Requests\StoreOrderComments;

class CommentController extends Controller
{
    protected $comment;
    protected $order;

    // Inject both Comment and OrderModels
    public function __construct(Comment $comment, OrderModels $order)
    {
        $this->comment = $comment;
        $this->order = $order;  
    }

    public function index($orderId)
    {
        // Find the order by its ID
        if (!$order = $this->order->find($orderId)) {
            return redirect()->back();
        }

        // Retrieve comments related to this order
        $comments = $order->comments()->get();

        return view('product_request.comments.index', compact('comments', 'order'));
    }

    public function store(StoreOrderComments $request, $orderId)
    {
        if (!$order = $this->order->find($orderId)) {
            return redirect()->back();
        }
        $order->comments()->create($request->all());
        session()->flash('success', 'Update Status registered successfully!');
        return redirect()->route('comments.index', $order->id);
    }
}
