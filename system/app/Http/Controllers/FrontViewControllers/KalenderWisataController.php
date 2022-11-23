<?php

namespace App\Http\Controllers\FrontViewControllers;

use App\Models\KalenderWisata;

class KalenderWisataController extends Controller
{
    function index()
    {
        $data['list_kalender_wisata'] = KalenderWisata::all();
        $data['list_kalender_wisata'] = KalenderWisata::paginate(6);
        return view('front-view.KalenderWisata.index', $data);
    }

    function show(KalenderWisata $kalender_wisata)
    {
        $data['kalender_wisata'] = $kalender_wisata;
        return view('front-view.KalenderWisata.show', $data);
    }
}
