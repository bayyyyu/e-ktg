<?php

namespace App\Http\Controllers\FrontViewControllers;

use App\Models\AtraksiWisata;

class AtraksiWisataController extends Controller
{
    function index()
    {
        $data['list_atraksi_wisata'] = AtraksiWisata::all();
        return view('front-view.AtraksiWisata.index',$data);
    }

    function index2()
    {
        $data['list_atraksi_wisata'] = AtraksiWisata::all();
        
        return view('front-view.AtraksiWisata.WisataAlam.index', $data);
    }
    function index3()
    {
        $data['list_atraksi_wisata'] = AtraksiWisata::all();
        
        return view('front-view.AtraksiWisata.WisataBudaya.index', $data);
    }
    function index4()
    {
        $data['list_atraksi_wisata'] = AtraksiWisata::all();
        
        return view('front-view.AtraksiWisata.WisataBuatan.index', $data);
    }

    function show(AtraksiWisata $atraksi_wisata)
    {
        $data['atraksi_wisata'] = $atraksi_wisata;
        $data['recent_upload'] = AtraksiWisata::orderBy('id', 'DESC')->take(3)->where('kategori','Wisata Alam')->get();
        return view('front-view.AtraksiWisata.WisataAlam.show', $data);
    }

    function show2(AtraksiWisata $atraksi_wisata)
    {
        $data['atraksi_wisata'] = $atraksi_wisata;
        $data['recent_upload'] = AtraksiWisata::orderBy('id', 'DESC')->take(3)->where('kategori', 'Wisata Budaya')->get();
        return view('front-view.AtraksiWisata.WisataBudaya.show', $data);
    }

    function show3(AtraksiWisata $atraksi_wisata)
    {
        $data['atraksi_wisata'] = $atraksi_wisata;
        $data['recent_upload'] = AtraksiWisata::orderBy('id', 'DESC')->take(3)->where('kategori', 'Wisata Buatan')->get();
        return view('front-view.AtraksiWisata.WisataBuatan.show', $data);
    }
}
