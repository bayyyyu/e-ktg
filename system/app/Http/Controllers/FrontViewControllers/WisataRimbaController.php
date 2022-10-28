<?php

namespace App\Http\Controllers\FrontViewControllers;

use App\Models\AtraksiWisata;
use App\Models\WisataRimba;

class WisataRimbaController extends Controller
{
    function index()
    {
        $data['list_wisata_rimba'] = WisataRimba::all();
        $data['list_wisata_rimba'] = WisataRimba::paginate(6);
        return view('front-view.AtraksiWisata.WisataRimba.index', $data);
    }

    function show(WisataRimba $wisata_rimba)
    {
        $data['wisata_rimba'] = $wisata_rimba;
        $data['list_wisata_rimba'] = WisataRimba::all();
        return view('front-view.AtraksiWisata.WisataRimba.show', $data);
    }
}
