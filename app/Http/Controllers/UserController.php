<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function index()
    {
        return view('users.index');
    }
    public function show()
    {
        return view('users.show');
    }
    public function edit()
    {
        return view('users.edit');
    }
    public function destroy()
    {
        return 'DESTROYED!!';
    }
    public function updateuser()
    {
        return 'UPDATED!!';
    }
    public function store()
    {
        return 'STORED';
    }
}