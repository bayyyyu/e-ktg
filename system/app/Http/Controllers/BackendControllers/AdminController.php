<?php

namespace App\Http\Controllers\BackendControllers;

use App\Models\User;
use Auth;

class AdminController extends Controller {
    function index(){
        $data['list_admin'] = User::all();
        return view('backend.admin.index', $data);
    }
    function create()
    {
        return view('backend.admin.create');
    }
    function store()
    {
        $admin = new User();
        $admin->nama_lengkap = request('nama_lengkap');
        $admin->username = request('username');
        $admin->email = request('email');
        $admin->password = bcrypt(request('password'));
        $admin->save();

        $admin->handleUploadFoto();
        return redirect('backend/admin')->with('success', 'Data Berhasil Ditambahkan');
    }
    function show(User $admin)
    {
        $data['admin'] = $admin;
        return view('backend.admin.show', $data);
    }
    function edit(User $admin)
    {
        $data['admin'] = $admin;
        return view('backend.admin.edit', $data);
    }
    function update(User $admin)
    {
        $admin->nama_lengkap = request('nama_lengkap');
        $admin->username = request('username');
        $admin->email = request('email');
        if (request('password')) $admin->password = (request('password'));
        if (request('foto')) $admin->handleUploadFoto();
        $admin->save();
        return redirect('backend/admin')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(User $admin)
    {
        $admin->handleDelete();
        $admin->delete();

        return redirect('backend/admin')->with('danger', 'Data Berhasil Dihapus');
    }

}