<?php

namespace App\Http\Controllers;

use App\Models\assignsubjecttoclass;
use App\Models\classes;
use App\Models\subject;
use Illuminate\Http\Request;

class AssignsubjecttoclassController extends Controller
{

    public function index(){
        $data['classes']= classes::all();
        $data['subject']= subject::all();

        return view('admin.assign_subject.form',$data);
    }
    public function store(Request $request){
        // dd($request->name);
        $request->validate([
            'class_id'=>'required',
            'subject_id'=>'required'

        ]);
        $class_id = $request->class_id;
        $subject_id = $request->subject_id;
        foreach($subject_id as $subject_id)
        assignsubjecttoclass::updateOrCreate(
           [
            'class_id'=>$class_id,
            'subject_id'=>$subject_id
           ],
           [
            'class_id'=>$class_id,
            'subject_id'=>$subject_id

           ]
           );
           return redirect()->route('assign-subject.read')->with('success','subbject assigned to a class successfullly');

    }

    public function read(Request $request)
    {
        $query = AssignSubjectToClass::with(['class', 'subject']);

        if ($request->filled('class_id')) {
            $query->where('class_id', $request->get('class_id'));
        }

        $data['assign_subjects'] = $query->get();
        $data['classes'] = Classes::all();

        return view('admin.assign_subject.table', $data);
    }
    public function delete($id){
        $data = assignsubjecttoclass::find($id);
        $data->delete();
        return redirect()->route('assign-subject.read')->with('success','class deleted successfylly');
    }
    public function edit($id){

        $data['assign_subjects'] = assignsubjecttoclass::find($id);
        $data['classes']= classes::all();
        $data['subjects']= subject::all();

        return view('admin.assign_subject.edit_form',$data);

    }
    public function update(Request $request,$id){
        $data = assignsubjecttoclass::find($id);
        $data->class_id=$request->class_id;
        $data->subject_id=$request->subject_id;
        // $data->type = $request->type;
        $data->update();
        return redirect()->route('assign-subject.read')->with('success','updated   successfylly');

    }





}
