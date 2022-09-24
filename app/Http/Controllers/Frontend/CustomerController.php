<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function registration(Request $request){
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $data= Customer::create([
            'name' => $request->name,
            'email' =>$request->email,
            'phone'=>$request->phone,
            'password' => Hash::make($request),
        ]);
        if ($data) {
            $notification = array('messege' => 'Registration Successful!', 'alert-type' => 'success');
            return redirect()->back()->with($notification);
        } else {
            $notification = array('messege' => 'Registration NOT Successful!!', 'alert-type' => 'error');
            return redirect()->back()->with($notification);
        }

    }
    public function login(Request $request){
        $this->validate($request,[
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        if (Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->Route('index');
        }
        $this->setErrorMessage('Invalite password');
        return back()->withInput($request->only('email', 'remember'));
    }


}
