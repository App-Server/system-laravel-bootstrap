<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUser;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function store(StoreUpdateUser $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        $users = User::create($data);
        session()->flash('success', 'User registered successfully');
        return redirect()->route('user.index'); 
    }
}
