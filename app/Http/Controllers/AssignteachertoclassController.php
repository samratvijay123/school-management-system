<?php

namespace App\Http\Controllers;

use App\Models\assignsubjecttoclass;
use App\Models\assignteachertoclass;
use App\Models\classes;
use App\Models\subject;
use App\Models\User;
use Illuminate\Http\Request;

class AssignteachertoclassController extends Controller
{

    public function index(){
        $data['classes'] = classes::all();
        $data['teachers'] = User::where('role','teacher')->latest()->get();
        // $data['subjects'] =subject::all();
        //  dd($data);
        return view('admin.assign_teacher.form',$data);
    }
    public function findSubject(Request $request){
        $class_id = $request->class_id;
        $subjects = assignsubjecttoclass::with('subject')->where('class_id',$class_id)->get();
        return response()->json([
            'status'=>true,
            'subjects'=>$subjects
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'class_id' => 'required',
            'subject_id' => 'required',
            'teacher_id' => 'required',
        ]);

        AssignTeacherToClass::updateOrCreate(
            [
                'class_id' => $request->class_id,
                'subject_id' => $request->subject_id
            ],
            [
                'class_id' => $request->class_id,
                'subject_id' => $request->subject_id,
                'teacher_id' => $request->teacher_id
            ]
        );

        return redirect()->route('assign-teacher.create')->with('success', 'Subject assigned to a class successfully');
    }
    public function read(Request $request)
{
    $query = assignteachertoclass::with(['class', 'subject', 'teacher']);

    if ($request->class_id) {
        $query->where('class_id', $request->class_id);
    }

    $data['assign_teachers'] = $query->latest()->get();
    $data['classes'] = classes::all();

    return view('admin.assign_teacher.table', $data);
}
public function delete($id){
    $data = assignteachertoclass::find($id);
    $data->delete();
    return redirect()->route('assign-teacher.read')->with('success','class deleted successfylly');
}
public function edit($id){

     $res = assignteachertoclass::find($id);
     $data['assign_teachers'] = $res;
     $data['subjects'] = assignsubjecttoclass::with('subject')->where('class_id',$res->class_id)->get();
    $data['classes'] = classes::all();
    $data['teachers'] = User::where('role','teacher')->latest()->get();

    return view('admin.assign_teacher.edit_form',$data);

}

public function update(Request $request,$id){
    $data = assignteachertoclass::find($id);
    dd($data);
    $data->class_id=$request->class_id;
    $data->subject_id=$request->subject_id;
    $data->teacher_id = $request->teacher_id;
    $data->update();
    return redirect()->route('assign-teacher.read')->with('success','updated   successfylly');

}
}
