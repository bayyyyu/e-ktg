<?php

namespace App\Http\Controllers\FrontViewControllers;

use App\Models\AtraksiWisata;
use App\Models\WisataBahari;
use App\Models\WisataBudaya;
use App\Models\WisataKota;
use App\Models\WisataKuliner;
use App\Models\WisataReligi;
use App\Models\WisataRimba;

class AtraksiWisataController extends Controller
{
    function index()
    {
        $data['list_wisata_bahari'] = WisataBahari::all();
        $data['list_wisata_budaya'] = WisataBudaya::all();
        $data['list_wisata_kuliner'] = WisataKuliner::all();
        $data['list_wisata_rimba'] = WisataRimba::all();
        $data['list_wisata_kota'] = WisataKota::all();
        $data['list_wisata_religi'] = WisataReligi::all();
        return view('front-view.AtraksiWisata.index',$data);
    }
    
}
