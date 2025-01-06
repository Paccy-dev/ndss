<?php

namespace App\Http\Controllers;

use App\Models\HealthCenter;
use Illuminate\Http\Request;

class HealthCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $healthCenters = HealthCenter::all();
        return view('healthCenters.index',compact('healthCenters'));
    }

    /**
     * Show page to store a newly reated resource in storage
     */
    public function createform(Request $request){
        return view('healthCenters.createform');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create(Request $request)
    {
        $request->validate([]);
        $healthCenter = HealthCenter::create($request->all());
        return redirect()->route('healthCenters.index')->with('success','HealthCenter created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $healthCenter = HealthCenter::find($id);
        return view('healthCenters.show',compact('healthCenter'));
    }

    /**
     * Show page to update the specified resource in storage
     */
    public function updateform($id)
    {
        $healthCenter = HealthCenter::find($id);
        return view('healthCenters.updateform',compact('healthCenter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([]);
        $healthCenter = HealthCenter::find($id);
        $healthCenter->update($request->all());
        return redirect()->route('healthCenters.index')->with('success','HealthCenter updated successfully');
    }
    /**
     * Show page to Remove the specified resource from storage
     */
    public function deleteform(string $id)
    {
        $healthCenter = HealthCenter::find($id);    
        return view('healthCenters.deleteform',compact('healthCenter'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $healthCenter = HealthCenter::find($id);
        $healthCenter->delete();
        return redirect()->route('healthCenters.index')->with('success','Deletion successful');
    }
}
