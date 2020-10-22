<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YearbookController extends Controller
{
    public function getIndex()
    {
        return view('pages.yearbook');
    }
}
