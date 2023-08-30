<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');

    }

    public function store (Request $request){
        $messages = [
            'login.required' =>'Поле login обязательно для заполнения.',
            'login.max' =>'Поле login должно быть не менее 30 символов.',
            'login.min' =>'Поле login должно быть не менее 3 символов.',
            ];

        $request->validate([
        'login' =>'required|max:30 | min:3',
        'password' =>'required|max:20 | min:8',
        ], $messages);
    }
}
