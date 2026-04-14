<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $data = [
            ["judul" => "Pemrograman Web", "penulis" => "Andi"],
            ["judul" => "Basis Data", "penulis" => "Budi"],
            ["judul" => "Algoritma", "penulis" => "Citra"],
        ];

        return view('product', compact('data'));
    }
}
