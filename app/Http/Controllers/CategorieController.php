<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search_text = $request->search_text;

        // Start with the query builder instance
        $query = Categorie::query();

        if ($search_text) {
            $query->where('name', 'like', '%' . $search_text . '%')
                ->orWhere('status', 'like', '%' . $search_text . '%')

                ->get();
        }

        // Paginate the query results
        $categories = $query->paginate(5);

        // Append the query parameters to the pagination links
        $categories->appends(request()->query());

        return view('category.index', compact('categories'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.add');

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
        Categorie::create($request->post());

        return redirect()->route('category.index')->with('success category updated successfully');

    }

    /**
     * Display the specified resource.
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

        return view('category.manage', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorie $category)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required',

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
}
