<?php

namespace App\Http\Controllers\FrontViewControllers;

use App\Models\WisataBudaya;

class WisataBudayaController extends Controller
{
    function index()
    {
        $data['list_wisata_budaya'] = WisataBudaya::all();
        $data['list_wisata_budaya'] = WisataBudaya::paginate(6);
        return view('front-view.AtraksiWisata.WisataBudaya.index', $data);
    }

    function show(WisataBudaya $wisata_budaya)
    {
        $data['wisata_budaya'] = $wisata_budaya;
        $data['list_wisata_budaya'] = WisataBudaya::all();
        return view('front-view.AtraksiWisata.WisataBudaya.show', $data);
    }
}
