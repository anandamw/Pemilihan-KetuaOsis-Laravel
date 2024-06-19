<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use Illuminate\Http\Request;

class KandidatController extends Controller
{
    public function index()
    {
        $dataKandidat = [
            'getKandidat' => Kandidat::all(),
        ];

        return view('admin.kandidats.kandidat', $dataKandidat);
    }
}
