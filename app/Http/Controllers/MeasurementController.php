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
      $measurements = Measurement::with('clients')->paginate(2);
        return view('measurement.index', compact('measurements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::all();
        return view('measurement.add',compact('clients'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $measurement = new Measurement();
        $measurement->date = $request->input('date');
        $measurement->clients_id = $request->input('clients_id');
        $measurement->description = $request->input('description');
        $measurement->shoulder = $request->input('shoulder');
        $measurement->back = $request->input('back');
        $measurement->sleeve = $request->input('sleeve');
        $measurement->lap = $request->input('lap');
        $measurement->collar = $request->input('collar');
        $measurement->chest = $request->input('chest');
        $measurement->armhole = $request->input('armhole');
        $measurement->long = $request->input('long');
        $measurement->neck = $request->input('neck');
        $measurement->waist = $request->input('waist');
        $measurement->bottom = $request->input('bottom');
        $measurement->length = $request->input('length');
        $measurement->top = $request->input('top');
        $measurement->short = $request->input('short');
        $measurement->trouser = $request->input('trouser');
        $measurement->hip = $request->input('hip');
        $measurement->inches = $request->input('inches');
        $measurement->other = $request->input('other');
        $measurement->save();

        return redirect()->route('measurement.index')->with('success', 'measurement store successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Measurement $measurement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Measurement $measurement)
    {

        return view('measurement.manage', compact('measurement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $measurement = Measurement::findOrFail($id);
        $measurement->date = $request->input('date');
        $measurement->clients_id = $request->input('clients_id');
        $measurement->description = $request->input('description');
        $measurement->shoulder = $request->input('shoulder');
        $measurement->back = $request->input('back');
        $measurement->sleeve = $request->input('sleeve');
        $measurement->lap = $request->input('lap');
        $measurement->collar = $request->input('collar');
        $measurement->chest = $request->input('chest');
        $measurement->armhole = $request->input('armhole');
        $measurement->long = $request->input('long');
        $measurement->neck = $request->input('neck');
        $measurement->waist = $request->input('waist');
        $measurement->bottom = $request->input('bottom');
        $measurement->length = $request->input('length');
        $measurement->top = $request->input('top');
        $measurement->short = $request->input('short');
        $measurement->trouser = $request->input('trouser');
        $measurement->hip = $request->input('hip');
        $measurement->inches = $request->input('inches');
        $measurement->other = $request->input('other');
        $measurement->save();

        return redirect()->back()->with('success', 'Measurement updated successfully.');
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
