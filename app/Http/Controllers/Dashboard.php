<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CustomerModels;
use App\Models\OrderModels;
use App\Models\ServiceOrderModels;
use Carbon\Carbon;

class Dashboard extends Controller
{
    public function index()
    {
        $customerCount = CustomerModels::count();
        $usersCount = User::count();
        $serviceOrderCount = ServiceOrderModels::count();
        $order = OrderModels::count();

        // Get daily customer registration data for the last 30 days
        $dailyCustomerHistory = CustomerModels::selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->where('created_at', '>=', Carbon::now()->subDays(30))
            ->get();

        return view('dashboard.index', compact('customerCount', 'usersCount', 'serviceOrderCount', 'order', 'dailyCustomerHistory'));
    }
}
