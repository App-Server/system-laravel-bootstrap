<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateServiceOrder;
use App\Models\ServiceOrderModels;
use Illuminate\Http\Request;

class ServiceOrder extends Controller
{
    public function index()
    {
        $serviceordertable = ServiceOrderModels::all();
        return view('service-order.index', compact('serviceordertable'));
    }

    public function store(StoreUpdateServiceOrder $request)
    {
        $data = $request->all();
        $serviceordertable = ServiceOrderModels::create($data);
        session()->flash('success', 'Service Order registered successfully!');
        return redirect()->route('service-order.index');
    }
}
