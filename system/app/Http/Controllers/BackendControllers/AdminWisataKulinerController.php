<?php

namespace App\Http\Controllers\BackendControllers;

use App\Models\WisataKuliner;

class AdminWisataKulinerController extends Controller
{
    function index()
    {
        $data['list_wisata_kuliner'] = WisataKuliner::all();
        return view('backend.WisataKuliner.index', $data);
    }
    function create()
    {
        return view('backend.WisataKuliner.create');
    }
    function store()
    {
        $wisata_kuliner = new WisataKuliner();
        $wisata_kuliner->nama = request('nama');
        $wisata_kuliner->deskripsi = request('deskripsi');
        $wisata_kuliner->kategori = request('kategori');
        $wisata_kuliner->save();

        $wisata_kuliner->handleUploadFoto();
        return redirect('backend/WisataKuliner')->with('success', 'Data Berhasil Ditambahkan');
    }

    function show(WisataKuliner $wisata_kuliner)
    {
        $data['wisata_kuliner'] = $wisata_kuliner;
        return view('backend.WisataKuliner.show', $data);
    }

    function edit(WisataKuliner $wisata_kuliner)
    {
        $data['wisata_kuliner'] = $wisata_kuliner;
        return view('backend.WisataKuliner.edit', $data);
    }

    function update(WisataKuliner $wisata_kuliner)
    {
        $wisata_kuliner->nama = request('nama');
        $wisata_kuliner->deskripsi = request('deskripsi');
        $wisata_kuliner->kategori = request('kategori');
        $wisata_kuliner->save();

        $wisata_kuliner->handleUploadFoto();
        return redirect('backend/WisataKuliner')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(WisataKuliner $wisata_kuliner)
    {
        $wisata_kuliner->handleDelete();
        $wisata_kuliner->delete();

        return redirect('backend/WisataKuliner')->with('danger', 'Data Berhasil Dihapus');
    }
}
