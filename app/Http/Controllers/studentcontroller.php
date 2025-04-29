<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\AcademicYear;
use App\Models\classes;
use App\Models\User;

class studentcontroller extends Controller
{
    public function index()
    {
        $data['classes'] = classes::all();
        $data['academic_year'] = AcademicYear::all();

        return view('admin.student.student', $data);
    }
    public function store(Request $request)
    {
        $request->validate([
            'academic_year_id' => 'required',
            'class_id' => 'required',
            'name' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'admission_date' => 'required',
            'dob' => 'required',
            'mobno' => 'required',
            'email' => 'required',
            'password' => 'required',


        ]);
        $user = new User();
        $user->academic_year_id = $request->academic_year_id;
        $user->class_id = $request->class_id;
        $user->name = $request->name;
        $user->father_name = $request->father_name;
        $user->mother_name = $request->mother_name;
        $user->admission_date = $request->admission_date;
        $user->dob = $request->dob;
        $user->mobno = $request->mobno;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'student';
        $user->save();
        return redirect()->route('student.create')->with('success', 'student info creat successfully');
    }

    public function read(Request $request) {
        $data['students'] = User::with('studentClass', 'studentAcademicYear')
            ->where('role', 'student')
            ->latest('id');

        if ($request->filled('academic_year_id')) {
            $data['students'] = $data['students']->where('academic_year_id', $request->get('academic_year_id'));
        }

        if ($request->filled('class_id')) {
            $data['students'] = $data['students']->where('class_id', $request->get('class_id')); // Fixed parameter
        }

        $data['students'] = $data['students']->get(); // Execute query

        $data['academic_year'] = AcademicYear::all();
        $data['classes'] = Classes::all();

        return view('admin.student.student_list', $data);
    }
    
    public function delete($id){
        $data = User::find($id);
        $data->delete();
        return redirect()->route('student.read')->with('success','student  deleted successfylly');
    }
    public function edit($id){
        $data['student'] = User::find($id);
        $data['classes'] = classes::all();
        $data['academic_year'] = AcademicYear::all();
        return view('admin.student.edit_student',$data);

    }
    public function update(Request $request ,$id){
        $user = User::find($id);
        $user->academic_year_id = $request->academic_year_id;
        $user->class_id = $request->class_id;
        $user->name = $request->name;
        $user->father_name = $request->father_name;
        $user->mother_name = $request->mother_name;
        // $user->admission_date = $request->admission_date;
        $user->dob = $request->dob;
        $user->mobno = $request->mobno;
        $user->email = $request->email;
        $user->update();
        return redirect()->route('student.read')->with('success','student updated successfylly');


    }





}
