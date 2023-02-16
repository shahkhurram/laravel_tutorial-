<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    //
    function getData()
    {
        //----join two tables and get data with same id ------
        
        return DB::table('employee')
        ->join('company','employee.id','=','company.employee_Id')
        // ->select('company.*','employee.*')
        // ->where('employee.name',"khurram")
        ->where('employee.id',1)
        ->select('employee.name','company.name')
        ->get();
    }

}
