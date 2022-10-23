<?php

namespace App\Http\Controllers\BackendControllers;

use App\Models\AtraksiWisata;


class AdminAtraksiWisataController extends Controller
{
    function index()
    {
        $data['list_atraksi_wisata'] = AtraksiWisata::all();
        return view('backend.AtraksiWisata.index', $data);
    }
    function create()
    {
        return view('backend.AtraksiWisata.create');
    }
    function store()
    {
        $atraksi_wisata = new AtraksiWisata();
        $atraksi_wisata->nama_atraksi_wisata = request('nama_atraksi_wisata');
        $atraksi_wisata->deskripsi = request('deskripsi');
        $atraksi_wisata->kategori = request('kategori');
        $atraksi_wisata->save();

        $atraksi_wisata->handleUploadFoto();
        return redirect('backend/AtraksiWisata')->with('success', 'Data Berhasil Ditambahkan');
    }

    function show(AtraksiWisata $atraksi_wisata)
    {
        $data['atraksi_wisata'] = $atraksi_wisata;
        return view('backend.AtraksiWisata.show', $data);
    }

    function edit(AtraksiWisata $atraksi_wisata)
    {
        $data['atraksi_wisata'] = $atraksi_wisata;
        return view('backend.AtraksiWisata.edit', $data);
    }

    function update(AtraksiWisata $atraksi_wisata)
    {
        $atraksi_wisata->nama_atraksi_wisata = request('nama_atraksi_wisata');
        $atraksi_wisata->deskripsi = request('deskripsi');
        $atraksi_wisata->kategori = request('kategori');
        $atraksi_wisata->save();

        $atraksi_wisata->handleUploadFoto();
        return redirect('backend/AtraksiWisata')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(AtraksiWisata $atraksi_wisata)
    {
        $atraksi_wisata->handleDelete();
        $atraksi_wisata->delete();

        return redirect('backend/AtraksiWisata')->with('danger', 'Data Berhasil Dihapus');
    }
}
