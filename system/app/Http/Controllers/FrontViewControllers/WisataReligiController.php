<?php

namespace App\Http\Controllers\FrontViewControllers;

use App\Models\AtraksiWisata;
use App\Models\WisataReligi;

class WisataReligiController extends Controller
{
    function index()
    {
        $data['list_wisata_religi'] = WisataReligi::all();
        $data['list_wisata_religi'] = WisataReligi::paginate(6);
        return view('front-view.AtraksiWisata.WisataReligi.index', $data);
    }

    function show(WisataReligi $wisata_religi)
    {
        $data['wisata_religi'] = $wisata_religi;
        $data['list_wisata_religi'] = WisataReligi::all();
        return view('front-view.AtraksiWisata.WisataReligi.show', $data);
    }
}
