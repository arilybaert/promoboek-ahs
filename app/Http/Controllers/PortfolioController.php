<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function getCMO()
    {
        $students = Student::where('course_id', '1')->get();
        return view('pages.cmo-home', [
        'students' => $students]);
    }
    public function getCMODetail()
    {

        return view('pages.cmo-detail');
    }
    public function getAVD()
    {

    }
    public function getNMD()
    {

    }
    public function getGMB()
    {

    }

}
