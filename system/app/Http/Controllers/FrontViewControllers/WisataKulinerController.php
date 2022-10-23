<?php

namespace App\Http\Controllers\FrontViewControllers;

use App\Models\AtraksiWisata;
use App\Models\WisataKuliner;

class WisataKulinerController extends Controller
{
    function index()
    {
        $data['list_wisata_kuliner'] = WisataKuliner::all();
        $data['list_wisata_kuliner'] = WisataKuliner::paginate(6);
        return view('front-view.AtraksiWisata.WisataKuliner.index', $data);
    }

    function show(WisataKuliner $wisata_kuliner)
    {
        $data['wisata_kuliner'] = $wisata_kuliner;
        return view('front-view.AtraksiWisata.WisataKuliner.show', $data);
    }
}
