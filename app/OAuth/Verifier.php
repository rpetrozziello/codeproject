<?php
/**
 * Created by PhpStorm.
 * User: NOTE
 * Date: 09/06/2017
 * Time: 05:10
 */

namespace CodeProject\OAuth;


use Illuminate\Support\Facades\Auth;

class Verifier
{
    public function verify($username, $password)
    {
        $credentials = [
            'email'    => $username,
            'password' => $password,
        ];

        if (Auth::once($credentials)) {
            return Auth::user()->id;
        }

        return false;
    }
}