<?php

namespace App\Http\Controllers\Api;

use App\Models\AtraksiWisata;
use App\Http\Controllers\Controller;
use App\Http\Resources\AtraksiWisataResource;
use Illuminate\Http\Request;

class AtraksiWisataApiController extends Controller
{
    function getAllData()
    {
        $data_atraksiwisata = AtraksiWisata::all();
        return AtraksiWisataResource::collection($data_atraksiwisata);
    }
}