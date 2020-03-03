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
            if (!session()->has('url.intended')) {
                session(['url.intended' => url()->previous()]);
            }

                return redirect()->action('AdminHomeController@index');

        }
        elseif ($user->role_id == "3") {
            if (!session()->has('url.intended')) {
                session(['url.intended' => url()->previous()]);
            }
                return view('client.home.index');
        }
        else {
            return view('client.home.index');
        }
    }
    public function status()
    {
        return view('client.layouts.status');
    }

    public function adminStatus()
    {
        $user = Auth::user();
        if ($user->role_id == "1" || $user->role_id == "2") {
            if (!session()->has('url.intended')) {
                session(['url.intended' => url()->previous()]);
            }
            return view('admin.layouts.status');
        }
        elseif ($user->role_id == "3") {
            if (!session()->has('url.intended')) {
                session(['url.intended' => url()->previous()]);
            }
                return view('client.layouts.status');
        }
        else {
            return view('client.layouts.status');
        }
    }
}
