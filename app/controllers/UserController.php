<?php

class UserController extends BaseController
{


    public function getLogin()
    {
        return View::make('login');
    }


    public function getRegister()
    {

        return View::make('register');

    }


    public function postLogin()
    {
        //validate user input
        $rules = array(
            'username' => 'required',
            'password' => 'required|min:4'

        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            // form invalid
            return Redirect::to('login')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } // attempt to login user
        else {
            $userdata = array(

                'username' => Input::get('username'),
                'password' => Input::get('password')
            );

            $remember = Input::has('remember') ? true : false;


            if (Auth::attempt($userdata, $remember)) {
                //authentication succesfful
                return Redirect::Route('todo');

                // return Redirect::route('todo'); //this is an option to the above line

            } else {

                //authentication failed
                return Redirect::to('login')->with('message', 'Invalid username/passowrd combination')
                    ->with('alert-class', 'alert-danger');
            }


        }


    }

    public function loadToDo()
    {

        return View::make('todo');


    }

    public function postTodo()
    {
        $validator = User::validate(Input::all());
        if ($validator->passes()) {
            //attempt to register the user
            User::create(array(
                'subject' => Input::get('username'),
                'discription' => Input::get('discription')
            ));

            return Redirect::route('view_todo')->withMessage('You have successfully create To-Do list')
                ->with('alert-class', 'alert-info');

        }
        return Redirect::route('view_todo')->withErrors($validator);


    }
}