<?php

use App\Http\Controllers\BackendControllers\BackendController;
use App\Http\Controllers\BackendControllers\DashboardController;
use App\Http\Controllers\BackendControllers\AdminController;
use App\Http\Controllers\BackendControllers\AdminDesaWisataController;
use App\Http\Controllers\BackendControllers\AdminAtraksiWisataController;
use App\Http\Controllers\BackendControllers\AdminWisataAlamController;
use App\Http\Controllers\BackendControllers\AdminWisataBudayaController;
use App\Http\Controllers\BackendControllers\AdminWisataBuatanController;
use App\Http\Controllers\BackendControllers\AdminKalenderWisataController;
use App\Http\Controllers\BackendControllers\KategoriController;

use App\Http\Controllers\BackendControllers\AuthController;


use App\Http\Controllers\FrontViewControllers\DesaWisataController;
use App\Http\Controllers\FrontViewControllers\AtraksiWisataController;
use App\Http\Controllers\FrontViewControllers\KalenderWisataController;
use App\Http\Controllers\FrontViewControllers\PetaWisataController;
use App\Http\Controllers\FrontViewControllers\WisataAlamController;
use App\Http\Controllers\FrontViewControllers\WisataBudayaController;
use App\Http\Controllers\FrontViewControllers\WisataBuatanController;
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
    return view('backend.template.adminBase');
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

// Admin Wisata Alam
Route::get('backend/WisataAlam', [AdminWisataAlamController::class, 'index']);
Route::get('backend/WisataAlam/create', [AdminWisataAlamController::class, 'create']);
Route::post('backend/WisataAlam', [AdminWisataAlamController::class, 'store']);
Route::get('backend/WisataAlam/{wisata_alam}', [AdminWisataAlamController::class, 'show']);
Route::get('backend/WisataAlam/{wisata_alam}/edit', [AdminWisataAlamController::class, 'edit']);
Route::put('backend/WisataAlam/{wisata_alam}', [AdminWisataAlamController::class, 'update']);
Route::delete('backend/WisataAlam/{wisata_alam}', [AdminWisataAlamController::class, 'destroy']);

// Admin Wisata Budaya
Route::get('backend/WisataBudaya', [AdminWisataBudayaController::class, 'index']);
Route::get('backend/WisataBudaya/create', [AdminWisataBudayaController::class, 'create']);
Route::post('backend/WisataBudaya', [AdminWisataBudayaController::class, 'store']);
Route::get('backend/WisataBudaya/{wisata_budaya}', [AdminWisataBudayaController::class, 'show']);
Route::get('backend/WisataBudaya/{wisata_budaya}/edit', [AdminWisataBudayaController::class, 'edit']);
Route::put('backend/WisataBudaya/{wisata_budaya}', [AdminWisataBudayaController::class, 'update']);
Route::delete('backend/WisataBudaya/{wisata_budaya}', [AdminWisataBudayaController::class, 'destroy']);

// Admin Wisata Buatan
Route::get('backend/WisataBuatan', [AdminWisataBuatanController::class, 'index']);
Route::get('backend/WisataBuatan/create', [AdminWisataBuatanController::class, 'create']);
Route::post('backend/WisataBuatan', [AdminWisataBuatanController::class, 'store']);
Route::get('backend/WisataBuatan/{wisata_buatan}', [AdminWisataBuatanController::class, 'show']);
Route::get('backend/WisataBuatan/{wisata_buatan}/edit', [AdminWisataBuatanController::class, 'edit']);
Route::put('backend/WisataBuatan/{wisata_buatan}', [AdminWisataBuatanController::class, 'update']);
Route::delete('backend/WisataBuatan/{wisata_buatan}', [AdminWisataBuatanController::class, 'destroy']);

// Admin Atraksi Wisata
Route::get('backend/AtraksiWisata', [AdminAtraksiWisataController::class, 'index']);
Route::get('backend/AtraksiWisata/create', [AdminAtraksiWisataController::class, 'create']);
Route::post('backend/AtraksiWisata', [AdminAtraksiWisataController::class, 'store']);
Route::get('backend/AtraksiWisata/{atraksi_wisata}', [AdminAtraksiWisataController::class, 'show']);
Route::get('backend/AtraksiWisata/{atraksi_wisata}/edit', [AdminAtraksiWisataController::class, 'edit']);
Route::put('backend/AtraksiWisata/{atraksi_wisata}', [AdminAtraksiWisataController::class, 'update']);
Route::delete('backend/AtraksiWisata/{atraksi_wisata}', [AdminAtraksiWisataController::class, 'destroy']);


// Admin Kalender Wisata
Route::get('backend/KalenderWisata', [AdminKalenderWisataController::class, 'index']);
Route::get('backend/KalenderWisata/create', [AdminKalenderWisataController::class, 'create']);
Route::post('backend/KalenderWisata', [AdminKalenderWisataController::class, 'store']);
Route::get('backend/KalenderWisata/{kalender_wisata}', [AdminKalenderWisataController::class, 'show']);
Route::get('backend/KalenderWisata/{kalender_wisata}/edit', [AdminKalenderWisataController::class, 'edit']);
Route::put('backend/KalenderWisata/{kalender_wisata}', [AdminKalenderWisataController::class, 'update']);
Route::delete('backend/KalenderWisata/{kalender_wisata}', [AdminKalenderWisataController::class, 'destroy']);


//login
Route::get('auth/login', [AuthController::class, 'showLogin']);
Route::post('auth/login', [AuthController::class, 'loginProcess']);
Route::get('auth/logout', [AuthController::class, 'logout']);


//Front View Desa Wisata
Route::get('/', [DesaWisataController::class, 'index']);
Route::get('front-view/DesaWisata', [DesaWisataController::class, 'index']);

//Front View Atraksi Wisata
Route::get('front-view/AtraksiWisata', [AtraksiWisataController::class, 'index']);
Route::get('front-view/AtraksiWisata/WisataAlam', [AtraksiWisataController::class, 'index2']);
Route::get('front-view/AtraksiWisata/WisataBudaya', [AtraksiWisataController::class, 'index3']);
Route::get('front-view/AtraksiWisata/WisataBuatan', [AtraksiWisataController::class, 'index4']);
Route::get('front-view/AtraksiWisata/{atraksi_wisata}', [AtraksiWisataController::class, 'show']);

//kalender Wisata
Route::get('front-view/KalenderWisata', [KalenderWisataController::class, 'index']);
Route::get('front-view/KalenderWisata/{kalender_wisata}', [KalenderWisataController::class, 'show']);

//PetaWisata
Route::get('front-view/PetaWisata', [PetaWisataController::class, 'index']);