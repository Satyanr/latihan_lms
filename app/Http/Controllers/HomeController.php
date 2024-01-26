<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function userOnlineStatus()
    {
        $users = User::all();
        foreach ($users as $user) {
            if (Cache::has('user-is-online-' . $user->id)) {
                echo $user->name . ' is online. Last seen: ' . Carbon::parse($user->last_seen)->diffForHumans() . ' <br>';
            } else {
                echo $user->name . ' is offline. Last seen: ' . Carbon::parse($user->last_seen)->diffForHumans() . ' <br>';
            }
        }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userlogin = auth()->user();

        if ($userlogin->role == 'superadmin') {
            $users = User::all();
            return view('home', compact('users'));
        } elseif($userlogin->role == 'admin') {
            $users = User::where('role', '!=', '3',)->get();
            return view('home', compact('users'));
        } else {
            $users = User::where('role', '!=', '3',)->where('role', '!=', '2',)->get();
            return view('home', compact('users'));
        }
    }

    public function content($id)
    {
        $content = \App\Models\Content::find($id);
        return view('main.diklat.content', compact('content'));
    }

}
