<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function loginadmin()
    {
        return view('login.loginadmin');
    }

    public function adminpage()
    {
        return view('adminpage');
    }

    public function etudiantlist()
    {
        return view('etudiantlist');
    }

    public function loginetudiant()
    {
        return view('login.loginetudiant');
    }

    public function profiletudiant()
    {
        return view('profiletudiant');
    }

    public function userpage()
    {
        return view('userpage');
    }

    public function register()
    {
        return view('register');
    }


}
