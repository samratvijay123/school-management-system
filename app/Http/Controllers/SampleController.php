<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class SampleController extends Controller
{
    /**
     * Display the admin home page.
     *
     * @return \Illuminate\View\View
     */


    public function login()
    {
        return view('admin.login');
    }
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('sucess','logout successfully');

    }
    public function authenticate(Request $req) {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $req->email, 'password' => $req->password])) {
            if(Auth::guard('admin')->user()->role != 'admin'){
                return redirect()->route('admin.login')->with('error','unauthorized user');
            }
            return redirect()->route('admin.index');



        }
        else{
            return redirect()->route('admin.login')->with('error','something went wrong');
        }

        return back()->withInput()->with('error', 'Invalid email or password.');
    }

    public function register(){
        $user = new User();
        $user->name = 'admin';
        $user->role = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('admin'); // Hash the password before saving

        $user->save();

        return redirect()->route('admin.login')->with('success', 'User created successfully');
    }
    public function index(){
        return view('admin.index');
    }
    public function table(){
        return view('admin.table');
    }
    public function masterview(){
        return view('admin.masterview');
    }
    public function form(){
        return view('admin.form');
    }

}
