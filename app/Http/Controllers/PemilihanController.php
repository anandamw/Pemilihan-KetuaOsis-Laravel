<?php

namespace App\Http\Controllers;

use App\Models\Pemilihan;
use Illuminate\Http\Request;

class PemilihanController extends Controller
{
    public function index()
    {
        $dataPemilihan = [
            "getPemilihan" => Pemilihan::getAllPemilihan()
        ];

        return view('admin.pemilihans.pemilihan', $dataPemilihan);
    }
}
