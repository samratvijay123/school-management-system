<?php

namespace App\Http\Controllers;

use App\Models\assignteachertoclass;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{



    public function index()
    {
        return view('admin.teacher.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'mobno' => 'required|string|max:15',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->father_name = $request->father_name;
        $user->mother_name = $request->mother_name;
        $user->dob = $request->dob;
        $user->mobno = $request->mobno;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'teacher';
        $user->save();

        return redirect()->route('teacher.create')->with('success', 'Teacher info created successfully');
    }
    public function read() {
        $data['teachers'] = User::where('role', 'teacher')->latest()->get(); // fetch all columns

        return view('admin.teacher.teacher_list', $data);
    }
    public function delete($id){
        $data = User::find($id);
        $data->delete();
        return redirect()->route('teacher.read')->with('success','student  deleted successfylly');
    }
    public function edit($id){
        $data['teacher'] = User::find($id);
        return view('admin.teacher.edit_teacher',$data);

    }
    public function update(Request $request ,$id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->father_name = $request->father_name;
        $user->mother_name = $request->mother_name;
        $user->dob = $request->dob;
        $user->mobno = $request->mobno;
        $user->email = $request->email;
        $user->update();
        return redirect()->route('teacher.read')->with('success','teacher updated successfylly');


    }
    public function login(){
        return view('teacher.login');
    }
    public function authenticate(Request $req) {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::guard('teacher')->attempt(['email' => $req->email, 'password' => $req->password])) {
            $user = Auth::guard('teacher')->user();

            if ($user->role !== 'teacher') {
                Auth::guard('teacher')->logout(); // Always logout unauthorized user
                return redirect()->route('teacher.login')->with('error', 'Unauthorized user');
            }

            return redirect()->route('teacher.dashboard');
        }

        return redirect()->route('teacher.login')->with('error', 'Invalid email or password.');
    }

    public function dashboard() {
        return view('teacher.dashboard');
    }

    public function logout(){
        Auth::guard('teacher')->logout();
        return redirect()->route('teacher.login')->with('sucess','logout successfully');

    }
    public function myclass(){
        $teacher_id = Auth::guard('teacher')->user()->id;
        $data['assign_class'] = assignteachertoclass::where('teacher_id', $teacher_id)->with('class','subject')->get();
        return view('teacher.my-class',$data);
    }



}
