<?php

namespace App\Http\Controllers;
use App\Models\OrderModels;
use App\Http\Requests\StoreUpdateOrder;
use Illuminate\Http\Request;
use Ordertable;
use App\Models\Comment;
use App\Models\RegisterProductModels;

class Order extends Controller
{
    public function index()
    {
        $orderstable = OrderModels::all();
        
        return view('order.index', compact('orderstable'));
    }

    public function create()
    {
        $productregistration = RegisterProductModels::all();
        return view('order.create', compact('productregistration'));
    }

    public function store(StoreUpdateOrder $request)
    {
        $data = $request->all();
        $ordertable = OrderModels::create($data);
        session()->flash('success', 'Order registered successfully!');
        return redirect()->route('order.create');
    }

    // public function show($id)
    // {
    //     if (!$ordertable = OrderModels::find($id));
    //     $ordercomments = Comment::latest()->first();
    //     return redirect()->route('order.index');
    //     return view('order.details', compact('ordertable', 'ordercomments'));
    // }

    public function show($id)
    {
        // Find the order by ID, redirect back if not found
        if (!$ordertable = OrderModels::find($id)) {
            return redirect()->route('order.index');
        }

        // Get the latest comment for the order
        $ordercomments = Comment::latest()->first();

        // Pass the necessary data to the view
        return view('order.details', compact('ordertable', 'ordercomments'));
    }

}
