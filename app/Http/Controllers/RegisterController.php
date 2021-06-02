<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class RegisterController extends Controller
{
    protected function register_step_2(Request $request)
    {
        $name = $request->input('name');
        $address = $request->input('address');
        $picture = $request->input('picture');
        return view('auth.register2', ['name' => $name, 'address' => $address, 'picture' => $picture]);
    }

    protected function create(Request $request)
    {
        User::create([
            'username' => $request['username'],
            'address' => $request['address'],
            'role' => $request['role'],
            'picture' => $request['picture'],
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect('/login');
    }
}