<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NguyenVanHoangController extends Controller
{
    public function gioiThieu()
    {
        return view('gioiThieu');
    }
}