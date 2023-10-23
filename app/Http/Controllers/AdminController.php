<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function diklat()
    {
        return view('admin.diklat');
    }

    public function daftardiklat()
    {
        return view('admin.diklat.daftar');
    }

    public function content()
    {
        return view('admin.diklat.content');
    }
}
