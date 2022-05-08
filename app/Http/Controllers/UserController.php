<?php

namespace App\Http\Controllers;

use session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //Show Register or Create form
    public function create(){

        return view('users.register');
    }
    //Create new User!
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => 'required|min:3',
            'email' => ['required', 'email', Rule::unique('users','email')],
            'password' => 'required|confirmed|min:6'
        ]);

        //Hash Password
        $formFields['password'] = bcrypt($formFields['password']);
        //Create User
        $user = User::create($formFields);
        //Login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }    

    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return back()->with('message', 'You have been logged out!');
    }

    public function login(){
        return view('users.login');
    }
    // Authenticate Users
    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email' => ['required','email'],
            'password' => 'required'
        ]);
        
        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in!');
        }

        return back()->withErrors([
            'email' => 'The Provided credentials do not match our record!',
        ])->onlyInput('email');
    }
}
