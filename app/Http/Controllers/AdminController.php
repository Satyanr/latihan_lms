<?php

namespace App\Http\Controllers;

use App\Models\Topik;
use App\Models\Diklat;
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

    public function content($id)
    {
        $diklat = Diklat::find($id);
        return view('admin.diklat.content', compact('diklat'));
    }

    public function bahanbacaan($id)
    {
        $topik = Topik::find($id);
        return view('admin.diklat.content.bahanbacaan', compact('topik'));
    }

    public function video($id)
    {
        $topik = Topik::find($id);
        return view('admin.diklat.content.video', compact('topik'));
    }

    public function quizz($id)
    {
        $topik = Topik::find($id);
        return view('admin.diklat.content.quizz', compact('topik'));
    }
}
