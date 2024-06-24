<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

class ProfileController extends Controller
{
    public function index($id)
    {
        // Declare your variables and assign the values stated in Question
        $name = "Donal Trump";
        $age = "75";

        // Add three variables in $data variable as associative array with values stated in the question
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        // Set your cookie variables stated in the question
        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $cookieMinutes = 1;
        $cookiePath = '/';
        $cookieDomain = $_SERVER['SERVER_NAME'];
        $cookieSecure = false;
        $cookieHttpOnly = true;

        // Create the cookie
        $cookie = Cookie::make(
            $cookieName,
            $cookieValue,
            $cookieMinutes,  // minutes
            $cookiePath, // path
            $cookieDomain, // domain
            $cookieSecure, // secure
            $cookieHttpOnly // httpOnly
        );

        // Add the return statement with the response method along with $data and status-code and set the cookie stated in the question
        return response()->json($data, 200)->cookie($cookie);
    }
}
