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
            // 'is_public' => $request->has('is_public'),
            'is_public' => True,
 
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
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $user = User::find($id);

        $user_email = $user->email;
        $email = $request->email;
        
        if ($email != $user_email) {
            $request->validate([
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            ]);
        }
       
        $request->validate([]);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->is_superUser = $request->has('is_superUser');
        $user->is_dataManager = $request->has('is_dataManager');
        $user->is_healthCenterManager = $request->has('is_healthCenterManager');
        // $user->is_public = $request->has('is_public'); 
        $user->is_public = True; 
        $user->save();
        

        return redirect()->route('users.index')
        ->with('success','Patient updated successfully');
    }
}