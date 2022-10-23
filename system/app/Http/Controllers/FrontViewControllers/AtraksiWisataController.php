<?php

namespace App\Http\Controllers\FrontViewControllers;

use App\Models\AtraksiWisata;

class AtraksiWisataController extends Controller
{
    function index()
    {
        return view('front-view.AtraksiWisata.index');
    }
    
}
