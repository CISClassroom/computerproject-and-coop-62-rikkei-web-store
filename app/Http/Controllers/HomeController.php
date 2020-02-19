<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->role_id == "1" || $user->role_id == "2") {
            return redirect()->action('AdminHomeController@index');
        } elseif ($user->role_id == "3") {
            return view('client.home');
        } else {
            return view('client.home');
        }
    }
}
