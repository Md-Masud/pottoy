<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loginpost(Request $request){
        print_r($request->all());
    } 
    public function resisterpost(Request $request){
        print_r($request->all());
    }
}
