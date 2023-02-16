<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    //for disable the time and date colums error
    // public $timestamps=false;

    //what is accessor?
    //Ans. if we want to add something extra in the database table values. and this function only show on display not in data base.
    // function getUsernameAttribute($value)
    // {
    //     return ucFirst($value);
    // }
    // function getPhoneAttribute($value)
    // {
    //     return "+91 ".$value;
    // }
    // function getEmailAttribute($value)
    // {
    //     return "gaur".$value;
    // }
    //
     
    //what is mutator?
    //ans. for altering the the value before saving in database means if we enter a name in form and we appy this function than we can add mr. bfore name and it automatically add mr. before save the name.
    // public function setUsernameAttribute($value){
    
    //     return $this->attributes['username']= 'Mr. '.$value;
    // }
    // public function setPhoneAttribute($value){
    //     return $this->attributes['phone']= '+91 '.$value;
    // }
    
    // public function setPasswordAttribute($value){
    //     return $this->attributes['password']= md5($value);
    // }
    

    // one to one relationship
    // function companyData(){
    //     return $this->hasMany('App\Models\Company');
    // }
    
    //one to many relation
    // function companyData()
    // {
    //     return $this->hasMany('App/Models/Device');
    // }
    
    
    
}
