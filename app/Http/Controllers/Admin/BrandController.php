<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\Datatables;

class BrandController extends Controller
{

    public function index()
    {
        $brands = Brand::all();

        return view('admin.brand.index', compact('brands'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'brand_name' => 'required',

        ]);

        $slug = Str::slug($request->brand_name . '-');
        if ($request->hasfile('brand_logo')) {
            $file = $request->file('brand_logo');
            $extension = time() . $slug . '.' . $file->getClientOriginalExtension();
            Image::make($file)->resize(200, 270)->save('public/files/brand_logo/' . $extension);  //image intervention
        }
        $data = Brand::create([
            'brand_name' => $request->brand_name,
            'brand_slug' => Str::slug($request->brand_name),
            'brand_logo' => $extension,

        ]);


        if ($data) {
            $notification = array('messege' => 'Brand Save Successful!', 'alert-type' => 'success');
            return redirect()->back()->with($notification);
        } else {
            $notification = array('messege' => 'Brand not Save !', 'alert-type' => 'error');
            return redirect()->back()->with($notification);
        }
    }


    public function edit($id)
    {

        $data = Brand::find($id);

        return view('admin.brand.form', compact('data'));
    }


    public function update(Request $request, $id)
    {

        $data = Brand::find($id);
        $data->brand_name = $request->brand_name;
        $slug = $data->brand_slug = Str::slug($request->brand_name);
        if ($request->hasfile('brand_logo')) {
            $path = public_path() . "/public/files/brand_logo/" . $request->old_image;
            unlink($path);
            $file = $request->file('brand_logo');
            $extension = time() . $slug . '.' . $file->getClientOriginalExtension();
            Image::make($file)->resize(200, 270)->save('public/files/brand_logo/' . $extension);
            $data->brand_logo = $extension;
        } else {
            $data->brand_logo = $request->old_image;
        }
        $data->save();
        if ($data) {
            $notification = array('messege' => 'Brand Update Successful!', 'alert-type' => 'success');
            return redirect()->back()->with($notification);
        } else {
            $notification = array('messege' => 'Brand not Upade !', 'alert-type' => 'error');
            return redirect()->back()->with($notification);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Brand::find($id);
        $path = public_path() . "/public/files/brand_logo/" . $data->brand_logo;
        unlink($path);
        $data->delete();
        if ($data) {
            $notification = array('messege' => 'Brand delete Successful!', 'alert-type' => 'success');
            return redirect()->back()->with($notification);
        } else {
            $notification = array('messege' => 'Brand not delete !', 'alert-type' => 'error');
            return redirect()->back()->with($notification);
        }
    }
}
