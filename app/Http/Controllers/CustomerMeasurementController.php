<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Client;
use App\Models\Measurement;
use App\Models\CustomerMeasurement;
use Illuminate\Http\Request;

class CustomerMeasurementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       $customer_measurements = CustomerMeasurement::all();
        return view ('customer_measurement.index',compact('customer_measurements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::all();
        $categories = Categorie::all();
        $measurements = Measurement::all();
        return view ('customer_measurement.add',compact('clients','categories','measurements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'clients_id' => 'required',
            'categories_id' => 'required',
            // 'measurements_id' => 'required',
            'payment' => 'required',
            'date' => 'required',
            'status' => 'required',

        ]);
        CustomerMeasurement::create($request->post());
        return redirect()->route('customer_measurement.index')->with('success category updated successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(CustomerMeasurement $customerMeasurement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CustomerMeasurement $customerMeasurement)
    {
        return view('customer_measurement.manage',compact('customerMeasurement'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CustomerMeasurement $customerMeasurement)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required',

        ]);
        $customerMeasurement::create($request->post())->save();
        return redirect()->route('customer_measurement.index')->with('success category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomerMeasurement $customerMeasurement)
    {
        $customerMeasurement->delete();
        return redirect()->route('customer_measurement.index');
    }
}
