<?php

namespace App\Http\Controllers;

use App\Models\MajorsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


abstract class Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $majors = $request->validate([
            "majors_name" => "required|string|max:255"
        ]);
        DB::table('majors')->insert([
            'majors_name' => $majors['majors_name'],
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect('/form/index')->with('success', 'Registrer Student successfully');
    }

    public function edit($id)
    {
        $majors = MajorsModel::find($id);
        return view('edit', compact('majors'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'majors_name' => 'required|string|max:255',
        ]);

        MajorsModel::where('id', $id)->update([
            'majors_name' => $validated['majors_name'],
            'updated_at' => now()
        ]);

        return redirect('/form/index')->with('success', 'Data updated successfully');
    }

    public function massDelete($id)
    {
        MajorsModel::where('id', $id)->delete();
        return redirect('/form/index/')->with('success', 'Major deleted successfully');
    }

    public function index()
    {
        $majors = MajorsModel::all();
        return view('index', compact('majors'));
    }
}
