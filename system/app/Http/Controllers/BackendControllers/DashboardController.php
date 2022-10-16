<?php

namespace App\Http\Controllers\BackendControllers;

class DashboardController extends Controller
{

    function index()
    {
        return view('backend.Dashboard.index');
    }


}
