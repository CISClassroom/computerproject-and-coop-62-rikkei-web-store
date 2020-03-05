<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupportController extends Controller
{

    public function index()
    {
        return view('client.supports.index');
    }

    public function qa()
    {
        return view('client.supports.qa');
    }

    public function ticket()
    {
        return view('client.supports.ticket');
    }

    public function livechat()
    {
        return view('client.supports.livechat');
    }
}
