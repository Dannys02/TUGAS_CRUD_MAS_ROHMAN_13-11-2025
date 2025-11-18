<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

// Major Table
Route::get('/form/create', [MajorController::class, 'create']);
Route::get('/form/index', [MajorController::class, 'index']);
Route::post('/form/store', [MajorController::class, 'store']);
Route::get('/form/edit/{id}', [MajorController::class, 'edit']);
Route::put('/form/update/{id}', [MajorController::class, 'update']);
Route::delete('/form/delete/{id}', [MajorController::class, 'massDelete'])->name('majors_name.massDelete');
Route::get('/form/edit', function () {
    return view('edit');
});

// Student Table
Route::get('/student/index', [StudentController::class, 'index'])->name('student.index');
Route::get('/student', [StudentController::class, 'create']);
Route::post('/', [StudentController::class, 'store']);
Route::get('/student/edit/{id}', [StudentController::class, 'edit']);
Route::put('/student/update/{id}', [StudentController::class, 'update']);
Route::delete('/student/delete/{id}', [StudentController::class, 'destroy']);
