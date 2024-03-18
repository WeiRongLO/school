<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class TestController extends Controller
{
    //
    public function index()
    {
       
    }
    public function teachers()
    {
        return Inertia::render('Teachers');
    }
    public function lessons()
    {
        return Inertia::render('Lessons');
    }
    public function years()
    {
        return Inertia::render('Years');
    }
}
