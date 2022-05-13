<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return "All Users";
    }

    public function show($id = null)
    {
        return "User " . $id;
    }
}
