<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Pickup;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            // $data = Product::with(
            //     'category',
            //     'subcategory',
            //     'brand',
            //     'warehouse',
            //     'pickuppoint'
            // )->get();
            $data = '';
            $query = DB::table('products')
                ->leftJoin(
                    'categories',
                    'products.category_id',
                    'categories.id'
                )
                ->leftJoin(
                    'sub_categories',
                    'products.sub_category_id',
                    'sub_categories.id'
                )
                ->leftJoin('brands', 'products.brand_id', 'brands.id');
            if ($request->category_id) {
                $query->where('products.category_id', $request->category_id);
            }

            if ($request->brand_id) {
                $query->where('products.brand_id', $request->brand_id);
            }

            if ($request->warehouse) {
                $query->where('products.warehouse_id', $request->warehouse);
            }

            if ($request->pickup_id) {
                $query->where('products.pickups_id', $request->pickup_id);
            }
            if ($request->status == 1) {
                $query->where('products.status', 1);
            }
            if ($request->status == 0) {
                $query->where('products.status', 0);
            }
            $data = $query
                ->select(
                    'products.*',
                    'categories.category_name',
                    'sub_categories.sub_category_name',
                    'brands.brand_name'
                )
                ->get();

            return DataTables::of($data)
                ->addIndexColumn()
                // ->addColumn('category_name', function ($data) {
                //     return $data->category->category_name;
                // })
                // ->addColumn('sub_category_name', function ($data) {
                //     return $data->subcategory->sub_category_name;
                // })
                // ->addColumn('brand_name', function ($data) {
                //     return $data->brand->brand_name;
                // })
                // ->addColumn('warehouse_name', function ($data) {
                //     return $data->warehouse->warehouse_name;
                // })
                // ->addColumn('pickup_point_name', function ($data) {
                //     return $data->pickuppoint->pickup_point_name;
                // })
                ->addColumn('thumbnail', function ($data) {
                    if ($data->thumbnail == null) {
                        return 'No Image';
                    }
                    return '<img class="rounded-square" text-align="center" width="100" height="50" src=" ' .
                        asset('public/files/product/' . $data->thumbnail) .
                        ' " alt="" >';
                })

                ->editColumn('featured', function ($row) {
                    if ($row->featured == 1) {
                        return '<a href="#" data-id="' .
                            $row->id .
                            '" class="deactive_featurd"><i class="fas fa-thumbs-down text-danger"></i> <span class="badge badge-success">active</span> </a>';
                    } else {
                        return '<a href="#" data-id="' .
                            $row->id .
                            '" class="active_featurd"> <i class="fas fa-thumbs-up text-success"></i> <span class="badge badge-danger">deactive</span> </a>';
                    }
                })
                ->editColumn('today_deal', function ($row) {
                    if ($row->today_deal == 1) {
                        return '<a href="#" data-id="' .
                            $row->id .
                            '" class="deactive_deal"><i class="fas fa-thumbs-down text-danger"></i> <span class="badge badge-success">active</span> </a>';
                    } else {
                        return '<a href="#" data-id="' .
                            $row->id .
                            '" class="active_deal"><i class="fas fa-thumbs-up text-success"></i> <span class="badge badge-danger">deactive</span> </a>';
                    }
                })
                ->editColumn('status', function ($row) {
                    if ($row->status == 1) {
                        return '<a href="#" data-id="' .
                            $row->id .
                            '" class="deactive_status"><i class="fas fa-thumbs-down text-danger"></i> <span class="badge badge-success">active</span> </a>';
                    } else {
                        return '<a href="#" data-id="' .
                            $row->id .
                            '" class="active_status"><i class="fas fa-thumbs-up text-danger"></i> <span class="badge badge-danger">deactive</span> </a>';
                    }
                })
                ->addColumn('action', function ($row) {
                    $actionbtn =
                        '<a href="#" class="btn btn-info btn-sm edit" onclick="editForm(' .
                        $row->id .
                        ')" data-toggle="modal" data-target="#childeditModal"><i class="fas fa-edit"></i></a>
                      	</a>
                      	<button class="btn btn-danger waves-effect" type="button"
                                                        onclick="deleteId(' .
                        $row->id .
                        ')">
                                                    <i class="material-icons">delete</i>
                                                </button>
                          <form id="delete-form-' .
                        $row->id .
                        '" action="' .
                        route('product.destroy', [$row->id]) .
                        '" method="POST" style="display: none;">
                       ' .
                        csrf_field() .
                        '
                      ' .
                        method_field('DELETE') .
                        '
                  </form>
                                               ';

                    return $actionbtn;
                })
                ->rawColumns([
                    'action',
                    'category_name',
                    'sub_category_name',
                    'brand_name',
                    'warehouse_name',
                    'pickup_point_name',
                    'featured',
                    'today_deal',
                    'status',
                    'thumbnail',
                ])
                ->make(true);
        }

        $categories = DB::table('categories')->get();
        $subcategories = SubCategory::with('category')->get();
        $brands = Brand::all();
        $warehouses = Warehouse::all();
        $pickup_point = Pickup::all();
        return view(
            'admin.product.index',
            compact(
                'categories',
                'subcategories',
                'brands',
                'warehouses',
                'pickup_point'
            )
        );
    }
    public function cat()
    {
        $category_id = request('category');
        $subcategory = SubCategory::where('category_id', $category_id)->get();
        $option = "<option value=''>Select SubCategory</option>";
        foreach ($subcategory as $sub) {
            $option .=
                '<option value="' .
                $sub->id .
                '">' .
                $sub->sub_category_name .
                '</option>';
        }

        return $option;
    }
    public function store(Request $request)
    {
        $id = Product::max('id');
        // dd($id);
        $this->validate($request, [
            'name' => 'required',
            'sub_category_id' => 'required',
            'brand_id' => 'required',
            'unit' => 'required',
            'selling_price' => 'required',
            'color' => 'required',
            'description' => 'required',
            'thumbnail' => 'required'
        ]);

        $data = new Product();
        $data->name = $request->name;
        $slug = $data->slug = Str::slug($request->name, '-');
        $data->code = substr($request->name, 0, 3) . str_pad(($id + 1), 4, "0", STR_PAD_LEFT);
        $data->category_id = $request->category_id;
        $data->sub_category_id = $request->sub_category_id;
        $data->brand_id = $request->brand_id;
        $data->pickups_id = $request->pickup_point_id;
        $data->warehouse_id = $request->warehouse_id;
        $data->unit = $request->unit;
        $data->tags = $request->tags;
        $data->purchase_price = $request->purchase_price;
        $data->selling_price = $request->selling_price;
        $data->discount_price = $request->discount_price;
        $data->stock_quantity = $request->stock_quantity;
        $data->color = $request->color;
        $data->size = $request->size;
        $data->description = $request->description;
        $data->video = $request->video;
        $data->featured = $request->featured;
        $data->today_deal = $request->today_deal;
        $data->product_slider = $request->product_slider;
        $data->status = $request->status;
        $data->admin_id = Auth::id();
        $data->date = date('Y-m-d H:i:s');
        $data->month = date('Y-m-d H:i:s');
        //single thumbnail

        if ($request->thumbnail) {
            $thumbnail = $request->thumbnail;
            $photoname = time() . '.' . $slug . '.' . $thumbnail->getClientOriginalExtension();
            Image::make($thumbnail)->resize(600, 600)->save('public/files/product/' . $photoname);
            $data->thumbnail = $photoname; // public/files/product/plus-point.jpg
        }
        //multiple images
        $images = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $key => $image) {
                $imageName = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();



                Image::make($image)
                    ->resize(600, 600)
                    ->save('public/files/product/' . $imageName);
                array_push($images, $imageName);
            }
            $data->images = json_encode($images);
        }
        $data->save();

        return response()->json([
            'success' => true,
            'message' => 'Products Created',
        ]);
    }
    public function edit($id)
    {
        $data = Product::with(
            'category',
            'subcategory',
            'brand',
            'warehouse',
            'pickuppoint'
        )->find($id);
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $i=trim($id,"update");
        $data = Product::findOrFail($id);
        $data->name = $request->name;
        $slug = $data->slug = Str::slug($request->name, '-');
        $data->code = substr($request->name, 0, 3) . str_pad(($i), 4, "0", STR_PAD_LEFT);;
        $data->category_id = $request->category_id;
        $data->sub_category_id = $request->sub_category_id;
        $data->brand_id = $request->brand_id;
        $data->pickups_id = $request->pickup_point_id;
        $data->warehouse_id = $request->warehouse_id;
        $data->unit = $request->unit;
        $data->tags = $request->tags;
        $data->purchase_price = $request->purchase_price;
        $data->selling_price = $request->selling_price;
        $data->discount_price = $request->discount_price;
        $data->stock_quantity = $request->stock_quantity;
        $data->color = $request->color;
        $data->size = $request->size;
        $data->description = $request->description;
        $data->video = $request->video;
        $data->featured = $request->featured;
        $data->today_deal = $request->today_deal;
        $data->product_slider = $request->product_slider;
        $data->status = $request->status;
        $data->admin_id = Auth::id();
        $data->date = date('Y-m-d H:i:s');
        $data->month = date('Y-m-d H:i:s');
        //single thumbnail
        if ($request->thumbnail) {
            if (!$data->thumbnail == null) {
                unlink(public_path('public/files/product/' . $data->thumbnail));
            }

            $thumbnail = $request->thumbnail;
            $photoname = time() . '.' . $slug .  '.' . $thumbnail->getClientOriginalExtension();
            Image::make($thumbnail)->resize(600, 600)->save('public/files/product/' . $photoname);
            $data->thumbnail = $photoname; // public/files/product/plus-point.jpg
        }
        //multiple images
        $images = [];
        if ($request->hasFile('images')) {
            $multiimage = json_decode($data->images);
            if (!$data->images == null) {
                foreach ($multiimage as $imagee) {
                    unlink(public_path('public/files/product/' . $imagee));
                }
            }
            foreach ($request->file('images') as $key => $image) {
                $imageName =
                    hexdec(uniqid()) .
                    '.' .
                    $image->getClientOriginalExtension();
                Image::make($image)
                    ->resize(600, 600)
                    ->save('public/files/product/' . $imageName);
                array_push($images, $imageName);
            }
            $data->images = json_encode($images);
        }

        $data->save();
        return response()->json([
            'success' => true,
            'message' => 'Products Update',
        ]);
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if (!$product->thumbnail == null) {
            unlink(public_path('public/files/product/' . $product->thumbnail));
        }
        $multiimage = json_decode($product->images);
        if (!$product->images == null) {
            foreach ($multiimage as $imagee) {
                unlink(public_path('public/files/product/' . $imagee));
            }
        }
        Product::destroy($id);
        return response()->json([
            'success' => true,
            'message' => 'Product  Deleted',
        ]);
    }

    public function notfeatured($id)
    {
        Product::where('id', $id)->update(['featured' => 0]);
        return response()->json([
            'success' => true,
            'message' => 'Product Not  Featured ',
        ]);
    }

    //active featured
    public function activefeatured($id)
    {
        Product::where('id', $id)->update(['featured' => 1]);
        return response()->json([
            'success' => true,
            'message' => 'Product Featured Activated',
        ]);
    }
    //not Deal
    public function notdeal($id)
    {
        Product::where('id', $id)->update(['today_deal' => 0]);
        return response()->json([
            'success' => true,
            'message' => 'Product Not Today deal ',
        ]);
    }

    //active Deal
    public function activedeal($id)
    {
        Product::where('id', $id)->update(['today_deal' => 1]);
        return response()->json([
            'success' => true,
            'message' => 'Product today deal Activated ',
        ]);
    }

    //not status
    public function notstatus($id)
    {
        Product::where('id', $id)->update(['status' => 0]);
        return response()->json([
            'success' => true,
            'message' => 'Product Status Deactive ',
        ]);
    }

    //active staus
    public function activestatus($id)
    {
        Product::where('id', $id)->update(['status' => 1]);
        return response()->json([
            'success' => true,
            'message' => 'Product Status Activated ',
        ]);
    }
}
