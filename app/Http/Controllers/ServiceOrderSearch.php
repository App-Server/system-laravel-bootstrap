<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceOrderModels;
use Carbon\Carbon;

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
        $serviceOrders = ServiceOrderModels::whereBetween('date', [$startDate, $endDate])->get();

        // Ensure 'date' is parsed as Carbon before sending to view
        foreach ($serviceOrders as $order) {
            $order->date = Carbon::parse($order->date);
        }

        // Return the search result to the view
        return view('service-order-search.index', ['serviceOrders' => $serviceOrders]);
    }
}
