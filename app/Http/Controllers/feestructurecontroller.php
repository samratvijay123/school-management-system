<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\AcademicYear;
use App\Models\feestructure;
use App\Models\classes;
use App\Models\feehead;

class feestructurecontroller extends Controller
{
    public function index(){
        $data['classes'] = classes::all(); 
        $data['academic_year'] = AcademicYear::all(); 
        $data['feehead'] = feehead::all();
      return view('admin.fee-structure.fee-structure',$data);
    }

    public function store(Request $request){
        // dd($request->name);
        
        $request->validate([
            'academic_year_id'=>'required',
            'class_id'=>'required',
            'fee_head_id'=>'required',

        ]);

        feestructure::create($request->all());
        return redirect()->route('fee-structure.create')->with('success','fee structure added successfully');
    }
    public function read(Request $request){
        $feeStructure = feestructure::query()->with(['feehead', 'academicyear', 'classes'])->latest();
    
        if ($request->filled('class_id') && $request->query('class_id')>0) {
            $feeStructure->where('class_id', $request->get('class_id'));
        }
    
        if ($request->filled('academic_year_id') && $request->query('academic_year_id')>0) {
            $feeStructure->where('academic_year_id', $request->get('academic_year_id'));
        }
    
        $data['feestructure'] = $feeStructure->get();
        $data['classes'] = classes::all();
        $data['academic_year'] = AcademicYear::all();
        $data['feehead'] = feehead::all();


        return view('admin.fee-structure.fee-structure_list', $data);
    }
    

    public function delete($id){
        $data = feestructure::find($id);
        $data->delete();
        return redirect()->route('fee-structure.read')->with('success','class deleted successfylly');
    }
    public function edit($id){
        $data['feestructure'] = feestructure::find($id);
        $data['classes'] = classes::all(); 
        $data['academic_year'] = AcademicYear::all(); 
        $data['feehead'] = feehead::all();
        return view('admin.fee-structure.fee-structure_edit',$data);

    }
    public function update(Request $request){
        $fee= feestructure::find($request->id);
        $fee->class_id = $request-> class_id;
        $fee->academic_year_id = $request->academic_year_id;
        $fee->fee_head_id = $request->fee_head_id;
        $fee->april = $request->april;
        $fee->may = $request->may;
        $fee->june= $request->june;
        $fee->july = $request->july;
        $fee-> august= $request->august;
        $fee-> september= $request->september;
        $fee->october = $request->october;
        $fee-> november= $request->november;
        $fee-> december= $request->december;
        $fee->january = $request->january;
        $fee-> february= $request->february;
        $fee-> march= $request->march;

        $fee->update();
        return redirect()->route('fee-structure.read')->with('success','class updated successfylly');

    }
    
}
