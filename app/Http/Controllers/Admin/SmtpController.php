<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Smtp;
use Illuminate\Http\Request;

class SmtpController extends Controller
{
    public function index(){
        $data=Smtp::first();

        return view('admin.smtp',compact('data'));
    }

    public function update(Request $request,$id){
        $data=Smtp::find($id)->update([
        'mailer'=>$request->mailer,
        'host'=>$request->host,
        'port'=>$request->port,
        'user_name'=>$request->user_name,
        'password'=>$request->password

        ]);
        if ($data) {
            $notification = array('messege' => 'Smtp Save Successful!', 'alert-type' => 'success');
            return redirect()->back()->with($notification);
        } else {
            $notification = array('messege' => 'Smtp not Save !', 'alert-type' => 'error');
            return redirect()->back()->with($notification);
        }
    }

}
