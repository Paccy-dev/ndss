<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pandemic;

class PandemicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pandemics =  Pandemic::all();
        return view('pandemics.index', compact('pandemics'));
    }
  /**
     * Show page to Store a newly created resource in storage.
     */
    public function createform(Request $request)
    {
    
        return view('pandemics.createform');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function create(Request $request)
    {
        $request->validate([]);
        
        /**
         * another way of handling the data one by one...
         * $pandemic = new Pandemic();
         * $pandemic->full_name = $request->name;
         * $pandemic->description = $request->description;
         * $pandemic->save();
         */

        Pandemic::create($request->all());
        return redirect()->route('pandemics.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pandemic = Pandemic::find($id);
        return view('pandemics.show',compact('pandemic'));
    }

     /**
     * Show page to Update the specified resource in storage.
     */
    public function updateform(string $id)
    {
        $pandemic = Pandemic::find($id);
        return view('pandemics.updateform',compact('pandemic'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([]);
        $pandemic = Pandemic::find($id);
        $pandemic->update($request->all());
        // Desease::findOrFail($id)->update($request->all());
        return redirect()->route('pandemics.index')
            ->with('success','Pandemic updated successfully');
    }

    
     /**
     * Show page to Remove the specified resource from storage.
     */
    public function deleteform(string $id)
    {
        $pandemic = Pandemic::find($id);
        return view('pandemics.deleteform',compact('pandemic'));

    }
    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $pandemic = Pandemic::find($id);
        $pandemic->delete();
        return redirect()->route('pandemics.index')
            ->with('success','Deletion successful');
    }
}
