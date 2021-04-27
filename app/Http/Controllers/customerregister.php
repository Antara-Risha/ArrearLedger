<?php

namespace App\Http\Controllers;

use App\Models\customersignup;
use Illuminate\Http\Request;


class customerregister extends Controller
{       function getData(Request $request)
{
    $user=new customersignup;
    $user->name = $request->cname;
    $user->email = $request->cemail;
    $user->contact = $request->ccontact;
    $user->address = $request->caddress;
    $query=$user->save();
    if($query)
        return "successful";




}


}
