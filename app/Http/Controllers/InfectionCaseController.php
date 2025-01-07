<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Pandemic;
use App\Models\HealthCenter;
use Illuminate\Http\Request;
use App\Models\InfectionCase;

class InfectionCaseController extends Controller
{
    public function __construct()
    {
        $this->patients = Patient::all();
        $this->pandemics = Pandemic::all();
        $this->healthCenter = HealthCenter::all();
    }
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $infectionCases = InfectionCase::all();
        $pandemics = Pandemic::all();
        $patients = Patient::all();
        $healthCenters = HealthCenter::all();
        return view('infectionCases.index', compact('infectionCases','pandemics','patients','healthCenters'));
    }
    /**
     * Show page to Store a newly created resource in storage.
     */
    public function createform(Request $request)
    {
        $patients = Patient::all();
        $pandemics = Pandemic::all();
        $healthCenters = HealthCenter::all();
        return view('infectionCases.createform',compact('patients','pandemics','healthCenters'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function create(Request $request)
    {
        $request->validate([

        ]);
        // InfectionCase::create($request->all());
        $infectionCase = new InfectionCase();

        $infectionCase->patient_id = $request['patient_id'];
        $infectionCase->pandemic_id = $request['pandemic_id'];
        $infectionCase->health_center_id = $request['health_center_id'];
        $infectionCase->infection_date = $request['infection_date'];

        $infectionCase->save();
        return redirect()->route('infectionCases.index')
         ->with('success','InfectionCase created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $infectionCase = InfectionCase::find($id);
        $patients = Patient::all();
        $pandemics = Pandemic::all();
        $healthCenters = HealthCenter::all();
        return view('infectionCases.show',compact('infectionCase','patients','pandemics','healthCenters'));
    }

     /**
     * Show page to Update the specified resource in storage.
     */
    public function updateform(string $id)
    {
        
        $infectionCase = InfectionCase::find($id);
        $patients = Patient::all();
        $pandemics = Pandemic::all();
        $healthCenters = HealthCenter::all();
        return view('infectionCases.updateform',compact('infectionCase','patients','pandemics','healthCenters'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([]);
        $infectionCase = InfectionCase::find($id);
        // $infectionCase->update($request->all());
        $infectionCase->patient_id = $request['patient_id'];
        $infectionCase->pandemic_id = $request['pandemic_id'];
        $infectionCase->health_center_id = $request['health_center_id'];
        $infectionCase->infection_date = $request['infection_date'];

        $infectionCase->save();
        return redirect()->route('infectionCases.index')
        ->with('success','InfectionCase updated successfully');
    }

     /**
     * Show page to Remove the specified resource from storage.
     */
    public function deleteform(string $id)
    {
        $infectionCase = InfectionCase::find($id);
        $patients = Patient::all();
        $pandemics = Pandemic::all();
        $healthCenters = HealthCenter::all();
        return view('infectionCases.deleteform',compact('infectionCase','patients','pandemics','healthCenters'));

    }
    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $infectionCase = InfectionCase::find($id);
        $infectionCase->delete();
        // InfectionCase::find($id)->delete();
        return redirect()->route('infectionCases.index')
        ->with('success','Deletion successful');
    }
}
