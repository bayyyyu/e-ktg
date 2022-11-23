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
        $data['list_atraksi_wisata'] = AtraksiWisata::all();
        return view('backend.AtraksiWisata.create', $data);
    }
    function store()
    {
        $atraksi_wisata = new AtraksiWisata();
        $atraksi_wisata->nama = request('nama');
        $atraksi_wisata->kategori = request('kategori');
        $atraksi_wisata->deskripsi = request('deskripsi');
        $atraksi_wisata->nama_pengelola = request('nama_pengelola');
        $atraksi_wisata->no_pengelola = request('no_pengelola');
        $atraksi_wisata->hari_buka = request('hari_buka');
        $atraksi_wisata->jam_buka = request('jam_buka');
        $atraksi_wisata->jam_tutup = request('jam_tutup');
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
        $atraksi_wisata->nama = request('nama');
        if (request('deskripsi')) $atraksi_wisata->deskripsi = (request('deskripsi'));
        $atraksi_wisata->kategori = request('kategori');
        $atraksi_wisata->nama_pengelola = request('nama_pengelola');
        $atraksi_wisata->no_pengelola = request('no_pengelola');
        $atraksi_wisata->hari_buka = request('hari_buka');
        $atraksi_wisata->jam_buka = request('jam_buka');
        $atraksi_wisata->jam_tutup = request('jam_tutup');
        $atraksi_wisata->save();

        if (request('foto')) $atraksi_wisata->handleUploadFoto();
        return redirect('backend/AtraksiWisata')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(AtraksiWisata $atraksi_wisata)
    {
        $atraksi_wisata->handleDelete();
        $atraksi_wisata->delete();

        return redirect('backend/AtraksiWisata')->with('danger', 'Data Berhasil Dihapus');
    }
}
