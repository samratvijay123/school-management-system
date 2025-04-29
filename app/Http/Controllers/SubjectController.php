<?php

namespace App\Http\Controllers;

use App\Models\subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{

    public function index(){
    return view('admin.subject.form');

    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'type' => 'required'
        ]);
        $subject = new subject();
        $subject->name = $request->name;
        $subject->type = $request->type;
        $subject->save();
        return redirect()->route('subject.create')->with('success','subject added successfully');

    }
    public function read(){
        $data['subject'] = subject::latest()->get();
        return view('admin.subject.list',$data);
    }
    public function delete($id){
        $data = subject::find($id);
        $data->delete();
        return redirect()->route('subject.read')->with('success','subject data deleted successfylly');
    }
    public function edit($id){
        $data['announcement'] = subject::find($id);
        return view('admin.subject.edit_form',$data);

    }
    public function update(Request $request,$id){
        $announcement = subject::find($id);
        $announcement->name=$request->name;
        $announcement->type = $request->type;
        $announcement->update();
        return redirect()->route('subject.read')->with('success','updated   successfylly');

    }





}
