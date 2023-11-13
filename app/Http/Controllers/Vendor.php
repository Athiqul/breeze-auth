<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Vendor extends Controller
{
    //Vendor Dashboard
    public function __invoke()
    {
        return view('vendor.dashboard');
    }
}
