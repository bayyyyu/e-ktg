<?php

use App\Http\Controllers\BackendControllers\BackendController;
use App\Http\Controllers\BackendControllers\DashboardController;
use App\Http\Controllers\BackendControllers\AdminController;
use App\Http\Controllers\BackendControllers\AdminDesaWisataController;
use App\Http\Controllers\BackendControllers\AdminAtraksiWisataController;
use App\Http\Controllers\BackendControllers\AdminWisataBahariController;
use App\Http\Controllers\BackendControllers\AdminWisataBudayaController;
use App\Http\Controllers\BackendControllers\AdminWisataKulinerController;

use App\Http\Controllers\BackendControllers\AuthController;


use App\Http\Controllers\FrontViewControllers\DesaWisataController;
use App\Http\Controllers\FrontViewControllers\AtraksiWisataController;
use App\Http\Controllers\FrontViewControllers\WisataBahariController;
use App\Http\Controllers\FrontViewControllers\WisataBudayaController;
use App\Http\Controllers\FrontViewControllers\WisataKulinerController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('template', function () {
    return view('template.base');
});

Route::get('atraksiWisata', function () {
    return view('front-view.atraksiWisata');
});
// Route::get('desaWisata', function () {
//     return view('front-view.desaWisata');
// });

Route::get('adminBase', function () {
    return view('backend.template.adminBase');
});


// backend
Route::get('backend/dashboard', [BackendController::class, 'showDashboard']);
Route::get('backend/profil', [BackendController::class, 'showProfil']);

// user
Route::get('backend/admin', [AdminController::class, 'index']);
Route::get('backend/admin/create', [AdminController::class, 'create']);
Route::post('backend/admin', [AdminController::class, 'store']);
Route::get('backend/admin/{admin}', [AdminController::class, 'show']);
Route::get('backend/admin/{admin}/edit', [AdminController::class, 'edit']);
Route::put('backend/admin/{admin}', [AdminController::class, 'update']);
Route::delete('backend/admin/{admin}', [AdminController::class, 'destroy']);

//dashboard
Route::get('backend/dashboard', [DashboardController::class, 'index']);

// Admin Desa Wisata
Route::get('backend/DesaWisata', [AdminDesaWisataController::class, 'index']);
Route::get('backend/DesaWisata/create', [AdminDesaWisataController::class, 'create']);
Route::post('backend/DesaWisata', [AdminDesaWisataController::class, 'store']);
Route::get('backend/DesaWisata/{desa_wisata}', [AdminDesaWisataController::class, 'show']);
Route::get('backend/DesaWisata/{desa_wisata}/edit', [AdminDesaWisataController::class, 'edit']);
Route::put('backend/DesaWisata/{desa_wisata}', [AdminDesaWisataController::class, 'update']);
Route::delete('backend/DesaWisata/{desa_wisata}', [AdminDesaWisataController::class, 'destroy']);

// Admin Wisata Bahari
Route::get('backend/WisataBahari', [AdminWisataBahariController::class, 'index']);
Route::get('backend/WisataBahari/create', [AdminWisataBahariController::class, 'create']);
Route::post('backend/WisataBahari', [AdminWisataBahariController::class, 'store']);
Route::get('backend/WisataBahari/{wisata_bahari}', [AdminWisataBahariController::class, 'show']);
Route::get('backend/WisataBahari/{wisata_bahari}/edit', [AdminWisataBahariController::class, 'edit']);
Route::put('backend/WisataBahari/{wisata_bahari}', [AdminWisataBahariController::class, 'update']);
Route::delete('backend/WisataBahari/{wisata_bahari}', [AdminWisataBahariController::class, 'destroy']);

// Admin Wisata Budaya
Route::get('backend/WisataBudaya', [AdminWisataBudayaController::class, 'index']);
Route::get('backend/WisataBudaya/create', [AdminWisataBudayaController::class, 'create']);
Route::post('backend/WisataBudaya', [AdminWisataBudayaController::class, 'store']);
Route::get('backend/WisataBudaya/{wisata_budaya}', [AdminWisataBudayaController::class, 'show']);
Route::get('backend/WisataBudaya/{wisata_budaya}/edit', [AdminWisataBudayaController::class, 'edit']);
Route::put('backend/WisataBudaya/{wisata_budaya}', [AdminWisataBudayaController::class, 'update']);
Route::delete('backend/WisataBudaya/{wisata_budaya}', [AdminWisataBudayaController::class, 'destroy']);

// Admin Wisata Kuliner
Route::get('backend/WisataKuliner', [AdminWisataKulinerController::class, 'index']);
Route::get('backend/WisataKuliner/create', [AdminWisataKulinerController::class, 'create']);
Route::post('backend/WisataKuliner', [AdminWisataKulinerController::class, 'store']);
Route::get('backend/WisataKuliner/{wisata_kuliner}', [AdminWisataKulinerController::class, 'show']);
Route::get('backend/WisataKuliner/{wisata_kuliner}/edit', [AdminWisataKulinerController::class, 'edit']);
Route::put('backend/WisataKuliner/{wisata_kuliner}', [AdminWisataKulinerController::class, 'update']);
Route::delete('backend/WisataKuliner/{wisata_kuliner}', [AdminWisataKulinerController::class, 'destroy']);

//login
Route::get('auth/login', [AuthController::class, 'showLogin']);
Route::post('auth/login', [AuthController::class, 'loginProcess']);
Route::get('auth/logout', [AuthController::class, 'logout']);


//Front View Desa Wisata
Route::get('front-view/DesaWisata', [DesaWisataController::class, 'index']);

//Front View Atraksi Wisata
Route::get('front-view/AtraksiWisata', [AtraksiWisataController::class, 'index']);

//Atraksi Wisata Bahari
Route::get('front-view/AtraksiWisata/WisataBahari', [WisataBahariController::class, 'index']);
Route::get('front-view/AtraksiWisata/WisataBahari/{wisata_bahari}', [WisataBahariController::class, 'show']);

//Atraksi Wisata Budaya
Route::get('front-view/AtraksiWisata/WisataBudaya', [WisataBudayaController::class, 'index']);
Route::get('front-view/AtraksiWisata/WisataBudaya/{wisata_budaya}', [WisataBudayaController::class, 'show']);

//Atraksi Wisata Kuliner
Route::get('front-view/AtraksiWisata/WisataKuliner', [WisataKulinerController::class, 'index']);
Route::get('front-view/AtraksiWisata/WisataKuliner/{wisata_kuliner}', [WisataKulinerController::class, 'show']);


