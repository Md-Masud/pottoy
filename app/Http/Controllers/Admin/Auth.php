<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Auth extends Controller
{
 public function logOut(){
    auth()->logout();
    return redirect()->route('login');
 }
 public function changePasswordShow(){
    return view('admin.change_password');
 }
 public function changePassword(Request $request){

    $current_password=auth()->user()->password;
    if(Hash::check($request->old_password,$current_password)){

        $user_id=User::find(auth()->id())->update([
            'password'=>Hash::make($request->new_password),
        ]);
        if ($user_id) {
           // auth()->logout();
            $notification = array('messege' => 'Password Change Successful!', 'alert-type' => 'success');
            auth()->logout();
             redirect()->route('login')->with($notification);

         } else {
             $notification = array('messege' => 'Password Change !', 'alert-type' => 'error');
             return redirect()->back()->with($notification);
        }
    }
    else{
        $notification = array('messege' => 'Old Password Not match !', 'alert-type' => 'error');
             return redirect()->back()->with($notification);
    }
 }
}
