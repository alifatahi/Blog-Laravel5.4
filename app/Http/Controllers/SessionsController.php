<?php

namespace App\Http\Controllers;

/**
 * Class SessionsController
 * @package App\Http\Controllers
 */
class SessionsController extends Controller
{

    //Declare Middleware for Guest User which says all user can see all Pages Except destroy(LogOut)
    public function __construct()
    {
        $this->middleware('guest')->except(['destroy']);
    }

    //View For LogIn
    public function create()
    {
        return view('sessions.create');

    }

    //Method for Store User Info for Login
    public function store()
    {
        //If user not passed Correct info we redirect them
        if (! auth()->attempt(request(['email','password']))){
            return back()->withErrors([
                'message' => 'Please Check your info'
            ]);
        }

        return redirect()->home();
    }

    //Logout View
    public function destroy()
    {
        auth()->logout();

        return redirect()->home();
    }
}
