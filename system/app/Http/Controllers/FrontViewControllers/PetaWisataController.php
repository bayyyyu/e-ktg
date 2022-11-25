<?php

namespace App\Http\Controllers\FrontViewControllers;

use App\Models\AtraksiWisata;

class PetaWisataController extends Controller
{
    function index()
    {
        $data['list_atraksi_wisata'] = AtraksiWisata::all();
        return view('front-view.PetaWisata.index', $data);
    }
}
