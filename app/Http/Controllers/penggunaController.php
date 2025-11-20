<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class penggunaController extends Controller
{
    public function create() {
      return view("pengguna.register");
    }
    
    public function store(Request $request) {
      $pengguna = $request->validate([
        "name" => "required|max:255",
        "email" => "required|unique",
        "password" => "required|min:8"
        ]);
        
        DB::table("pengguna")->insert([
          
          ;])
    }
