<?php

// app/Http/Controllers/Auth/LoginController.php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function customValidate(Request $request)
    {   
        $username = $request->input('username');
        $password = $request->input('password');

        if($username === 'Miguel' && $password === '1234'){
            return view('templates.users.index', compact('username'));
            // return redirect()->route('home')->with('username', $username);

        }else{
            $error = 'Usuario o Contraseña Incorrectos.';
            return view('login', compact('error'));

            // return redirect()->route('login');
            
        }
    }

}
