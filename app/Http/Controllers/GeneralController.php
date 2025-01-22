<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Pandemic;
use App\Models\HealthCenter;
use Illuminate\Http\Request;
use App\Models\InfectionCase;
use App\Models\User;


class GeneralController extends Controller
{
    public function index(){
        $patients = Patient::all();
        $pandemics = Pandemic::all();
        $healthCenters = HealthCenter::all();
        $infectionCases = InfectionCase::all();

        return view("dashboard", data: compact("patients","pandemics","healthCenters","infectionCases"));
    }

    public function permissionsindex(){
        $users = User::all();

        return view("users.permissionsindex", data: compact("users"));
    }

    public function permissionsshow($name){
        $permission = (String)$name;
                
        if( $permission == 'is_superUser'){
            $users = User::all()->filter(
                function ($user) {
            return  $user->is_superUser;
            });
        } else if( $permission == 'is_healthCenterManager'){
            $users = User::all()->filter(
                function ($user) {
            return  $user->is_healthCenterManager;
        });
        } else if( $permission == 'is_dataManager'){
            $users = User::all()->filter(
                function ($user) {
            return  $user->is_dataManager;
        });
        }else if( $permission == 'is_public'){
            $users = User::all()->filter(
                function ($user) {
            return  $user->is_public;
        });
        }
        else{
            abort(404);
        }     

        return view("users.permissionsshow", data: compact("users",'permission'));
    }


}
