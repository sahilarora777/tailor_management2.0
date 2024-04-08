<?php

namespace App\Http\Controllers;

use App\Models\CustomerMeasurement;
use Illuminate\Http\Request;

class CustomerMeasurementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search_text = $request->search_text;

        // Start with the query builder instance
        $query = CustomerMeasurement::query();

        if ($search_text) {
            $query->where('name', 'like', '%' . $search_text . '%')
                ->orWhere('status', 'like', '%' . $search_text . '%')

                ->get();
        }

        // Paginate the query results
        $measurements = $query->paginate(5);

        // Append the query parameters to the pagination links
        $measurements->appends(request()->query());
        return view ('customer_measurement.index',compact('measurements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('customer_measurement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
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
