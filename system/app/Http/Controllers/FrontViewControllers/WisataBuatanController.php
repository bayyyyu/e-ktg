<?php

namespace App\Http\Controllers\FrontViewControllers;

use App\Models\WisataBuatan;

class WisataBuatanController extends Controller
{
    function index()
    {
        $data['list_wisata_buatan'] = WisataBuatan::all();
        $data['list_wisata_buatan'] = WisataBuatan::paginate(6);
        return view('front-view.AtraksiWisata.WisataBuatan.index', $data);
    }

    function show(WisataBuatan $wisata_buatan)
    {
        $data['wisata_buatan'] = $wisata_buatan;
        $data['list_wisata_buatan'] = WisataBuatan::all();
        return view('front-view.AtraksiWisata.WisataBuatan.show', $data);
    }
}
