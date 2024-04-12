<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Client;
use App\Models\Measurement;
use App\Models\CategoryMeasurement;
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
        $categoryMeasurements = CategoryMeasurement::where('category_id','1')->get();
       

        return view ('customer_measurement.add',compact('clients','categories','categoryMeasurements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
       {
    
        $measurement_ids =  $request->measurement_id;
        foreach($measurement_ids as $measurement_id => $measurement_value)
{
        $customer_measurement = new CustomerMeasurement;
        $customer_measurement->categories_id = $request->categories_id;
        $customer_measurement->clients_id = $request->clients_id;
        $customer_measurement->measurements_id = $measurement_id;
        $customer_measurement->measurements_value = $measurement_value;

        $customer_measurement->save();
}
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
    public function edit($id)
    {
        $customer_measurement = CustomerMeasurement::findOrFail($id);
        $clients = Client::all(); 
        $categories = Categorie::all();

        return view('customer_measurement.manage', compact('customer_measurement', 'clients', 'categories'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'clients_id' => 'required',
            'status' => 'required',
            'categories_id' => 'required',
            // Add more validation rules as needed
        ]);

        // Find the customer_measurement instance by its ID
        $customer_measurement = CustomerMeasurement::findOrFail($id);

        // Update the attributes of the customer_measurement instance
        $customer_measurement->clients_id = $request->input('clients_id');
        $customer_measurement->status = $request->input('status');
        $customer_measurement->categories_id = $request->input('categories_id');
        // Update more attributes as needed

        // Save the changes to the database
        $customer_measurement->save();

        // Redirect back to the index page or any other appropriate route
        return redirect()->route('customer_measurement.index')->with('success', 'Measurement updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomerMeasurement $customerMeasurement)
    {
        $customerMeasurement->delete();
        return redirect()->route('customer_measurement.index');
    }
    public function category()
    {
     return $categories = Categorie::with('clients','measurement');
    }
}
