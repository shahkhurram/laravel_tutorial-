<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    function uploadFile(Request $req)
    {
        return $req->file('file')->store('img');
    }
}
