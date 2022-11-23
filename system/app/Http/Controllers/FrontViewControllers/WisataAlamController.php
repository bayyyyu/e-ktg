<?php

namespace App\Http\Controllers\FrontViewControllers;

use App\Models\WisataAlam;

class WisataAlamController extends Controller
{
    function index()
    {
        $data['list_wisata_alam'] = WisataAlam::all();
        $data['list_wisata_alam'] = WisataAlam::paginate(6);
        return view('front-view.AtraksiWisata.WisataAlam.index', $data);
    }

    function show(WisataAlam $wisata_alam)
    {
        $data['wisata_alam'] = $wisata_alam;
        $data['list_wisata_alam'] = WisataAlam::all();
        return view('front-view.AtraksiWisata.WisataAlam.show', $data);
    }
}
