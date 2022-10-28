<?php

namespace App\Http\Controllers\FrontViewControllers;

use App\Models\AtraksiWisata;
use App\Models\WisataKota;

class WisataKotaController extends Controller
{
    function index()
    {
        $data['list_wisata_kota'] = WisataKota::all();
        $data['list_wisata_kota'] = WisataKota::paginate(6);
        return view('front-view.AtraksiWisata.WisataKota.index', $data);
    }

    function show(WisataKota $wisata_kota)
    {
        $data['wisata_kota'] = $wisata_kota;
        return view('front-view.AtraksiWisata.WisataKota.show', $data);
    }
}
