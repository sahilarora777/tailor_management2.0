<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Categorie;
use App\Models\Measurement;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Start with the query builder instance
         $categories = Categorie::with('measurement')->get();


        return view('category.index', compact('categories'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::all();
        $measurements = Measurement::all();
        return view('category.add',compact('measurements','categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request ,Categorie $category)
   
   {// Validate the request
$request->validate([
    'name' => 'required',
    'status' => 'required',
]);
$category = Categorie::create([
    'name' => $request->input('name'),
    'status' => $request->input('status'),
    'measurements_id' => json_encode($request->input('measurements_id')),
]);

return redirect()->route('category.index')->with('success', 'Category updated successfully');



}

    /**
     * Display the  resource.
     */
    public function show(Categorie $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorie $category)
    {
        $measurements = Measurement::all();

        return view('category.manage', compact('category','measurements'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorie $category)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required',
            'measurements_id' => 'required',

        ]);
        $category->fill($request->post())->save();
        return redirect()->route('category.index')->with('success category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $category)
    {
        $category->delete();
        return redirect()->route('category.index');
    }
    public function stores(Request $request) {
        $category = new Categorie();
        $category->name = $request->input('name');
        $category->save();
    
        return response()->json(['id' => $category->id]);
    }
}
