<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() 
    {
        if (request()->has('empty')){
            $users = [];
        } else{
            $users = ['Tom', 'Jerry', 'Michael', 'Johnny', 'Alfredo'];
        }
        
        $title = 'Users List';

        /* 
        BORRAR ESTO ANTES DE SUBIR A GIT
        return view('users', [
            'users' => $users,
            'title' => $title 
        ]);
        
        Other ways to pass props   
        return view('users')->with([
            'users' => $users,
            'title' => $title
        ]);
        return view('users')
            ->with('users', $users)
            ->with('title', $title);

        A way to check we are sending the array we want    
        dd(compact('title', 'users')); */
        return view('users.index', compact('title', 'users'));   
    }

    public function showUserDetails($id)
    {
        $user = array("id" => $id, "name" => "Max", "lastName" => "Power", "age" => "45", "height" => '1,75m', "city" => "Springfield" );
        return view('users.showDetails', compact('user'));
    }

    public function createUser()
    {
        $user = array("id" => "5", "name" => "Max", "lastName" => "Power", "age" => "45", "height" => '1,75m', "city" => "Springfield" );
        return view('users.create', compact('user'));
    }

    public function edit($id)
    {
        //Normally you'd get data from DB by ID
        $user = array("id" => "5", "name" => "Max", "lastName" => "Power", "age" => "45", "height" => '1,75m', "city" => "Springfield" );
        return view('users.edit', compact('user'));
    }
}