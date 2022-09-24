<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pickup;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PickupPointController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Pickup::all();;

            return DataTables::of($data)
                ->addIndexColumn()

                ->addColumn('action', function ($row) {

                    $actionbtn = '<button onclick="editForm(' . $row->id . ')" class="btn btn-primary waves-effect"><i class="glyphicon glyphicon-edit"></i> Edit</button>
                      	<button class="btn btn-danger waves-effect"  id="delete_coupon" type="button"
                                                        onclick="deleteId(' . $row->id . ')">
                                                    <i class="material-icons">delete</i>

                                              <form id="delete-form-' . $row->id . '" action="' . route('pickup_point.destroy', [$row->id]) . '" method="POST" style="display: none;">
                       ' . csrf_field() . '
                       ' . method_field("DELETE") . '
                    </form>  ';
                    return $actionbtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.pickup_point.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'pickup_point_name' => 'required',
            'pickup_point_address' => 'required',
            'pickup_point_phone' => 'required',

        ]);

        Pickup::create($request->all());
        return response()->json([
            'success' => true,
            'message' => ' Pickup Point Created'
        ]);
    }


    public function edit($id)
    {
        $data = Pickup::find($id);
        return response()->json($data);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'pickup_point_name' => 'required',
            'pickup_point_address' => 'required',
            'pickup_point_phone' => 'required',

        ]);
        Pickup::find($id)->update($request->all());
        return response()->json([
            'success' => true,
            'message' => ' Pickup Point Update'
        ]);
    }

    public function destroy($id)
    {
        Pickup::destroy($id);
        return response()->json([
            'success' => true,
            'message' => 'Pickup Point Deleted'
        ]);
    }
}
