<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function onSeclect(){

        $jsonData=DB::select('select * from users where name=?',['roton']);
        $jsonString=json_encode($jsonData);
        $selectData=json_decode($jsonString);
        return view('select',['selectKey'=>$selectData]);
    }
    function onInsert(Request $req){
        $name= $req->input('name');
        $roll= $req->input('roll');
        $class=$req->input('class');
        $result=DB::insert('INSERT INTO `users`(`name`, `class`, `roll`) VALUES (?,?,?)',[$name, $class,$roll]);
        
        if($result==true){
            return "Succcess!!!";
        } else {
            return "Warning!!!"; 
        }
    }
    function onUpdate(){
        
    }
    function onDelete(){
        
    }
}
