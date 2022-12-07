<?php

namespace App\Http\Controllers\FrontViewControllers;

use App\Models\AtraksiWisata;
use App\Models\DesaWisata;

class PetaWisataController extends Controller
{
    function index()
    {
        $data['list_atraksi_wisata'] = AtraksiWisata::all();
        $data['list_desa_wisata'] = DesaWisata::all();
        return view('front-view.PetaWisata.index', $data);
    }
}
