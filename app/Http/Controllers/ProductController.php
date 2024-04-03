<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Categorie;
use App\Models\product;
use http\Client\Response;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $products = Product::with('category','brand')->paginate('10');


        $search_text = $request->search_text;
        if($search_text)
        {
            $products = Product::where('name','like','%'.$search_text.'%')
                ->orWhere('rate', 'like', '%' . $search_text . '%')
                ->orWhere('quantity', 'like', '%' . $search_text . '%')
                ->orWhereHas('category', function (Builder $query) use ($request) {
                    $query->where('name', 'like', '%' . $request->search_text. '%');
                })
                ->orWhereHas('brand', function (Builder $query) use ($request) {
                    $query->where('name', 'like', '%' . $request->search_text. '%');
                })
                ->paginate(5);
        }

        $products->appends(request()->query());

        return view('product.index',compact('products'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::with('category','brand')->get();

        $categories = Categorie::all();
        $brands = Brand::all();

        return view('product.add',compact('products','brands','categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required', // Make sure 'image' field is validated
            'quantity' => 'required',
            'brands_id' => 'required',
            'categories_id' => 'required',
            'rate' => 'required',
            'status' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = $profileImage; // Add 'image' field to $input array
        }

        Product::create($input); // Use $input array instead of $request->post()

        return redirect()->route('product.index')->with('success', 'Product updated successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        $categories = Categorie::all();
        $brands = Brand::all();

        return view('product.manage', compact('product','brands','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'quantity' => 'required',
            'brands_id' => 'required',
            'categories_id' => 'required',
            'rate' => 'required',
            'status' => 'required',

        ]);
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }

        $product->update($input);
        return redirect()->route('product.index')->with('success product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }
}
