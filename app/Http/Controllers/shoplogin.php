<?php

namespace App\Http\Controllers;

use App\Models\shopkeepersignup;
use Illuminate\Http\Request;
use App\Http\Controllers\shopkeeperregister;

class shoplogin extends Controller
{
    function index(Request $request)

    {
        $check = shopkeepersignup::where('email','=',$request->email)->first();
        if($check)
        {
            if($request->password == $check->password)
                return redirect('./Dashboard');
            else
                return "invalid password";

        }
        else
            return "no account";
    }

}
