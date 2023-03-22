<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('admin.pages.home', [
            'tittle' => 'Home',
        ]);
    }

    public function profile() {
        return view('admin.pages.profile', [
            'tittle' => 'Profile',
        ]);
    }
}
