<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Pandemic;
use App\Models\HealthCenter;
use Illuminate\Http\Request;
use App\Models\InfectionCase;


class GeneralController extends Controller
{
    public function index(){
        $patients = Patient::all();
        $pandemics = Pandemic::all();
        $healthCenters = HealthCenter::all();
        $infectionCases = InfectionCase::all();

        return view("dashboard", compact("patients","pandemics","healthCenters","infectionCases"));
    }
}
