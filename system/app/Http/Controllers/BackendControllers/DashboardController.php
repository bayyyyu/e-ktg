<?php

namespace App\Http\Controllers\BackendControllers;

use App\Models\AtraksiWisata;
use App\Models\DesaWisata;
use App\Models\KalenderWisata;

class DashboardController extends Controller
{

    function index()
    {
        $desa_wisata = DesaWisata::count();
        $kalender_wisata = KalenderWisata::count();
        $atraksi_wisata = AtraksiWisata::count();
        return view('backend.dashboard.index', compact('desa_wisata','kalender_wisata','atraksi_wisata'));
    }


}
