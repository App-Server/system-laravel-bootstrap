<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateRegisterProduct;
use App\Models\RegisterProductModels;

class RegisterProduct extends Controller
{
    public function index()
    {
        $registerProducts = RegisterProductModels::all();
        return view('register-product.index', compact('registerProducts'));
    }

    public function create()
    {
        return view('register-product.create');
    }

    public function show($id)
    {
        return view('register-product.details');
    }

    public function store(StoreUpdateRegisterProduct $request)
    {
        $data = $request->all();
        $registerProduct = RegisterProductModels::create($data);
        session()->flash('success', 'Product registered successfully!');
        return redirect()->route('register-product.index');
    }
}
