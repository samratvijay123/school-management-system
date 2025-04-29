<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\announcement;
use App\Models\assignteachertoclass;
use App\Models\Timetable;

class usercontroller extends Controller
{


    public function index(){

        $data['announcements'] = announcement::all();
        return view('student.index', $data);

    }




    public function masterview(){
        return view('student.masterview');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('student.login')->with('error','logout successfullly');

    }


    public function login(){
        return view('student.login');
    }

    public function authenticate(Request $request){
     if( Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
          if(Auth::user()->role !='student'){
            Auth::logout();
            return redirect()->route('student.login')->with('error','unatuthorized user access denied');
          }
          return redirect()->route('student.index');
     }
     else{
        return redirect()->route('student.login')->with('error','some thing went wrong');
    }
    }
    public function changepassword(){
        return view('student.change_password');
    }
    public function updatepassword(Request $request){
       $request->validate([
        'oldpassword'=>'required',
        'newpassword'=>'required',
        'confirmpassword'=>'required|same:newpassword',


       ]);
       $oldpassword = $request->oldpassword;
       $newpassword = $request->newpassword;
       $user = User::find(Auth::user()->id);
     if(Hash::check($oldpassword, $user->password)){
        $user->password = $newpassword;
         $user->update();
         return redirect()->back()->with('success','password update successfully');

     }else{
        return redirect()->back()->with('error','old password is not match');

     }
    }
    public function mysubject(){
        $class_id = Auth::guard('web')->user()->class_id;
        $data['my_subjects'] = assignteachertoclass::where('teacher_id', $class_id)->with('teacher','subject')->get();
        return view('student.my-subject',$data);
    }
  
    

    public function timetable(){
        $timetables = timetable::all(); // all announcements
        // dd($data);


    //     $class_id = Auth::guard('web')->user()->class_id;
    //     $timetables = Timetable::where('class_id', $class_id)->with('subject', 'day')->get();

        $group = [];
        foreach ($timetables as $item) {
            $group[$item->day->name][] = [
                'subject'    => $item->subject->name ?? 'N/A',
                'start_time' => $item->start_time,
                'end_time'   => $item->end_time,
                'room_no'    => $item->room_no,
            ];
        }

        return view('student.timetable', ['timetable' => $group]);
    }

}
