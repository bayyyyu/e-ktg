<?php

namespace App\Http\Controllers\FrontViewControllers;

use App\Models\AtraksiWisata;
use App\Models\WisataBahari;

class WisataBahariController extends Controller
{
    function index()
    {
        $data['list_wisata_bahari'] = WisataBahari::all();
        $data['list_wisata_bahari'] = WisataBahari::paginate(6);
        return view('front-view.AtraksiWisata.WisataBahari.index', $data);
    }

    function show(WisataBahari $wisata_bahari)
    {
        $data['wisata_bahari'] = $wisata_bahari;
        return view('front-view.AtraksiWisata.WisataBahari.show', $data);
    }
}
