<?php
// spell:disable
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){

        return view('templates.users.index');
    }

    public function show(){

        return view('templates.users.show');
    }

    public function create(){

        return view('templates.users.create');
    }

    public function edit(){

        return view('templates.users.edit');
    }

    public function delete(){

        return view('templates.users.destroy');
    }

    public function exit(){

        return view('login');
    }
}
