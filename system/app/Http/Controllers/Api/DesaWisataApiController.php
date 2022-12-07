<?php

namespace App\Http\Controllers\Api;

use App\Models\DesaWisata;
use App\Http\Controllers\Controller;
use App\Http\Resources\DesaWisataResource;
use Illuminate\Http\Request;

class DesaWisataApiController extends Controller
{
    function getAllData()
    {
        $data_desawisata = DesaWisata::all();
        return DesaWisataResource::collection($data_desawisata);
    }
}