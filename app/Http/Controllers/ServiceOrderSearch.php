<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceOrderModels;

class ServiceOrderSearch extends Controller
{
    public function index()
    {
        return view('service-order-search.index');
    }

    public function search(Request $request)
    {
        // Validate the request data
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        // Get the input values
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        // Query the service orders within the date range
        $serviceOrders = ServiceOrderModels::whereBetween('created_at', [$startDate, $endDate])->get();

        // Return the search result to the view
        return view('service-order-search.index', ['serviceOrders' => $serviceOrders]);
    }
}
