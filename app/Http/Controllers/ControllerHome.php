<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class ControllerHome extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function home()
    {
        return view('index');
    }
    /*public function show($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }*/
}