<?php

use App\Http\Controllers\BackendControllers\BackendController;
use App\Http\Controllers\BackendControllers\DashboardController;
use App\Http\Controllers\BackendControllers\AdminController;
use App\Http\Controllers\BackendControllers\AdminDesaWisataController;
use App\Http\Controllers\FrontViewControllers\DesaWisataController;
use App\Http\Controllers\BackendControllers\AuthController;
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

//login
Route::get('auth/login', [AuthController::class, 'showLogin']);
Route::post('auth/login', [AuthController::class, 'loginProcess']);
Route::get('auth/logout', [AuthController::class, 'logout']);


//Front View Desa Wisata
Route::get('front-view/DesaWisata', [DesaWisataController::class, 'index']);


