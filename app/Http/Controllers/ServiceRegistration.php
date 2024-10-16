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

    public function edit($id)
    {
        if (!$serviceregistrationtable = ServiceRegistrationModels::find($id))
            return redirect()->route('service-registration.edit');
        return view('service-registration.edit', compact('serviceregistrationtable'));
    }

    public function update(StoreUpdateServiceRegistration $request, $id)
    {
        // Encontre o post existente pelo ID
        $serviceregistrationtable = ServiceRegistrationModels::find($id);
        
        // Verifique se o post existe
        if (!$serviceregistrationtable) {
            session()->flash('error', 'serviceregistrationtable not found!');
            return redirect()->route('service-registration.index');
        }
        
        // Valide os dados do formulário
        $validatedData = $request->validated();
        
        // Atualize os atributos do post existente com os dados do formulário
        $serviceregistrationtable->update($validatedData);

        session()->flash('success', 'Atualizado com sucesso!');
        return redirect()->route('service-registration.index', $serviceregistrationtable->id);
    }
}
