<?php

use App\Http\Controllers\EmployeeController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;


// Route::get();
// Route::post():
// Route::put();
// Route::patch();
// Route::delete();
// Route::option();

// Common routes naming
// index - Show all data or students
// show - show single data or student
// create - show a form to a user
// store - store a data
// edit - show form to edit a data
//update - update data
//destroy - delete

// Route::get('/', [StudentController::class, 'index'] );
// Route::get('/login', [UserController::class,'create'] );

// Route::get('/users', [UserController::class,'index'] );
// Route::get('/user/{$id}', [UserController::class,'show'] );

Route::get('/', [StudentController::class, 'index'])->Middleware('auth', 'verified');

Route::get('/login', [UserController::class, 'login'])->name('login');

Route::post('/login/process', [UserController::class, 'process']);
Route::get('/register', [UserController::class, 'register'])->middleware('guest');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::post('/store', [UserController::class, 'store']);

Route::get('/add/student', [StudentController::class, 'create']);
Route::post('/add/student', [StudentController::class, 'store']);


// handle verify email notice
Route::get('/email/verify', [UserController::class, 'verifyNotice'])->middleware('auth')->name('verification.notice');

// email verification handler route
Route::get('/email/verify/{id}/{hash}', [UserController::class, 'verifyEmail'])->middleware(['auth', 'signed'])->name('verification.verify');

//resending verification
Route::post('/email/verification-notification', [UserController::class, 'verifyHandler' ])
->middleware(['auth', 'throttle:6,1'])->name('verification.send');




// Employee Route
route::get('/employee', [EmployeeController::class, 'employee']);
Route::get('/employees/{id}/employees_profile', [EmployeeController::class, 'employees_profile']);
Route::get('/employees/{id}/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::post('/employees/{id}/updatePicture', [EmployeeController::class, 'updatePicture'])->name('employee.updatePicture');
// Route::get('/users', [UserController::class, 'index'])->name('login');



