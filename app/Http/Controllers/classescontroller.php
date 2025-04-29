<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\classes;


class classescontroller extends Controller
{
    public function index(){
        return view('admin.class.class');

    }
    public function store(Request $request){
        // dd($request->name);
        $request->validate([
            'name'=>'required'
        ]);
        $data = new classes();
        $data->name = $request->name;
        $data->save();
        return redirect()->route('class.create')->with('success','Class  added successfylly');
   
    }
    public function read(){
        $data['classes']= classes::get();
        return view('admin.class.class_list',$data);

    }
    public function edit($id){
        $data['classes'] = classes::find($id);
        return view('admin.class.edit_class',$data);

    }
    public function delete($id){
        $data = classes::find($id);
        $data->delete();
        return redirect()->route('class.read')->with('success','class deleted successfylly');
    }
    public function update(Request $request){
        $data= classes::find($request->id);
        $data->name = $request->name;
        $data->update();
        return redirect()->route('class.read')->with('success','class updated successfylly');

    }
  
    
}
