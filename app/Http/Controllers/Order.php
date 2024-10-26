<?php

namespace App\Http\Controllers;
use App\Models\OrderModels;
use App\Http\Requests\StoreUpdateOrder;
use Illuminate\Http\Request;
use Ordertable;
use App\Models\Comment;
use App\Models\RegisterProductModels;
use App\Models\User;

class Order extends Controller
{
    public function index()
    {
        $orderstable = OrderModels::paginate(50);
        $productregistration = RegisterProductModels::all();
        $users = User::all();
        return view('product_request.index', compact('orderstable', 'productregistration', 'users'));
    }

    public function create()
    {
        $productregistration = RegisterProductModels::all();
        return view('product_request.create', compact('productregistration'));
    }

    public function store(StoreUpdateOrder $request)
    {
        $data = $request->all();
        $ordertable = OrderModels::create($data);
        session()->flash('success', 'Order registered successfully!');
        return redirect()->route('product_request.index');
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
            return redirect()->route('product_request.index');
        }

        // Get the latest comment for the order
        $ordercomments = Comment::latest()->first();

        // Pass the necessary data to the view
        return view('product_request.details', compact('ordertable', 'ordercomments'));
    }

}
