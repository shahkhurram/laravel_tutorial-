<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;
use App\Models\Device;



class MemberController extends Controller
{
    function addData(Request $req)
    {
        $user = new User;
        $user->username=$req->username;
        $user->email=$req->email;
        $user->phone=$req->phone;
        $user->password=$req->password;
        $user->save();
        // return redirect('add');
        return redirect()->back()->with('message', 'Added Successfully!');



    }
    
    function show()
    {
        $data= User::paginate(3);
        return view('list',['users'=>$data]);


    }
    function delete($id)
    {
        
         $data = User::find($id);
         $data->delete();
        //  return redirect('list');
        return redirect()->back()->with('message', 'Deleted Successfully!');
         
      
    }
    function showdata($id){
        $data= User::find($id);
        return view('edit',['data'=>$data]);

    }
    function update(Request $req){
        $data= User::find($req->id);
        $data->username=$req->username;
        $data->email=$req->email;
        $data->phone=$req->phone;
        $data->password=$req->password;
        $data->save();

        return redirect('list');

    }

    //for saving data in database  
    // function index(){
    //     $user=new User;
    //     $user->username="dom";
    //     $user->email="email@gmail.com";
    //     $user->phone="231197";
    //     $user->password="dom1235";
    //     $user->save();

    // }
   

    //one to one relationship between two tables
    // function index()
    // {
    //    return User::find(2)->companyData;

    // }
    //one to many relationship betwwen two tables

    // function index()
    // {
    //    return User::find(2)->companyData;

    // }


    //for fatching data in few code and quickly

    function index(Device $key )
    {
        //if we want to fetch all data of that particular key
    //    return $key->all();

        //if we want to fetch one data of that particular key
       return $key;

    }
    
    
   
   
    
}
