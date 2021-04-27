<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shopkeepersignup;

class shopkeeperregister extends Controller
{       function getData(Request $request)
{
    $user=new shopkeepersignup;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = $request->password;
    $user->contact = $request->contact;
    $user->address = $request->address;
    $query=$user->save();
    if($query)
        return redirect('./shopkeeperlogin');




}
    //
}
