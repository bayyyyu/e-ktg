<?php

namespace App\Http\Controllers\FrontViewControllers;

use App\Models\AtraksiWisata;
use App\Models\DesaWisata;

class KontakController extends Controller
{
    function index()
    {
        return view('front-view.Kontak.index');
    }
}
