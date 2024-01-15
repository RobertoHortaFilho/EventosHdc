<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class geralController extends Controller
{
    public function contact() {
        return view('contact');
    }

    public function register() {
        return view('register');
    }
}
