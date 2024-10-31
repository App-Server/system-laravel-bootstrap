<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceOrderModels;

class WorkOrderList extends Controller
{
    public function index()
    {
        $serviceordertable = ServiceOrderModels::paginate(50);
        return view('work-order-list.index', compact('serviceordertable'));

    }
}
