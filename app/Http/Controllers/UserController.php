<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.users.index');
    }


    public function show()
    {
        return view('admin.users.show');
    }


    public function creat()
    {
        return view('admin.users.creat');
    }
}
