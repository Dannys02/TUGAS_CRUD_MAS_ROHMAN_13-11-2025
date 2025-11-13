<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MajorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form/create', [MajorController::class, 'create']);

Route::get('/form/index', [MajorController::class, 'index']);

Route::post('/form/store', [MajorController::class, 'store']);

Route::get('/form/edit/{id}', [MajorController::class, 'edit']);

Route::put('/form/update/{id}', [MajorController::class, 'update']);

Route::delete('/form/delete/{id}', [MajorController::class, 'massDelete'])->name('majors_name.massDelete');

Route::get('/form/edit', function () {
    return view('edit');
});
