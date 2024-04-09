<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Category_Measurement;
use App\Models\CategoryMeasurement;
use App\Models\Client;
use App\Models\Measurement;
use Illuminate\Http\Request;

class CategoryMeasurementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $categories = Categorie::all(); 
        $category_measurements=CategoryMeasurement::with('category','measurement')->get();
        return view ('category_measurement.index',compact('category_measurements','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $clients = Client::all();
          $categories = Categorie::all();
         $measurements = Measurement::all();

        return view ('category_measurement.add',compact('clients','categories','measurements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $measurement_ids =  $request->measurements_id;
       foreach($measurement_ids as $measurement_id)
       {
    $category_measurements = new CategoryMeasurement();
     $category_measurements->category_id = $request->input('categories_id');
     $category_measurements->measurement_id = $measurement_id;
    $category_measurements->save();
       }
    return redirect()->route('category_measurement.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(CategoryMeasurement $category_Measurement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoryMeasurement $category_measurement)
    {
        
        $clients = Client::all();
        $categories = Categorie::all();
       $measurements = Measurement::all();
        $categoryMeasurements = CategoryMeasurement::where('category_id',$category_measurement->id)->first();
        return view('category_measurement.manage',compact('clients','categories','measurements','categoryMeasurements','category_measurement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CategoryMeasurement $category_Measurement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoryMeasurement $category_Measurement)
    {
        $category_Measurement->delete();
        return redirect()->route('category_measurement.index');

    }
}
