<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Order;

use App\Models\CustomerMeasurement;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $clients = Client::count();
         $customer_measurement = CustomerMeasurement::all();
         $orders = Order::all();

        return view('dashboard.index',compact('clients','customer_measurement','orders'));
    }
}
