<?php

namespace App\Http\Controllers;

use App\Models\classes;
use App\Models\Day;
use App\Models\subject;
use App\Models\Timetable;
use Illuminate\Http\Request;

class TimetableController extends Controller
{

    public function index(){
        $data['days'] = Day::all();
        $data['classes'] = classes::all();
        $data['subject'] = subject::all();
        return view('admin.timetable.create',$data);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'class_id' => 'required|exists:classes,id',
            'subject_id' => 'required|exists:subjects,id',
            'timetable' => 'required|array|min:1',
            'timetable.*.day_id' => 'required|exists:days,id',
            'timetable.*.start_time' => 'nullable|date_format:H:i',
            'timetable.*.end_time' => 'nullable|date_format:H:i|after:timetable.*.start_time',
            'timetable.*.room_no' => 'nullable|string|max:20'
        ]);


        foreach ($validated['timetable'] as $entry) {

            if (!empty($entry['start_time'])) {
                Timetable::updateOrCreate(
                    [
                        'class_id' => $validated['class_id'],
                        'subject_id' => $validated['subject_id'],
                        'day_id' => $entry['day_id'],
                    ],
                    [
                        'start_time' => $entry['start_time'],
                        'end_time' => $entry['end_time'],
                        'room_no' => $entry['room_no'] ?? null,
                    ]
                );
            }
        }

        return redirect() ->route('timetable.create') ->with('success', 'Timetable updated successfully.');
    }
    public function read(Request $request)
{

    $query = Timetable::with(['class', 'subject', 'day']);
    if ($request->filled('class_id')) {
        $query->where('class_id', $request->get('class_id'));
    }
    if ($request->filled('subject_id')) {
        $query->where('subject_id', $request->get('subject_id'));
    }

    $data['tabletime'] = $query->get();

    $data['assign_subjects'] = Timetable::with(['subject'])->get();
    $data['classes'] = classes::all();

    return view('admin.timetable.list', $data);
}

    public function delete($id){
        $data = Timetable::find($id);
        $data->delete();
        return redirect()->route('timetable.read')->with('success','class deleted successfylly');
    }


}

