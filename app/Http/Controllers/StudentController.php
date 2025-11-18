<?php

namespace App\Http\Controllers;

use App\Models\StudentModal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function create()
    {
        return view('student.createStudent');
    }

    public function store(Request $request)
    {
        $students = $request->validate([
            "name"   => "required|string|max:255",
            "class"  => "required|string|max:255",
            "phone"  => "required|string|max:20",
            "email"  => "required|email|max:255|unique:student,email",
            "gender" => "required|in:laki-laki,perempuan",
            "nisn"   => "required|string|max:20|unique:student,nisn",
        ]);
        DB::table('student')->insert([
            'name' => $students['name'],
            'class' => $students['class'],
            'phone' => $students['phone'],
            'email' => $students['email'],
            'gender' => $students['gender'],
            'nisn' => $students['nisn'],
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect('/student/index')->with('success', 'Registrer Student successfully');
    }

    public function edit($id)
    {
        $students = StudentModal::find($id);
        return view('student.editStudent', compact('students'));
    }

    public function update(Request $request, $id)
    {
        $students = $request->validate([
            "name"   => "required|string|max:255",
            "class"  => "required|string|max:255",
            "phone"  => "required|string|max:20",
            "email" => "required|email|max:255|unique:student,email," . $id,
            "gender" => "required|in:laki-laki,perempuan",
            "nisn"  => "required|string|max:20|unique:student,nisn," . $id,
        ]);

        $students = StudentModal::where('id', $id)->update([
            'name'   => $students['name'],
            'class'  => $students['class'],
            'phone'  => $students['phone'],
            'email'  => $students['email'],
            'gender' => $students['gender'],
            'nisn'   => $students['nisn'],
            'updated_at' => now()
        ]);

        return redirect('/student/index')->with('success', 'Data updated successfully');
    }

    public function destroy($id)
    {
        $students = StudentModal::findOrFail($id);
        $students->delete();

        return redirect('/student/index')->with('success', 'Data updated successfully');
    }

    public function index()
    {
        $students = StudentModal::all();
        return view('student.indexStudent', compact('students'));
    }
}
