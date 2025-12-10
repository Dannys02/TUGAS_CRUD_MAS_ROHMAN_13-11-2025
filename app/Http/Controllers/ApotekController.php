<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApotekController extends Controller
{
    public function index()
    {
        return "Halaman Home"; 
    }

    public function apotek()
    {
        return "Halaman Apotek";
    }

    public function pelayanan()
    {
        return "Halaman Pelayanan";
    }

    public function obat()
    {
        return "Halaman Obat";
    }

    public function gallery()
    {
        return "Halaman Gallery";
    }
}
