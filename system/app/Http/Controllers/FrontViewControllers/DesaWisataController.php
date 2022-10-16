<?php

namespace App\Http\Controllers\FrontViewControllers;

use App\Models\DesaWisata;

class DesaWisataController extends Controller
{
    function index()
    {
        $data['list_desa_wisata'] = DesaWisata::all();
        return view('front-view.DesaWisata.index', $data);
    }
}
