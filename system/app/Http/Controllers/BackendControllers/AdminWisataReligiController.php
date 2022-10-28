<?php

namespace App\Http\Controllers\BackendControllers;

use App\Models\WisataReligi;

class AdminWisataReligiController extends Controller
{
    function index()
    {
        $data['list_wisata_religi'] = WisataReligi::all();
        return view('backend.WisataReligi.index', $data);
    }
    function create()
    {
        return view('backend.WisataReligi.create');
    }
    function store()
    {
        $wisata_religi = new WisataReligi();
        $wisata_religi->nama = request('nama');
        $wisata_religi->deskripsi = request('deskripsi');
        $wisata_religi->kategori = request('kategori');
        $wisata_religi->save();

        $wisata_religi->handleUploadFoto();
        return redirect('backend/WisataReligi')->with('success', 'Data Berhasil Ditambahkan');
    }

    function show(WisataReligi $wisata_religi)
    {
        $data['wisata_religi'] = $wisata_religi;
        return view('backend.WisataReligi.show', $data);
    }

    function edit(WisataReligi $wisata_religi)
    {
        $data['wisata_religi'] = $wisata_religi;
        return view('backend.WisataReligi.edit', $data);
    }

    function update(WisataReligi $wisata_religi)
    {
        $wisata_religi->nama = request('nama');
        $wisata_religi->deskripsi = request('deskripsi');
        $wisata_religi->kategori = request('kategori');
        $wisata_religi->save();

        $wisata_religi->handleUploadFoto();
        return redirect('backend/WisataReligi')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(WisataReligi $wisata_religi)
    {
        $wisata_religi->handleDelete();
        $wisata_religi->delete();

        return redirect('backend/WisataReligi')->with('danger', 'Data Berhasil Dihapus');
    }
}
