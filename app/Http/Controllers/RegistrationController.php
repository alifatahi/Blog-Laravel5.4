<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterForm;

/**
 * Class RegistrationController
 * @package App\Http\Controllers
 */
class RegistrationController extends Controller
{
    //View for Registration
    public function create()
    {
        return view('registration.create');
    }

    //Method for Store new User(Register)
    //Register Form is Request which do Validation by rule Method
    public function store(RegisterForm $form)
    {
        //Add method for Create new User, Login, Message them
        $form->persist();

        session()->flash('message','Thank You for Registering');

        return redirect()->home();
    }
}
