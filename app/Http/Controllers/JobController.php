<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function getIndex()
    {
        return view('pages.jobs', [
            'sub_header' => 'Zoekertjes'
        ]);
    }
}
