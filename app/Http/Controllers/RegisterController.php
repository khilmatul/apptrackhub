<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function register(){
        return view('register.register');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:50',
            'username' => 'required|max:32|unique:users',
            // 'notlpn' => 'required|max:12|unique:users',
            'password' => 'required|min:8|max:50'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
       
        User::create($validatedData);

        return redirect('/login');

    }
}
