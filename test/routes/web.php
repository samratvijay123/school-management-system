<?php
use App\Http\Controllers\SampleController;
use Illuminate\Support\Facades\Route;
use App\HTTP\Middleware\midware;



// Middleware group for routes that require 'midware'

Route::middleware(['midware'])->group(function() {
    // Route::get('/masterview', [FormController::class, 'masterview']);
    // Route::get('/home', [FormController::class, 'home']);
    // Route::get('/grocery', [FormController::class, 'grocery']);
    // Route::get('/allproduct', [FormController::class, 'allproduct']);
    // Route::get('/conform_buy', [FormController::class, 'conform_buy']);
});

Route::get('/fast',[samplecontroller::class,'ram']);

    Route::get('/masterview', [FormController::class, 'masterview']);
    Route::get('/home', [SampleController::class, 'index']);
    Route::get('/grocery', [FormController::class, 'grocery']);
    Route::get('/allproduct', [FormController::class, 'allproduct']);
    Route::get('/conform_buy', [FormController::class, 'conform_buy']);
    Route::get('/cart',[FormController::class,'cart']);
// Route::get('/logout',[FormController::class,'logout']);
   Route::get('/login', [FormController::class, 'login'])->name('login');
// Route::get('/login', [FormController::class, 'login']);

Route::post('/formm',[FormController::class,'login_check']);
Route::get('/signup', [FormController::class, 'form']);
Route::post('/register', [FormController::class, 'sign_up']);
Route::post('/Buy', [FormController::class, 'Buy']);
Route::get('/wish', [FormController::class, 'wish']);
Route::get('/forget', [FormController::class, 'forget']);
Route::post('/reset', [FormController::class, 'reset'])->name('reset'); 
Route::get('/profile',[FormController::class,'profile']);

// Use a different method for


// from here start new web design school management
Route::get('/newweb', [SampleController::class, 'newweb'])->name('newweb');
