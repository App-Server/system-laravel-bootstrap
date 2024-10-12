<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateServiceRegistration;
use App\Models\ServiceRegistrationModels;
use Illuminate\Http\Request;

class ServiceRegistration extends Controller
{
    public function index()
    {
        $serviceregistrationtable = ServiceRegistrationModels::all();
        return view('service-registration.index', compact('serviceregistrationtable'));
    }

    public function store(StoreUpdateServiceRegistration $request)
    {
        $data = $request->all();
        $serviceregistrationtable = ServiceRegistrationModels::create($data);
        session()->flash('success', 'Service Registration successfully!');
        return redirect()->route('service-registration.index');
    }
}
