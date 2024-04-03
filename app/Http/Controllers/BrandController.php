<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search_text = $request->search_text;

        // Start with the query builder instance
        $query = brand::query();

        if ($search_text) {
            $query->where('name', 'like', '%' . $search_text . '%')
                ->orWhere('status', 'like', '%' . $search_text . '%')

                ->get();
        }

        // Paginate the query results
        $brands = $query->paginate(5);

        // Append the query parameters to the pagination links
        $brands->appends(request()->query());

        return view('brand.index', compact('brands'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('brand.add');

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
        Brand::create($request->post());

        return redirect()->route('brand.index')->with('success brand updated successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(brand $brand)
    {

        return view('brand.manage', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, brand $brand)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required',

        ]);
        $brand->fill($request->post())->save();
        return redirect()->route('brand.index')->with('success brand updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(brand $brand)
    {
        $brand->delete();
        return redirect()->route('brand.index');
    }
}
