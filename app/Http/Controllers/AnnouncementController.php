<?php

namespace App\Http\Controllers;

use App\Models\announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index(){
        return view('admin.announcement.form');
    }
    public function store(Request $request){
        $request->validate([
            'message' =>'required',
            'type'=>'required'

        ]);
        $announcement = new announcement();
        $announcement->message=$request->message;
        $announcement->type = $request->type;
        $announcement->save();
        return redirect()->route('announcement.create')->with('success','announcement broadcast successfulluy');
    }
    public function read(){
        $data['announcements'] = announcement::latest()->get();
        return view('admin.announcement.list',$data);
    }

    public function delete($id){
        $data = announcement::find($id);
        $data->delete();
        return redirect()->route('announcement.read')->with('success','announcemet data deleted successfylly');
    }
    public function edit($id){
        $data['announcement'] = announcement::find($id);
        return view('admin.announcement.edit_form',$data);

    }
    public function update(Request $request,$id){
        $announcement = announcement::find($id);
        $announcement->message=$request->message;
        $announcement->type = $request->type;
        $announcement->update();
        return redirect()->route('announcement.read')->with('success','updated   successfylly');

    }

    //
}
