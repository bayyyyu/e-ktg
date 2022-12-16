<?php

namespace App\Http\Controllers\BackendControllers;

use App\Models\KalenderWisata;

class AdminKalenderWisataController extends Controller
{
    function index()
    {
        $admin = request()->user();
        $data['list_kalender_wisata'] = $admin->kalender_wisata;
        return view('backend.KalenderWisata.index', $data);
    }
    function create()
    {
        return view('backend.KalenderWisata.create');
    }
    function store()
    {
        $kalender_wisata = new KalenderWisata();
        $kalender_wisata->id_user = request()->user()->id;
        $kalender_wisata->nama = request('nama');
        $kalender_wisata->isi = request('isi');
        $kalender_wisata->tempat = request('tempat');
        $kalender_wisata->tanggal = request('tanggal');
        $kalender_wisata->bulan = request('bulan');
        $kalender_wisata->foto = request('foto');
        $kalender_wisata->save();

        $kalender_wisata->handleUploadFoto();
        return redirect('backend/KalenderWisata')->with('success', 'Data Berhasil Ditambahkan');
    }

    function show(KalenderWisata $kalender_wisata)
    {
        $data['kalender_wisata'] = $kalender_wisata;
        return view('backend.KalenderWisata.show', $data);
    }

    function edit(KalenderWisata $kalender_wisata)
    {
        $data['kalender_wisata'] = $kalender_wisata;
        return view('backend.KalenderWisata.edit', $data);
    }

    function update(KalenderWisata $kalender_wisata)
    {
        $kalender_wisata->nama = request('nama');
        if (request('isi')) $kalender_wisata->isi = (request('isi'));
        $kalender_wisata->tempat = request('tempat');
        if (request('tanggal')) $kalender_wisata->tanggal = (request('tanggal'));
        $kalender_wisata->bulan = request('bulan');
        if (request('foto')) $kalender_wisata->handleUploadFoto();
        $kalender_wisata->save();
        return redirect('backend/KalenderWisata')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(KalenderWisata $kalender_wisata)
    {
        $kalender_wisata->handleDelete();
        $kalender_wisata->delete();

        return redirect('backend/KalenderWisata')->with('danger', 'Data Berhasil Dihapus');
    }
    
}
