<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $clients = Client::count();
        return view('dashboard.index',compact('clients'));
    }
}
