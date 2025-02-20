<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PandemicController;
use App\Http\Controllers\HealthCenterController;
use App\Http\Controllers\InfectionCaseController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


Route::get('/charts', [GeneralController::class, 'index'] )->name('charts');


// Route::get('/', function () {
//     return view('dashboard');
// })->name('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::get('', [GeneralController::class,'index'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/{id}/update', [RegisteredUserController::class, 'update'])->name('profile.update');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/pandemics',[PandemicController::class, 'index'])->name('pandemics.index');
Route::get('/pandemics/create',[PandemicController::class,'createform'])->name('pandemics.createform');
Route::post('/pandemics/create',[PandemicController::class,'create'])->name('pandemics.create');
Route::get('/pandemics/{id}',[PandemicController::class,'show'])->name('pandemics.show');
Route::get('pandemics/{id}/update',[PandemicController::class,'updateform'])->name('pandemics.updateform');
Route::put('pandemics/{id}/update',[PandemicController::class,'update'])->name('pandemics.update');
Route::get('pandemics/{id}/delete',[PandemicController::class,'deleteform'])->name('pandemics.deleteform');
Route::delete('pandemics/{id}/delete',[PandemicController::class,'delete'])->name('pandemics.delete');

Route::get('/patients',[PatientController::class,'index'])->name('patients.index');
Route::get('/patients/create',[PatientController::class,'createform'])->name('patients.createform');
Route::post('/patients/create',[PatientController::class,'create'])->name('patients.create');
Route::get('/patients/{id}',[PatientController::class,'show'])->name('patients.show');
Route::get('/patients/{id}/update',[PatientController::class,'updateform'])->name('patients.updateform');
Route::put('/patients/{id}/update',[PatientController::class,'update'])->name('patients.update');
Route::get('/patients/{id}/delete',[PatientController::class,'deleteform'])->name('patients.deleteform');
Route::delete('/patients/{id}/delete',[PatientController::class,'delete'])->name('patients.delete');

Route::get('/healthCenters',[HealthCenterController::class,'index'])->name('healthCenters.index');
Route::get('/healthCenters/create',[HealthCenterController::class,'createform'])->name('healthCenters.createform');
Route::post('/healthCenters/create',[HealthCenterController::class,'create'])->name('healthCenters.create');
Route::get('/healthCenters/{id}',[HealthCenterController::class,'show'])->name('healthCenters.show');
Route::get('/healthCenters/{id}/update',[HealthCenterController::class,'updateform'])->name('healthCenters.updateform');
Route::put('/healthCenters/{id}/update',[HealthCenterController::class,'update'])->name('healthCenters.update');
Route::get('/healthCenters/{id}/delete',[HealthCenterController::class,'deleteform'])->name('healthCenters.deleteform');
Route::delete('/healthCenters/{id}/delete',[HealthCenterController::class,'delete'])->name('healthCenters.delete');

Route::get('/infectionCases',[InfectionCaseController::class,'index'])->name('infectionCases.index');
Route::get('/infectionCases/create',[InfectionCaseController::class,'createform'])->name('infectionCases.createform');
Route::post('/infectionCases/create',[InfectionCaseController::class,'create'])->name('infectionCases.create');
Route::get('/infectionCases/{id}',[InfectionCaseController::class,'show'])->name('infectionCases.show');
Route::get('/infectionCases/{id}/update',[InfectionCaseController::class,'updateform'])->name('infectionCases.updateform');
Route::put('/infectionCases/{id}/update',[InfectionCaseController::class,'update'])->name('infectionCases.update');
Route::get('/infectionCases/{id}/delete',[InfectionCaseController::class,'deleteform'])->name('infectionCases.deleteform');
Route::delete('/infectionCases/{id}/delete',[InfectionCaseController::class,'delete'])->name('infectionCases.delete');

Route::get('/users',[RegisteredUserController::class,'index'])->name('users.index');
Route::get('/users/create',[RegisteredUserController::class,'createform'])->name('users.createform');
Route::post('/users/create',[RegisteredUserController::class,'create'])->name('users.create');
Route::get('/users/permissions',[GeneralController::class,'permissionsindex'])->name('users.permissionsindex');
Route::get('/users/permissions/{id}',[GeneralController::class,'permissionsshow'])->name('users.permissionsshow');
Route::get('users/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('users/register', [RegisteredUserController::class, 'store'])->name('register');
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::get('/users/{id}',[RegisteredUserController::class,'show'])->name('users.show');
Route::get('/users/{id}',[RegisteredUserController::class,'show'])->name('users.show');
Route::get('/users/{id}/update',[RegisteredUserController::class,'updateform'])->name('users.updateform');
Route::patch('/users/{id}/update',[RegisteredUserController::class,'update'])->name('users.update');
Route::get('/users/{id}/delete',[RegisteredUserController::class,'deleteform'])->name('users.deleteform');
Route::delete('/users/{id}/delete',[RegisteredUserController::class,'delete'])->name('users.delete');

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');	
