<?php

namespace App\Http\Controllers;
use App\Models\studdata;
use Illuminate\Http\Request;

class studdataController extends Controller
{
     public function index()
    { 
        return view('stud');
    }
}
