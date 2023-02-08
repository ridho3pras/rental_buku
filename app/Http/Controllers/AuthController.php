<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    } 

    public function register()
    {
        return view('register');
    }

    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);


        // cek apakah login valid
        
        if (Auth::attempt($credentials)) {
            //apakah user statusnya = active
            if(auth::user()->status != "active"){
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                return redirect('/login')->with('failed', 'Your account not active yet. please contact admin!');
            }
                   
            $request->session()->regenerate();
            if(Auth::user()->role_id == 1) {
                return redirect('dashboard');
            }
            if(Auth::user()->role_id==2) {
                return redirect('/');
            }
        }

        return back()->with('loginError', 'Username or Password Incorrect!');

        // Session::flash('status', 'failed');
        // Session::flash('message', 'login Invalid!');
        // return redirect('/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    } 

    public function registerProcess(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|unique:users|min:5|max:255',
            'password' => 'required|min:5|max:255',
            'phone' => 'max:255',
            'address' => 'required',
        ]);

        // $validatedData['password'] =bcrypt($validatedData['password']);
        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        //$user = User::create($request->all());
        return redirect('/register')->with('success', 'Registration successfull! Wait admin for approval!');
    }
}
