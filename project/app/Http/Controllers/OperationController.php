<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;


class OperationController extends Controller
{
    //------------------------For retrive data in table from db----------------
    // function operations(){
    //    $data= DB::table('users')->get();
    //    return view('listoperations',['data'=>$data]);
    // }

    function operations(){
                    //----for find the list----
                    //  return (array)DB::table('users')->find(12);


         //-----for count the no. of item in the list----
        //  return DB::table('users')->count();


                    //----by id -----
                    // return DB::table('users')
                    // ->where('id',12)
                    // ->get();


        //---by other field like name,email---
        // return DB::table('users')
        //  ->where('username','sk')
        //  ->get();


                    //------for insert items in the list----
                    // return DB::table('users')
                    // ->insert(
                    //     [
                    //         'username'=>'gaurboy',
                    //         'email'=>'gaurboy@gmail.com',
                    //         'phone'=>'86545466356',
                    //         'password'=>'adsyukfg43'
                    //     ]
                    //     );


        //----------for update items in the table-----
        // return DB::table('users')
        // ->where('id',12)
        // ->update(
        //     [
        //         'username'=>'khurramgaur',
        //         'email'=>'gaurboy@gmail.com',
        //         'phone'=>'86545466356',
        //         'password'=>'adsyukfg43'
        //     ]
        //     );

        
                    //------for delete items from the table------
                    // return DB::table('users')
                    // ->where('id',12)->delete();


        //----for calculate the sum of any field -----
        // return DB::table('users')->sum('id');

                    //----for find the minimum and maximum value in the table  -----
                    // return DB::table('users')->min('id');
                    // return DB::table('users')->max('id');

        //----for find the minimum and maximum at once in the table  -----
        // return DB::table('users')
        // ->select(DB::raw("min(id) as min_id, max(id) as max_id"))
        // ->get();

                    // ----for calculate the average of numeric field -----
                    // return DB::table('users')->avg('id');


    


         

    }
}
