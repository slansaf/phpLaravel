<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserResponse;

class UserResponseController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'surname' => 'required|max:50',
            'email' => 'required',
        ]);

        $users = new UserResponse($request->all());
		$users->save();

        return redirect('/users');
    }

    public function index()
    {
        $users = UserResponse::all();
        return view('create', compact('users'));
    }

    public function show($id)
    {
        $user = UserResponse::findOrFail($id);
        return response()->json($user);
    }

}
