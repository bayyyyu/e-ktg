<?php

namespace App\Http\Controllers\BackendControllers;

use App\Models\WisataBahari;

class AdminWisataBahariController extends Controller
{
    function index()
    {
        $data['list_wisata_bahari'] = WisataBahari::all();
        return view('backend.WisataBahari.index', $data);
    }
    function create()
    {
        return view('backend.WisataBahari.create');
    }
    function store()
    {
        $wisata_bahari = new WisataBahari();
        $wisata_bahari->nama = request('nama');
        $wisata_bahari->deskripsi = request('deskripsi');
        $wisata_bahari->kategori = request('kategori');
        $wisata_bahari->save();

        $wisata_bahari->handleUploadFoto();
        return redirect('backend/WisataBahari')->with('success', 'Data Berhasil Ditambahkan');
    }

    function show(WisataBahari $wisata_bahari)
    {
        $data['wisata_bahari'] = $wisata_bahari;
        return view('backend.WisataBahari.show', $data);
    }

    function edit(WisataBahari $wisata_bahari)
    {
        $data['wisata_bahari'] = $wisata_bahari;
        return view('backend.WisataBahari.edit', $data);
    }

    function update(WisataBahari $wisata_bahari)
    {
        $wisata_bahari->nama = request('nama');
        $wisata_bahari->deskripsi = request('deskripsi');
        $wisata_bahari->kategori = request('kategori');
        $wisata_bahari->save();

        $wisata_bahari->handleUploadFoto();
        return redirect('backend/WisataBahari')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(WisataBahari $wisata_bahari)
    {
        $wisata_bahari->handleDelete();
        $wisata_bahari->delete();

        return redirect('backend/WisataBahari')->with('danger', 'Data Berhasil Dihapus');
    }
}
