<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        return view('client.accounts.profiles.index', compact('user'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit(User $user, $id)
    {
        $user = User::find($id);
        return view('client.accounts.profiles.edit', compact('user','id'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'gender' => 'required|in:Male,Female',
            'date_of_birth' => 'required|date',
        ]);
        // news letter function
        if ($request->newsletter == null){
            $request->newsletter = 0;
        }
        $news = $request->newsletter;
        $input = $request->all()+ ['newsletter' => $news];

        //update
        $user = User::find($id);
        $user->update($input);

        return redirect()->route('profile.index')
            ->with('success', 'Profile updated successfully');
    }


    public function destroy($id)
    {
        //
    }
}
