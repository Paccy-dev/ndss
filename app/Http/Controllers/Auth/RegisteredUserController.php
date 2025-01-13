<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
 
class RegisteredUserController extends Controller
{
 
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }
 
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
 
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_superUser' => $request->has('is_superUser'),
            'is_dataManager' => $request->has('is_dataManager'),
            'is_healthCenterManager' => $request->has('is_healthCenterManager'),
            'is_public' => $request->has('is_public'),
 
        ]);
 
        // $user= User::create($request->all());
 
        event(new Registered($user));
 
        $users= User::all();
        return redirect()->route('users.index')
        ->with('success','Deletion successful');
    }
 
 
    /**
     * Display all users 
     */
    public function index(): View
    { 
        $users = User::all();
        return view('users.index',compact('users'));
    } 
    public function show(string $id): View
    {
        $user = User::find($id);
        return view('users.show ',compact('user'));

    }
    
    
     /**
     * Show page to Remove the specified resource from storage.
     */
    public function deleteform(string $id)
    {
        $user = User::find($id);
        return view('users.deleteform',compact('user'));

    }
        /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index')
            ->with('success','Deletion successful');
    }
    
     /**
     * Show page to Update the specified resource in storage.
     */
    public function updateform(string $id)
    {
        $user = User::find($id);
        return view('users.updateform',compact('user'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([]);
        $user = User::find($id);
        // $user->update($request->all());
        $user = User::update([
            'name' => $request->name,
            'email' => $request->email,
            'is_superUser' => $request->has('is_superUser'),
            'is_dataManager' => $request->has('is_dataManager'),
            'is_healthCenterManager' => $request->has('is_healthCenterManager'),
            'is_public' => $request->has('is_public'),
 
        ]);

        return redirect()->route('user.index')
        ->with('success','Patient updated successfully');
    }
}