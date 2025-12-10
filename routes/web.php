<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\subjectController;
use App\Http\Controllers\ApotekController;

Route::get("/", function () {
  return view("welcome");
});

// Major Table
Route::get("/form/create", [MajorController::class, "create"]);
Route::get("/form/index", [MajorController::class, "index"]);
Route::post("/form/store", [MajorController::class, "store"]);
Route::get("/form/edit/{id}", [MajorController::class, "edit"]);
Route::put("/form/update/{id}", [MajorController::class, "update"]);
Route::delete("/form/delete/{id}", [
  MajorController::class,
  "massDelete",
])->name("majors_name.massDelete");
Route::get("/form/edit", function () {
  return view("edit");
});

// Student Table
Route::get("/student/index", [StudentController::class, "index"])->name(
  "student.index"
);
Route::get("/student", [StudentController::class, "create"]);
Route::post("/student/store", [StudentController::class, "store"]);
Route::get("/student/edit/{id}", [StudentController::class, "edit"]);
Route::put("/student/update/{id}", [StudentController::class, "update"]);
Route::delete("/student/delete/{id}", [StudentController::class, "destroy"]);

// Subject Table
Route::get("/subject", [subjectController::class, "create"]);
Route::post("/subject/store", [subjectController::class, "store"]);
Route::get("/subject/edit/{id}", [subjectController::class, "edit"]);
Route::put("/subject/update/{id}", [subjectController::class, "update"]);
Route::delete("/subject/delete/{id}", [subjectController::class, "destroy"]);
Route::get("/subject/index", [subjectController::class, "index"]);

// UJIAN PARAMETER OPSIONAL
Route::get("/biodata/{nama?}/{sekolah?}/{alamat?}", function ($nama = "'Nama kamu'", $sekolah = "'Sekolah kamu'", $alamat = "'Alamat kamu'" ) {
    return "Berikut biodata bernama $nama, sekolah di $sekolah, dan beralamat di $alamat";
});

// UJIAN APOTEK
Route::get("/home", [ApotekController::class, "index"]);
Route::get("/apotek", [ApotekController::class, "apotek"]);
Route::get("/pelayanan", [ApotekController::class, "pelayanan"]);
Route::get("/obat", [ApotekController::class, "obat"]);
Route::get("/gallery", [ApotekController::class, "gallery"]);
