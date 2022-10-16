<?php

namespace App\Http\Controllers\BackendControllers;

class BackendController extends Controller
{

    function showDashboard()
    {
        return view('backend.dashboard');
    }

    // function showDesaWisata()
    // {
    //     return view('desaWisata');
    // }


}
