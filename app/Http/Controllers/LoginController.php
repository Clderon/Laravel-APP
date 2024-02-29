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

        if($username !== '' && $password !== ''){
            return redirect()->route('home')->with('username', $username);

        }else{
            return redirect()->route('login');
            
        }
    }

}
