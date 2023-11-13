<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    //Admin DashBoard
    public function __invoke()
    {
        return view('admin.index');
    }
}
