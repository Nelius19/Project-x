<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('student.home');
    }

    //
    public function show(Request $request, $id)
    {
        return view('student.auth');
    }

    //
    public function getAssessment()
    {
        return view('student.assessment');
    }
}

