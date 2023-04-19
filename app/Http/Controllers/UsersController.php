<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $user = User::all();
        return view('users.index', ['users' =>$user]);
    }
    public function create(){
        return view('users.create');
    }
    public function store(Request $request){

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);
        return redirect() ->action([UsersController::class, 'index']);
    }
}
