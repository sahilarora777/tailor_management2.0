<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Category_Measurement;
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
        return view ('category_measurement.index');
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
    $categoryMeasurement = new Category_Measurement();
     $categoryMeasurement->id = $request->id;
     $categoryMeasurement->clients_id = $request->clients_id;
    $categoryMeasurement->save();
    return redirect()->route('category_measurement.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category_Measurement $category_Measurement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category_Measurement $category_Measurement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category_Measurement $category_Measurement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category_Measurement $category_Measurement)
    {
        //
    }
}
