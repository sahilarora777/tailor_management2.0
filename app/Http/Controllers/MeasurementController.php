<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Client;
use App\Models\Measurement;
use Illuminate\Http\Request;

class MeasurementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $measurements = Measurement::all();
        return view('measurement.index',compact('measurements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Measurement $measurement)
    {
        $clients = Client::all();
        $categories = Categorie::all();
        $previousMeasurement = Measurement::latest()->first();

        return view('measurement.add',compact('clients','categories','measurement','previousMeasurement'));

    }

    /**
     * Store a newly created resource in storage.
     */
  
     public function store(Request $request)
{
    $request->validate([ 
        'date' =>'required',
        'name' =>'required',
        'clients_id' => 'required',
             'categories_id' => 'required',

    ]);
    Measurement::create($request->post());

         return redirect()->route('measurement.index')->with('success', 'Measurement added successfully');
     }
     

    /**
     * Display the specified resource.
     */
    public function show(Measurement $measurement)
    {

        $clients = Client::all();
        $categories = Categorie::all();
        $previousMeasurement = $measurement;
        return view('measurement.view', compact('measurement','clients','categories','previousMeasurement'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Measurement $measurement)
    {
        $clients = Client::all();
        $categories = Categorie::all();

        return view('measurement.manage', compact('measurement','clients','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    
     public function update(Request $request, Measurement $measurement)
     {
         $request->validate([
             'date' =>'required',
             'name' =>'required',
             'clients_id' => 'required',
             'categories_id' => 'required',
 
         ]);
         $measurement->fill($request->post())->save();
         return redirect()->route('measurement.index')->with('success measurement updated successfully');
     }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Measurement $measurement)
    {
        $measurement->delete();
        return redirect()->route('measurement.index');
    }
}
