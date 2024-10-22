<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerModels;

class CustomerSearch extends Controller
{
    public function index()
    {
        return view('customer-search.index');
    }

    public function search(Request $request)
    {
        // Get the search input (CPF or CNPJ)
        $taxpayerIdentificationNumber = $request->input('taxpayer_identification_number');

        // Query the customer by the 'taxpayer_identification_number'
        $customer = CustomerModels::where('taxpayer_identification_number', $taxpayerIdentificationNumber)->first();

        // Return the search result to the view
        return view('customer-search.index', ['customer' => $customer]);
    }
}
