<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;


use App\Http\Controllers\MemberController;
use App\Http\Controllers\OperationController;
use App\Http\Controllers\EmployeeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('list',[MemberController::class,'show'] );
Route::get('delete/{id}',[MemberController::class,'delete'] );
Route::get('edit/{id}',[MemberController::class,'showData'] );
Route::post('edit',[MemberController::class,'update'] );

Route::post('add',[MemberController::class,'addData'] );
Route::view('add','addmember' );



Route::get('listoperations',[OperationController::class,'operations'] );




Route::get('employee',[EmployeeController::class,'getdata'] );



// Route::get('data',[MemberController::class,'index'] );

    //for fatching data in few code and quickly
// Route::get('device/{key:user_id}',[MemberController::class,'index'] );



//--fluent strings--
// $info ="where are you now";
// $info=Str::ucfirst($info);
// $info=Str::replaceFirst("where","who the fuck",$info);
// $info=Str::camel($info);
// echo $info;
// $info=Str::of($info)
// ->ucFirst($info)
// ->replaceFirst("Where","who",$info)
// ->camel($info);
// echo $info;








// Route::get('/profile/{lang}', function ($lang) {
//     App::setLocale($lang);
//     return view('profile');
// });



// Route::get('/logout', function () {
//     if(session()->has('name'))
//     {
//         session()->pull('name',null);
//     }
//     return redirect('upload');
// });
// Route::get('/upload', function () {
//     if(session()->has('name'))
//     {
//         return redirect('profile');
//     }
//     return view('upload');
// });



// Route::view("upload",'upload');


// Route::post("uploadfile",[UploadController::class,'uploadFile']);


