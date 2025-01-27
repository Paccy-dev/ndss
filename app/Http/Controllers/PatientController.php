<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::all();
        return view("patients.index", compact("patients"));
    }
    /**
     * Show page to Store a newly created resource in storage.
     */
    public function createform(Request $request)
    {
        $insurances = [
            '1) Mutuelle de Santé' => '1) Mutuelle de Santé',
            '2) Radiant Insurance' => '2) Radiant Insurance',
            '3) Prime Insurance' => '3) Prime Insurance',
            '4) Old Mutual'=> '4) Old Mutual',
            '5) Allianz'=> '5) Allianz',
            '6) MSH International' => '6) MSH International',
            "7) Rwandaise d'Assurance Maladie (RAMA)"=> "7) Rwandaise d'Assurance Maladie (RAMA)",
            "8) Military Medical Insurance (MMI)"=> "8) Military Medical Insurance (MMI)",
        ];
        return view('patients.createform',compact('insurances'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function create(Request $request)
    {
        $request->validate([

        ]);
        Patient::create($request->all());
        return redirect()->route('patients.index')
         ->with('success','Patient created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $patient = Patient::find($id);
        return view('patients.show',compact('patient'));
    }

     /**
     * Show page to Update the specified resource in storage.
     */
    public function updateform(string $id)
    {
        $insurances = [
            '1) Mutuelle de Santé' => '1) Mutuelle de Santé',
            '2) Radiant Insurance' => '2) Radiant Insurance',
            '3) Prime Insurance' => '3) Prime Insurance',
            '4) Old Mutual'=> '4) Old Mutual',
            '5) Allianz'=> '5) Allianz',
            '6) MSH International' => '6) MSH International',
            "7) Rwandaise d'Assurance Maladie (RAMA)"=> "7) Rwandaise d'Assurance Maladie (RAMA)",
            "8) Military Medical Insurance (MMI)"=> "8) Military Medical Insurance (MMI)",
        ]; 

        $patient = Patient::find($id);
        return view('patients.updateform',compact('patient','insurances'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([]);
        $patient = Patient::find($id);
        $patient->update($request->all());
        return redirect()->route('patients.index')
        ->with('success','Patient updated successfully');
    }

     /**
     * Show page to Remove the specified resource from storage.
     */
    public function deleteform(string $id)
    {
        $patient = Patient::find($id);
        return view('patients.deleteform',compact('patient'));

    }
    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $patient = Patient::find($id);
        $patient->delete();
        // Patient::find($id)->delete();
        return redirect()->route('patients.index')
        ->with('success','Deletion successful');
    }
}
