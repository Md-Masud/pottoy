<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class SettingController extends Controller
{
    public function index(){

        $setting=Setting::first();
        if(  $setting==null){
         return view('admin.setting');
        }
        else{
         return view('admin.setting',compact('setting'));

        }

    }
    public function webside_setting(Request $request,$id)
    {
        $setting =Setting::findOrFail($id);
        $input=$request->all();


        $input['logo'] = $setting->logo;
        if ($request->hasFile('logo')){
            if (!$setting->logo == NULL){
                unlink(public_path($setting->logo));
            }
            $input['logo'] = 'public/files/logo/'.time().'.'.$request->logo->getClientOriginalExtension();
            $request->logo->move(public_path('public/files/logo/'), $input['logo']);
        }
        $data=$setting->update($input);
        if ($data) {
            $notification = array('messege' => 'Setting Update Successful!', 'alert-type' => 'success');
            return redirect()->back()->with($notification);
        } else {
            $notification = array('messege' => 'Setting not Upade !', 'alert-type' => 'error');
            return redirect()->back()->with($notification);
        }


    }
    public function webside_setting_store(Request $request){
        $input=$request->all();
        $input['logo'] = null;
        if ($request->hasFile('logo')){
            $input['logo'] = 'public/files/logo/'.time().'.'.$request->logo->getClientOriginalExtension();
            $request->logo->move(public_path('public/files/logo/'), $input['logo']);
        }

        $data=Setting::create($input);
        if ($data) {
            $notification = array('messege' => 'Setting Create Successful!', 'alert-type' => 'success');
            return redirect()->back()->with($notification);
        } else {
            $notification = array('messege' => 'Setting not Create !', 'alert-type' => 'error');
            return redirect()->back()->with($notification);
        }
    }
}
