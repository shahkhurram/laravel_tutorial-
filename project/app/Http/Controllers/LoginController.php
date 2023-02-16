<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    function userLogin(Request $req){
        $data= $req->input('name');
        $req->session()->put('name',$data);
       return redirect('profile');

    }
}
