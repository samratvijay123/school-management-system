<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\register;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class FormController extends Controller

{    

// website
   
    public function home(){
        return view('website.home');
    }
    public function cart(){
        return view('website.cart');
    }
    public function grocery()
    {
        return view('website.grocery');
    }
    public function allproduct(){
        return view('./website/allproduct');
    }
    public function login_check(Request $form){
        
        $validated = $form->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
    
        
        $user = register::where('email', $form->email)->first();
    
        if ($user) {
        
            if (Hash::check($form->password, $user->password)) {
            
                return redirect('grocery')->with('success', 'Login successful!');
            } else {
            
                return back()->with('error', 'Invalid password, please try again.');
            }
        } else {
            // Email is not registered
            return back()->with('error', 'Email is not registered.');
        }
    }

    public function login(){
        return view('./website/login');
    }
    public function logout(){
        session()->flush();
        return view('./website/grocery');
        session()->forget('email','password');
    }

    public function conform_buy(){
        return view('./website/conform_buy');
    }
    public function form(){
        return view('/website.sign_up');
    }
    public function register(){

    }
       
    public function sign_up(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|max:225',
            'number' => 'required|digits:10',
            'email' => 'required|email|unique:users,email',
            'gender' => 'required',
            'pincode' => 'required|digits:6',
            'address' => 'required|string',
            'password' => 'required|confirmed|min:8',
        ]);
    
        
        register::create([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'gender' => $request->gender,
            'pincode' => $request->pincode,
            'address' => $request->address,
            'password' => Hash::make($request->password), 
        ]);
    
        
        return redirect()->back()->with('success', 'Registration successful!');
    }
    
    public function masterview(){
        return view('./website/masterview');
    }
    public function Buy(Request $request)
    {
        return view('./website/Buy');
    }
  public function wish(){
    return view('website/wish');
    

  }
  public function forget(Request $request)
  {
      $validatedData = $request->validate([
          'loginforgetmobile' => 'required|digits:10', 
          'loginforgetpassword' => 'required|min:8|confirmed',
      ], [
          'loginforgetmobile.required' => 'The mobile number field is required.',
          'loginforgetmobile.digits' => 'The mobile number must be 10 digits.',
          'loginforgetpassword.required' => 'The password field is required.',
          'loginforgetpassword.min' => 'The password must be at least 8 characters.',
          'loginforgetpassword.confirmed' => 'The password confirmation does not match.',
      ]);
     
    return redirect()->back()->with('success', 'Registration successful!');
  }
  public function profile(){
    return view('./website/profile');
  }

  }

