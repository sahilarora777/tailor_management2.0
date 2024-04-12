<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search_text = $request->search_text;


        // Start with the query builder instance
        $query = Client::query();

        if ($search_text) {
            $query->where('name', 'like', '%' . $search_text . '%')
                ->orWhere('gender', 'like', '%' . $search_text . '%')
                ->orWhere('mobile', 'like', '%' . $search_text . '%')
                ->orWhere('reffering', 'like', '%' . $search_text . '%')
                ->orWhere('address', 'like', '%' . $search_text . '%')
                ->get();
        }

        // Paginate the query results
        $clients = $query->paginate(5);

        // Append the query parameters to the pagination links
        $clients->appends(request()->query());

        return view('client.index', compact('clients'));
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client.add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'mobile' => 'required',
            'reffering' => 'required',
            'address' => 'required',
        ]);
        Client::create($request->post());

        return redirect()->route('client.index')->with('success client updated successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {

        return view('client.manage', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'mobile' => 'required',
            'reffering' => 'required',
            'address' => 'required',
        ]);
        $client->fill($request->post())->save();
        return redirect()->route('client.index')->with('success client updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('client.index');
    }

    public function stores(Request $request) {
        $client = new Client();
        $client->name = $request->input('name');
        $client->save();
    
        return response()->json(['id' => $client->id]);
    }


}
