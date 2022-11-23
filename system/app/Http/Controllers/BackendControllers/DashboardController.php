<?php

namespace App\Http\Controllers\BackendControllers;

use App\Models\DesaWisata;
use App\Models\KalenderWisata;
use App\Models\WisataBahari;
use App\Models\WisataBudaya;
use App\Models\WisataKota;
use App\Models\WisataKuliner;
use App\Models\WisataReligi;
use App\Models\WisataRimba;

class DashboardController extends Controller
{

    function index()
    {
        $desa_wisata = DesaWisata::count();
        $kalender_wisata = KalenderWisata::count();
        // $wisata_bahari = WisataBahari::count();
        // $wisata_budaya = WisataBudaya::count();
        // $wisata_kuliner = WisataKuliner::count();
        // $wisata_rimba = WisataRimba::count();
        // $wisata_kota = WisataKota::count();
        // $wisata_religi = WisataReligi::count();
        return view('backend.dashboard.index', compact('desa_wisata','kalender_wisata'));
    }


}
