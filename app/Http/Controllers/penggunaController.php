<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\penggunaModel;
class penggunaController extends Controller
{
    public function create()
    {
        return view("pengguna.register");
    }

    public function store(Request $request)
    {
        $pengguna = $request->validate([
            "name" => "required|max:255",
            "email" => "required|email",
            "password" => "required|min:8"
        ]);

        penggunaModel::table('pengguna')->insert([
            "name" => $pengguna['name'],
            "email" => $pengguna['email'],
            "password" => $pengguna['password'],
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect('/pengguna/index')->with('succes', 'register is succesfully');
    }

    public function index() {
        $pengguna = penggunaModel::all();

        return view('pengguna.indexPengguna', compact('pengguna'));
    }
}
