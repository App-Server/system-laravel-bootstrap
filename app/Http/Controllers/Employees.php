<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateEmployees;
use App\Models\EmployeesModels;
use Illuminate\Http\Request;

class Employees extends Controller
{
    public function index()
    {
        $employees_table = EmployeesModels::all();
        return view('employees.index', compact('employees_table'));
    }

    public function store(StoreUpdateEmployees $request)
    {
        $data = $request->all();
        $employees_table = EmployeesModels::create($data);
        session()->flash('success', 'Employees registered successfully!');
        return redirect()->route('employees.index');
    }
}
