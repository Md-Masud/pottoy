<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Warehouse;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use SweetAlert;

class WarehouseController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Warehouse::all();

            return DataTables::of($data)
                ->addIndexColumn()

                ->addColumn('action', function ($row) {

                    $actionbtn = '<button onclick="editForm('. $row->id .')" class="btn btn-primary waves-effect"><i class="glyphicon glyphicon-edit"></i> Edit</button>
                      	<button class="btn btn-danger waves-effect"  id="delete_coupon" type="button"
                                                        onclick="deleteId(' . $row->id . ')">
                                                    <i class="material-icons">delete</i>

                                              <form id="delete-form-' . $row->id . '" action="' . route('warehouse.destroy', [$row->id]) . '" method="POST" style="display: none;">
                       ' . csrf_field() . '
                       ' . method_field("DELETE") . '
                    </form> ';
                    return $actionbtn;

                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.warehouse.index');

    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'warehouse_name'=>'required',
            'warehouse_address'=>'required',
        ]);
        Warehouse::create($request->all());
        return response()->json([
            'success' => true,
            'message' => 'warehouse Created'
        ]);

    }
    public function edit($id)
    {
        $data=Warehouse::find($id);
        return response()->json($data);
    }

    public function update(Request $request,$id )
    {
        $this->validate($request,[
            'warehouse_name'=>'required',
        ]);
        Warehouse::find($id)->update($request->all());
        return response()->json([
            'success' => true,
            'message' => 'Update Created'
        ]);

    }
    public function destroy($id)
    {
        Warehouse::destroy($id);
        return response()->json([
            'success' => true,
            'message' => 'Warehouse Deleted'
        ]);

    }
}
