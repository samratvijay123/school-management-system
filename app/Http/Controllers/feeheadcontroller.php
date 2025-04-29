<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\feehead;



class feeheadcontroller extends Controller
{
    public function index(){
        return view('admin.fee-head.fee-head');
    }
    public function store(Request $request){
        
        $request->validate([
            'name'=>'required'
        ]);
        $data = new feehead();
        $data->name = $request->name;
        $data->save();
        return redirect()->route('fee-head.create')->with('success','fee  added successfylly');
   
    }
     
    public function read(){
        $data['feehead']= feehead::get();
        return view('admin.fee-head.fee_list',$data);

    }
    public function edit($id){
        $data['feehead'] = feehead::find($id);
        return view('admin.fee-head.edit_fee',$data);

    }
   
    
    public function update(Request $request){
        $data= feehead::find($request->id);
        $data->name = $request->name;
        $data->update();
        return redirect()->route('fee-head.read')->with('success','fee updated successfylly');

    }
    public function delete($id){
        $data = feehead::find($id);
        $data->delete();
        return redirect()->route('fee-head.read')->with('success','fee deleted successfylly');
    }
    
}
