<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Item;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function show()
    {
        return view('register');
    }

    public function store()
    {
        $formData=request()->validate([
            'name' => 'required',
            'email' => ['required','email',Rule::unique('users','email')],
            'username' => ['required',Rule::unique('users','username')],
            'password' => ['required','min:8']
        ]);
         $user=User::create($formData);
         auth()->login($user);
        return redirect('/show');
    }

    public function login()
    {
        return view('login');
    }

    public function post_login()
    {
        $formData=request()->validate([
            'email'=> ['required','email','max:255',Rule::exists('users','email')],
            'password' => 'required'
        ]);
        if(auth()->attempt($formData)){
            return redirect('/show');
        }
    }
}
