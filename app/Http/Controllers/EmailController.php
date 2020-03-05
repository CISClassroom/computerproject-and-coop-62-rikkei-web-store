<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Mail\SendNewsletter;
use App\Models\Promotion;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{

    public function index()
    {
        return view('admin.emails.create');
    }


    public function create()
    {
        return view('admin.emails.create');
    }

    public function store(Request $request)
    {
        try {
            $users = User::all()->where('newsletter', '=', 0); //1 = subscriber, 0 = none
            foreach ($users as $user) {
                Mail::to($user->email)->send(new SendNewsletter($request));
            }
            return redirect()->route('adminstatus')
                ->with('status-success', 'Newsletter has been sent.');
        } catch (\Exception $e) {
            return redirect()->route('adminstatus')
                ->with('status-fail', 'Newsletter can not be sent.');
        }
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
    }


    public function destroy($id)
    {
        //
    }

    public function sendMail(Request $request)
    {
        $user = $request->user;
        Mail::to($user)->send(new SendMail());
    }

    public function sendNewsletter(Request $request)
    {
        request()->validate([
            'subject' => ['required', 'string'],
            'title' => ['required', 'string'],
            'image_url' => ['image', 'max:2048'],
        ]);

        $imageName = time() . '.' . request()->image_url->getClientOriginalExtension();
        request()->image_url->move(public_path('images/newsletter/upload'), $imageName);
        $request['image_url'] = 'images/newsletter/upload/' . $imageName;

        $users = User::all()->where('newsletter', '=', 0); //1 = subscriber, 0 = none
        foreach ($users as $user) {
            Mail::to($user->email)->send(new SendNewsletter($request));
        }
    }
}
