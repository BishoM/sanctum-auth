<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return("all users");
    }

    public function login()
    {
        return("Login here");
    }

    public function register()
    {
        return("register here");
    }
}
