<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
{
    public function store(Requests\UserSignUpRequest $request)
    {
        $data = [
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'password'=>bcrypt($request->get('password'))
        ];

        User::create($data);

        return redirect('success');
    }
}
