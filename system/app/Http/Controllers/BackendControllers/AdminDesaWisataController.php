<?php

namespace App\Http\Controllers\BackendControllers;

use App\Models\DesaWisata;

class AdminDesaWisataController extends Controller
{
    function index()
    {
        $data['list_desa_wisata']= DesaWisata::all();
        return view('backend.DesaWisata.index', $data);
    }
    function create()
    {
        return view('backend.DesaWisata.create');
    }
    function store()
    {
        $desa_wisata = new DesaWisata();
        $desa_wisata->nama_desa_wisata = request('nama_desa_wisata');
        $desa_wisata->deskripsi = request('deskripsi');
        $desa_wisata->link_jadesta = request('link_jadesta');
        $desa_wisata->save();

        $desa_wisata->handleUploadFoto();
        return redirect('backend/DesaWisata')->with('success', 'Data Berhasil Ditambahkan');
    }

    function show(DesaWisata $desa_wisata)
    {
        $data['desa_wisata'] = $desa_wisata;
        return view('backend.DesaWisata.show', $data);
    }

    function edit(DesaWisata $desa_wisata)
    {
        $data['desa_wisata'] = $desa_wisata;
        return view('backend.DesaWisata.edit', $data);
    }

    function update(DesaWisata $desa_wisata)
    {
        $desa_wisata->nama_desa_wisata = request('nama_desa_wisata');
        $desa_wisata->deskripsi = request('deskripsi');
        $desa_wisata->link_jadesta = request('link_jadesta');
        $desa_wisata->save();

        $desa_wisata->handleUploadFoto();
        return redirect('backend/DesaWisata')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(DesaWisata $desa_wisata)
    {
        $desa_wisata->handleDelete();
        $desa_wisata->delete();

        return redirect('backend/DesaWisata')->with('danger', 'Data Berhasil Dihapus');
    }

}
