<?php

namespace App\Http\Controllers\BackendControllers;

use App\Models\WisataKota;

class AdminWisataKotaController extends Controller
{
    function index()
    {
        $data['list_wisata_kota'] = WisataKota::all();
        return view('backend.WisataKota.index', $data);
    }
    function create()
    {
        return view('backend.WisataKota.create');
    }
    function store()
    {
        $wisata_kota = new WisataKota();
        $wisata_kota->nama = request('nama');
        $wisata_kota->deskripsi = request('deskripsi');
        $wisata_kota->kategori = request('kategori');
        $wisata_kota->save();

        $wisata_kota->handleUploadFoto();
        return redirect('backend/WisataKota')->with('success', 'Data Berhasil Ditambahkan');
    }

    function show(WisataKota $wisata_kota)
    {
        $data['wisata_kota'] = $wisata_kota;
        return view('backend.WisataKota.show', $data);
    }

    function edit(WisataKota $wisata_kota)
    {
        $data['wisata_kota'] = $wisata_kota;
        return view('backend.WisataKota.edit', $data);
    }

    function update(WisataKota $wisata_kota)
    {
        $wisata_kota->nama = request('nama');
        $wisata_kota->deskripsi = request('deskripsi');
        $wisata_kota->kategori = request('kategori');
        $wisata_kota->save();

        $wisata_kota->handleUploadFoto();
        return redirect('backend/WisataKota')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(WisataKota $wisata_kota)
    {
        $wisata_kota->handleDelete();
        $wisata_kota->delete();

        return redirect('backend/WisataKota')->with('danger', 'Data Berhasil Dihapus');
    }
}
