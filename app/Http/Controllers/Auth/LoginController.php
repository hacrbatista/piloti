<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class LoginController extends Controller {

    public function login() {
        $credentials = $this->validate(request(), [
            'email' => 'email|required|string',
            'password' => 'required|string'
        ]);
        print_r($credentials);
        exit;

        return $credentials;

        //Auth::attempt($credentials);
    }
}