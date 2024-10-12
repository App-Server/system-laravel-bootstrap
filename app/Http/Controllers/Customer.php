<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateCustomer;
use App\Models\CustomerModels;
use CustomerTable;

class Customer extends Controller
{
    public function index()
    {
        $customerTable = CustomerModels::all();
        return view('customer.index', compact('customerTable'));
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(StoreUpdateCustomer $request)
    {
        $data = $request->all();
        $customerTable = CustomerModels::create($data);
        session()->flash('success', 'Customer registered successfully!');
        return redirect()->route('customer.index');
    }

    public function show($id)
    {
        if (!$customer = CustomerModels::find($id))
        return redirect()->route(('customer.index'));
        return view('customer.details', compact('customer'));
    }

    public function edit($id)
    {
        if (!$customer = CustomerModels::find($id))
            return redirect()->route('customer.edit');
        return view('customer.edit', compact('customer'));
    }

    public function update(StoreUpdateCustomer $request, $id)
    {
        // Encontre o post existente pelo ID
        $customer = CustomerModels::find($id);
        
        // Verifique se o post existe
        if (!$customer) {
            session()->flash('error', 'customer not found!');
            return redirect()->route('customer.index');
        }
        
        // Valide os dados do formulário
        $validatedData = $request->validated();
        
        // Atualize os atributos do post existente com os dados do formulário
        $customer->update($validatedData);

        session()->flash('success', 'Atualizado com sucesso!');
        return redirect()->route('customer.index', $customer->id);
    }
}
