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

    public function show($id)
    {
        if (!$registerProducts = RegisterProductModels::find($id))
        return redirect()->route(('register-product.index'));
        return view('register-product.details', compact('registerProducts'));
    }

    public function store(StoreUpdateRegisterProduct $request)
    {
        $data = $request->all();
        $registerProduct = RegisterProductModels::create($data);
        session()->flash('success', 'Product registered successfully!');
        return redirect()->route('register-product.index');
    }

    public function edit($id)
    {
        if (!$registerProducts = RegisterProductModels::find($id))
            return redirect()->route('register-product.edit');
            $registerproductstable = RegisterProductModels::all();
        return view('register-product.edit', compact('registerProducts', 'registerproductstable'));
    }

    public function update(StoreUpdateRegisterProduct $request, $id)
    {
        // Find the service order by ID
        if (!$registerProducts = RegisterProductModels::find($id)) {
            session()->flash('error', 'Update Product not found!');
            return redirect()->route('register-product.index');
        }
        
        // Validate the form data
        $validatedData = $request->validated();

        // Update the service order with the validated data
        $registerProducts->update($validatedData);

        session()->flash('success', 'Update Product successfully!');
        return redirect()->route('register-product.index');
    }
}
