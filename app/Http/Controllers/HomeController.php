<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {

    }
    public function getIndex()
    {
        $courses = Course::all();
        return view('pages.home', [
            'courses' => $courses,
        ]);
    }
}
