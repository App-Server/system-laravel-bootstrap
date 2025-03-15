<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerModels;
use CustomerTable;

class CustomerList extends Controller
{
    public function index()
    {
        $customerTable = CustomerModels::paginate(2);
        return view('customer-list.index', compact('customerTable'));
    }
}
