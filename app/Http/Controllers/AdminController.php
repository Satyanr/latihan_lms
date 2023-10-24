<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('admin.index');
    }

    public function diklat()
    {
        return view('admin.diklat');
    }

    public function category()
    {
        return view('admin.category');
    }

    public function daftardiklat()
    {
        return view('admin.diklat.daftar');
    }

    public function content()
    {
        return view('admin.diklat.content');
    }

    public function bahanbacaan()
    {
        return view('admin.diklat.content.bahanbacaan');
    }

    public function video()
    {
        return view('admin.diklat.content.video');
    }
}
