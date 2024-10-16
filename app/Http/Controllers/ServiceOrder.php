<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateServiceOrder;
use App\Models\ServiceOrderModels;
use App\Models\ServiceRegistrationModels;
use App\Models\CustomerModels;
use Illuminate\Http\Request;

class ServiceOrder extends Controller
{
    public function index()
    {
        $serviceordertable = ServiceOrderModels::all();
        $serviceregistrationtable = ServiceRegistrationModels::all();
        $customerTable = CustomerModels::all();
        return view('service-order.index', compact('serviceordertable', 'serviceregistrationtable', 'customerTable'));
    }

    public function store(StoreUpdateServiceOrder $request)
    {
        $data = $request->all();
        $serviceordertable = ServiceOrderModels::create($data);
        session()->flash('success', 'Service Order registered successfully!');
        return redirect()->route('service-order.index');
    }

    public function show($id)
    {
        if (!$serviceordertable = ServiceOrderModels::find($id))
        return redirect()->route(('service-order.index'));
        return view('service-order.details', compact('serviceordertable'));
    }

    public function edit($id)
    {
        if (!$serviceordertable = ServiceOrderModels::find($id))
            return redirect()->route('service-order.edit');
            $serviceregistrationtable = ServiceRegistrationModels::all();
        return view('service-order.edit', compact('serviceordertable', 'serviceregistrationtable'));
    }

    public function update(StoreUpdateServiceOrder $request, $id)
    {
        // Find the service order by ID
        if (!$serviceOrder = ServiceOrderModels::find($id)) {
            session()->flash('error', 'Service Order not found!');
            return redirect()->route('service-order.index');
        }
        
        // Validate the form data
        $validatedData = $request->validated();

        // Update the service order with the validated data
        $serviceOrder->update($validatedData);

        session()->flash('success', 'Service Order updated successfully!');
        return redirect()->route('service-order.index');
    }

}
