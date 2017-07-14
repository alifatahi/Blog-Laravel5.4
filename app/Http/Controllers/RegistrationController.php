<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterForm;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store(RegisterForm $form)
    {

        $form->persist();

        session()->flash('message','Thank You for Registering');

        return redirect()->home();
    }
}
