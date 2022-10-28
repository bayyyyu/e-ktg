<?php

namespace App\Http\Controllers\BackendControllers;

use App\Models\WisataRimba;

class AdminWisataRimbaController extends Controller
{
    function index()
    {
        $data['list_wisata_rimba'] = WisataRimba::all();
        return view('backend.WisataRimba.index', $data);
    }
    function create()
    {
        return view('backend.WisataRimba.create');
    }
    function store()
    {
        $wisata_rimba = new WisataRimba();
        $wisata_rimba->nama = request('nama');
        $wisata_rimba->deskripsi = request('deskripsi');
        $wisata_rimba->kategori = request('kategori');
        $wisata_rimba->save();

        $wisata_rimba->handleUploadFoto();
        return redirect('backend/WisataRimba')->with('success', 'Data Berhasil Ditambahkan');
    }

    function show(WisataRimba $wisata_rimba)
    {
        $data['wisata_rimba'] = $wisata_rimba;
        return view('backend.WisataRimba.show', $data);
    }

    function edit(WisataRimba $wisata_rimba)
    {
        $data['wisata_rimba'] = $wisata_rimba;
        return view('backend.WisataRimba.edit', $data);
    }

    function update(WisataRimba $wisata_rimba)
    {
        $wisata_rimba->nama = request('nama');
        $wisata_rimba->deskripsi = request('deskripsi');
        $wisata_rimba->kategori = request('kategori');
        $wisata_rimba->save();

        $wisata_rimba->handleUploadFoto();
        return redirect('backend/WisataRimba')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(WisataRimba $wisata_rimba)
    {
        $wisata_rimba->handleDelete();
        $wisata_rimba->delete();

        return redirect('backend/WisataRimba')->with('danger', 'Data Berhasil Dihapus');
    }
}
