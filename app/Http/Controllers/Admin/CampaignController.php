<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\DataTables;

class CampaignController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Campaign::all();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('image', function($data){
                    if ($data->image == NULL){
                        return 'No Image';
                    }
                    return '<img class="rounded-square" width="50" height="50" src="'. url($data->image) .'" alt="">';
                })
                ->editColumn('status',function($row){
                    if ($row->status==1) {
                        return '<a href="#" data-id="'.$row->id.'" class="deactive_status"><i class="fas fa-thumbs-down text-danger"></i> <span class="badge badge-success">active</span> </a>';
                    }else{
                        return '<a href="#" data-id="'.$row->id.'" class="active_status"><i class="fas fa-thumbs-up text-danger"></i> <span class="badge badge-danger">deactive</span> </a>';
                    }
                })
                ->addColumn('action', function ($row) {

                    $actionbtn = '<button onclick="editForm('. $row->id .')" class="btn btn-primary waves-effect"><i class="glyphicon glyphicon-edit"></i> Edit</button>
                      	<button class="btn btn-danger waves-effect"  id="delete_coupon" type="button"
                                                        onclick="deleteId(' . $row->id . ')">
                                                    <i class="material-icons">delete</i>

                                              <form id="delete-form-' . $row->id . '" action="' . route('campaign.destroy', [$row->id]) . '" method="POST" style="display: none;">
                       ' . csrf_field() . '
                       ' . method_field("DELETE") . '
                    </form> ';
                    return $actionbtn;

                })
                ->rawColumns(['action','image','status'])
                ->make(true);
        }
        return view('admin.campaign.index');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required'

        ]);
        $input=$request->all();
        $input['image'] = null;
        if ($request->hasFile('image')){
            $input['image'] = 'public/files/campaign/'.Str::slug($input['title'], '-').'.'.time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('public/files/campaign/'), $input['image']);
        }

        Campaign::create($input);
        return response()->json([
            'success' => true,
            'message' => 'Campaign Created'
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Campaign::find($id);
        return response()->json($data);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'=>'required'

        ]);
        $input=$request->all();
        $campaing =Campaign::findOrFail($id);
        $input['image'] = $campaing->image;;
        if ($request->hasFile('image')){
            if (!$campaing->image == NULL){
                unlink(public_path($campaing->image));
            }
            $input['image'] = 'public/files/campaign/'.Str::slug($input['title'], '-').'.'.time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('public/files/campaign/'), $input['image']);
        }

        $campaing->update($input);
        return response()->json([
            'success' => true,
            'message' => 'update Created'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $campaign = Campaign::findOrFail($id);

        if (!$campaign->image == NULL){
            unlink(public_path($campaign->image));
        }

        Campaign::destroy($id);

        return response()->json([
            'success' => true,
            'message' => 'Campaign Deleted'
        ]);
    }
    //not status
    public function notstatus($id)
    {
        Campaign::where('id',$id)->update(['status'=>0]);
        return response()->json([
            'success' => true,
            'message' => 'Product Status Deactive '
        ]);

    }

    //active staus
    public function activestatus($id)
    {
        Campaign::where('id',$id)->update(['status'=>1]);
        return response()->json([
            'success' => true,
            'message' => 'Product Status Activated '
        ]);

    }

}
