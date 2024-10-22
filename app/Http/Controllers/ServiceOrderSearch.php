<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceOrderSearch extends Controller
{
    public function index()
    {
        return view('service-order-search.index');
    }
}
