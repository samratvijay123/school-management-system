<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\academicyearcontroller;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AssignsubjecttoclassController;
use App\Http\Controllers\AssignteachertoclassController;
use App\Http\Controllers\classescontroller;
use App\Http\Controllers\feeheadcontroller;
use App\Http\Controllers\feestructurecontroller;
use App\Http\Controllers\studentcontroller;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\teachercontroller;
use App\Http\Controllers\TimetableController;
use App\Http\Controllers\usercontroller;


Route::group(['prefix' => 'teacher'], function () {

    Route::middleware('teacher.guest')->group(function () {
        Route::get('login', [teachercontroller::class, 'login'])->name('teacher.login');
        Route::post('authenticate', [teachercontroller::class, 'authenticate'])->name('teacher.authenticate');


    });
    Route::middleware('teacher.auth')->group(function () {
        Route::get('dashboard', [teachercontroller::class, 'dashboard'])->name('teacher.dashboard');
        Route::get('logout', [teachercontroller::class, 'logout'])->name('teacher.logout');
        Route::get('my-class', [teachercontroller::class, 'myclass'])->name('teacher.my-class');


    });
});



Route::group(['prefix' => 'student'], function () {

    // Guest Routes (For users who are NOT authenticated)
    Route::group(['middleware' => 'guest'], function () {
        Route::get('login', [UserController::class, 'login'])->name('student.login');
        Route::post('authenticate', [UserController::class, 'authenticate'])->name('student.authenticate');
    });

    // Authenticated Routes (For users who ARE logged in)
    Route::group(['middleware' => 'auth'], function () {
        Route::get('masterview', [Usercontroller::class, 'masterview'])->name('student.masterview');
        Route::get('index', [UserController::class, 'index'])->name('student.index');
        Route::get('logout', [UserController::class, 'logout'])->name('student.logout');
        Route::get('change-password', [UserController::class, 'changepassword'])->name('student.changepassword');
        Route::get('update-password', [UserController::class, 'updatepassword'])->name('student.updatepassword');
        Route::get('my-subject',[Usercontroller::class,'mysubject'])->name('student.my-subject');
        Route::get('timetable', [Usercontroller::class, 'timetable'])->name('student.timetable');

    });


});



Route::prefix('admin')->group(function () {
    //   agar banda login nahi hai tan ah ajaiga
    Route::middleware('admin.guest')->group(function () {
        Route::get('login', [SampleController::class, 'login'])->name('admin.login');
        Route::post('login', [SampleController::class, 'authenticate'])->name('admin.authenticate');
        Route::get('register', [SampleController::class, 'register'])->name('admin.register');
    });

        // agar banda login hai toh ah khulega
    Route::middleware('admin.auth')->group(function () {
        Route::get('index', [SampleController::class, 'index'])->name('admin.index');
        Route::get('logout', [SampleController::class, 'logout'])->name('admin.logout'); // Use POST for security
        Route::get('table', [SampleController::class, 'table'])->name('admin.table');
        Route::get('masterview', [SampleController::class, 'masterview'])->name('admin.masterview');
        Route::get('form', [SampleController::class, 'form'])->name('admin.form');

        // academic year management is here
        Route::get('academic-year/create', [academicyearcontroller::class, 'index'])->name('academic-year.create');
        Route::get('academic-year/read', [academicyearcontroller::class, 'read'])->name('academic-year.read');
        Route::post('academic-year/store', [academicyearcontroller::class, 'store'])->name('academic-year.store');
        Route::get('academic-year/delete/{id}', [academicyearcontroller::class, 'delete'])->name('academic-year.delete');
        Route::get('academic-year/edit/{id}', [academicyearcontroller::class, 'edit'])->name('academic-year.edit');
        Route::post('academic-year/update', [academicyearcontroller::class, 'update'])->name('academic-year.update');

        //time table management
        Route::get('timetable/create', [TimetableController::class, 'index'])->name('timetable.create');
        Route::post('timetable/store', [TimetableController::class, 'store'])->name('timetable.store');
        Route::get('timetable/read', [TimetableController::class, 'read'])->name('timetable.read');
        Route::get('timetable/delete/{id}', [TimetableController::class, 'delete'])->name('timetable.delete');






        // class management
        Route::get('class/create', [classescontroller::class, 'index'])->name('class.create');
        Route::post('class/store', [classescontroller::class, 'store'])->name('class.store');
        Route::get('class/read', [classescontroller::class, 'read'])->name('class.read');
        Route::get('class/delete/{id}', [classescontroller::class, 'delete'])->name('class.delete');
        Route::get('class/edit/{id}', [classescontroller::class, 'edit'])->name('class.edit');
        Route::post('class/update', [classescontroller::class, 'update'])->name('class.update');

        // fee head management
        Route::get('fee-head/create', [feeheadcontroller::class, 'index'])->name('fee-head.create');
        Route::post('fee-head/store', [feeheadcontroller::class, 'store'])->name('fee-head.store');
        Route::get('fee-head/read', [feeheadcontroller::class, 'read'])->name('fee-head.read');
        Route::get('fee-head/delete/{id}', [feeheadcontroller::class, 'delete'])->name('fee-head.delete');
        Route::get('fee-head/edit/{id}', [feeheadcontroller::class, 'edit'])->name('fee-head.edit');
        Route::post('fee-head/update', [feeheadcontroller::class, 'update'])->name('fee-head.update');

        //   fees structure management
        Route::get('fee-structure/create', [feestructurecontroller::class, 'index'])->name('fee-structure.create');
        Route::post('fee-structure/store', [feestructurecontroller::class, 'store'])->name('fee-structure.store');
        Route::get('fee-structure/read', [feestructurecontroller::class, 'read'])->name('fee-structure.read');
        Route::get('fee-structure/delete/{id}', [feestructurecontroller::class, 'delete'])->name('fee-structure.delete');
        Route::get('fee-structure/edit/{id}', [feestructurecontroller::class, 'edit'])->name('fee-structure.edit');
        Route::post('fee-structure/update{id}', [feestructurecontroller::class, 'update'])->name('fee-structure.update');


       // student info management
       Route::get('student/create', [studentcontroller::class, 'index'])->name('student.create');
       Route::post('student/store', [studentcontroller::class, 'store'])->name('student.store');
       Route::get('student/read', [studentcontroller::class, 'read'])->name('student.read');
       Route::get('student/delete/{id}', [studentcontroller::class, 'delete'])->name('student.delete');
       Route::get('student/edit/{id}', [studentcontroller::class, 'edit'])->name('student.edit');
       Route::post('student/update{id}', [studentcontroller::class, 'update'])->name('student.update');

       // announcement management
       Route::get('announcement/create', [AnnouncementController::class, 'index'])->name('announcement.create');
       Route::post('announcement/store', [AnnouncementController::class, 'store'])->name('announcement.store');
       Route::get('announcement/read', [AnnouncementController::class, 'read'])->name('announcement.read');
       Route::get('announcement/delete/{id}', [AnnouncementController::class, 'delete'])->name('announcement.delete');
       Route::get('announcement/edit/{id}', [AnnouncementController::class, 'edit'])->name('announcement.edit');
       Route::post('announcement/update{id}', [AnnouncementController::class, 'update'])->name('announcement.update');

     //subject management
     Route::get('subject/create', [SubjectController::class, 'index'])->name('subject.create');
     Route::post('subject/store', [SubjectController::class, 'store'])->name('subject.store');
     Route::get('subject/read', [SubjectController::class, 'read'])->name('subject.read');
     Route::get('subject/delete/{id}', [SubjectController::class, 'delete'])->name('subject.delete');
     Route::get('subject/edit/{id}', [SubjectController::class, 'edit'])->name('subject.edit');
     Route::post('subject/update{id}', [SubjectController::class, 'update'])->name('subject.update');

     // assign subjet class manage
        Route::get('assign-subject/create', [AssignsubjecttoclassController::class, 'index'])->name('assign-subject.create');
        Route::post('assign-subject/store', [AssignsubjecttoclassController::class, 'store'])->name('assign-subject.store');
        Route::get('assign-subject/read', [AssignsubjecttoclassController::class, 'read'])->name('assign-subject.read');
        Route::get('assign-subject/delete/{id}', [AssignsubjecttoclassController::class, 'delete'])->name('assign-subject.delete');
        Route::get('assign-subject/edit/{id}', [AssignsubjecttoclassController::class, 'edit'])->name('assign-subject.edit');
        Route::post('assign-subject/update{id}', [AssignsubjecttoclassController::class, 'update'])->name('assign-subject.update');

     // assign teacher to  calss
        Route::get('assign-teacher/create', [AssignteachertoclassController::class, 'index'])->name('assign-teacher.create');
        Route::get('findSubject', [AssignteachertoclassController::class, 'findSubject'])->name('findSubject');
        Route::post('assign-teacher/store', [AssignteachertoclassController::class, 'store'])->name('assign-teacher.store');
        Route::get('assign-teacher/read', [AssignteachertoclassController::class, 'read'])->name('assign-teacher.read');
        Route::get('assign-teacher/delete/{id}', [AssignteachertoclassController::class, 'delete'])->name('assign-teacher.delete');
        Route::get('assign-teacher/edit/{id}', [AssignteachertoclassController::class, 'edit'])->name('assign-teacher.edit');
        Route::post('assign-teacher/update/{id}', [AssignteachertoclassController::class, 'update'])->name('assign-teacher.update');

        // teacher management
        Route::get('teacher/create',[teachercontroller::class,'index'])->name('teacher.create');
        Route::post('teacher/store', [teachercontroller::class, 'store'])->name('teacher.store');
        Route::get('teacher/read', [teachercontroller::class, 'read'])->name('teacher.read');
        Route::get('teacher/delete/{id}', [teachercontroller::class, 'delete'])->name('teacher.delete');
        Route::get('teacher/edit/{id}', [teachercontroller::class, 'edit'])->name('teacher.edit');
        Route::post('teacher/update{id}', [teachercontroller::class, 'update'])->name('teacher.update');





    });

    // Route::get('clear', function (){
    //     Artisan::call('optimize:clear');
    //     return redirect()->back()->with('success','successfully');
    // })->name('cache.clear');

});
