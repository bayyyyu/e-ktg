<?php

namespace App\Http\Controllers\BackendControllers;

use App\Models\WisataBudaya;

class AdminWisataBudayaController extends Controller
{
    function index()
    {
        $data['list_wisata_budaya'] = WisataBudaya::all();
        return view('backend.WisataBudaya.index', $data);
    }
    function create()
    {
        return view('backend.WisataBudaya.create');
    }
    function store()
    {
        $wisata_budaya = new WisataBudaya();
        $wisata_budaya->nama = request('nama');
        $wisata_budaya->deskripsi = request('deskripsi');
        $wisata_budaya->kategori = request('kategori');
        $wisata_budaya->save();

        $wisata_budaya->handleUploadFoto();
        return redirect('backend/WisataBudaya')->with('success', 'Data Berhasil Ditambahkan');
    }

    function show(WisataBudaya $wisata_budaya)
    {
        $data['wisata_budaya'] = $wisata_budaya;
        return view('backend.WisataBudaya.show', $data);
    }

    function edit(WisataBudaya $wisata_budaya)
    {
        $data['wisata_budaya'] = $wisata_budaya;
        return view('backend.WisataBudaya.edit', $data);
    }

    function update(WisataBudaya $wisata_budaya)
    {
        $wisata_budaya->nama = request('nama');
        $wisata_budaya->deskripsi = request('deskripsi');
        $wisata_budaya->kategori = request('kategori');
        $wisata_budaya->save();

        $wisata_budaya->handleUploadFoto();
        return redirect('backend/WisataBudaya')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(WisataBudaya $wisata_budaya)
    {
        $wisata_budaya->handleDelete();
        $wisata_budaya->delete();

        return redirect('backend/WisataBudaya')->with('danger', 'Data Berhasil Dihapus');
    }
}
