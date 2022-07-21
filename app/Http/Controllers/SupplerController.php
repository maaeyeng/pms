<?php

namespace App\Http\Controllers;

use App\Models\Suppler;
use Illuminate\Http\Request;

class SupplerController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $supplers = Suppler::latest()->paginate(10);
      
        return view('supplers.index',compact('supplers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('supplers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'supplername' => 'required',
            'address' => 'required',
            'type' => 'required',
            'status' => 'required',
        ]);
      
        Suppler::create($request->all());
       
        return redirect()->route('supplers.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Suppler $supplers)
    {
        //
        return view('supplers.show',compact('supplers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Suppler $supplers)
    {
        //
        return view('supplers.edit',compact('supplers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suppler $supplers)
    {
        //
        $request->validate([
            'supplername' => 'required',
            'address' => 'required',
            'type' => 'required',
            'status' => 'required',
        ]);
      
        $supplers->update($request->all());
      
        return redirect()->route('supplers.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Suppler  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suppler $supplers)
    {
        //
        $product->delete();
       
        return redirect()->route('supplers.index')
                        ->with('success','Product deleted successfully');
    }
}
