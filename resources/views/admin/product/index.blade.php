
@extends('admin.master')
@section('title')
    product
@endsection

@section('admin_head_css')
    {{-- data table --}}
    <link rel="stylesheet" href="{{asset('admin_asset')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('admin_asset')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('admin_asset')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">


@endsection
@section('admin_contents')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Product</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <a onclick="addForm()" class="btn btn-primary pull-right" style="margin-top: -8px;">+ Add New</a>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">All Product List </h3>
                            </div><br>
                            <div class="row p-2">
                                <div class="form-group col-2 m-auto">
                                    <label>Category</label>
                                    <select class="form-control submitable" name="category_id" id="category_id">
                                        <option value="">All</option>
                                        @foreach($categories as $row)
                                            <option value="{{ $row->id }}">{{ $row->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-2 m-auto">
                                    <label>Brand</label>
                                    <select class="form-control submitable" name="brand_id" id="brand_id">
                                        <option value="">All</option>
                                        @foreach($brands as $row)
                                            <option value="{{ $row->id }}">{{ $row->brand_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-2 m-auto">
                                    <label>warehouses</label>
                                    <select class="form-control submitable" name="warehouse_id" id="warehouse_id">
                                        <option value="">All</option>
                                        @foreach($warehouses as $row)
                                            <option value="{{ $row->id}}">{{ $row->warehouse_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-2 m-auto">
                                    <label>Pickup</label>
                                    <select class="form-control submitable" name="pickup_id" id="pickup_id">
                                        <option value="">All</option>
                                        @foreach($pickup_point as $row)
                                            <option value="{{ $row->id }}">{{ $row->pickup_point_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-2 m-auto">
                                    <label>Status</label>
                                    <select class="form-control submitable" name="status" id="status">
                                        <option value="2">All</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="products-table" class="table table-bordered table-striped table-sm ytable">
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Thumbnail</th>
                                        <th>Name</th>
                                        <th>Code</th>
                                        <th>Category</th>
                                        <th>Subcategory</th>
                                        <th>Brand</th>
                                        <th>Featured</th>
                                        <th>Today Deal</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('admin.product.form')


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.js"></script>
    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/4.0.0-alpha.1/js/bootstrap-switch.min.js"></script>
    <script type="text/javascript">
        $('.dropify').dropify();

        $("input[data-bootstrap-switch]").each(function(){
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        });
        </script>

    @push('admin_js')

        <!-- DataTables  & Plugins -->
        <script src="{{asset('admin_asset/validator/validator.min.js')}}"></script>

        <script src="{{asset('admin_asset')}}/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="{{asset('admin_asset')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="{{asset('admin_asset')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="{{asset('admin_asset')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="{{asset('admin_asset')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="{{asset('admin_asset')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="{{asset('admin_asset')}}/plugins/jszip/jszip.min.js"></script>
        <script src="{{asset('admin_asset')}}/plugins/pdfmake/pdfmake.min.js"></script>
        <script src="{{asset('admin_asset')}}/plugins/pdfmake/vfs_fonts.js"></script>
        <script src="{{asset('admin_asset')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="{{asset('admin_asset')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="{{asset('admin_asset')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>.
        <script src="{{ asset('admin_asset/plugins/summernote/summernote-bs4.min.js') }}"></script>
        <script>
        $(function () {
        // Summernote
        $('.textarea').summernote('code')
        $('.textarea').summernote('reset');
        })
       </script>

        <script>
    //          function dataclear(){

    //             $('#color').tagsinput('add','');
    //             $("#modal-form").remove(".dropify");

    //             $("#modal-form input[name=featured]").remove();

    // }
    function dataClear(){
        $('#error_name').text('');
                                $('#error_code').text('');
                                $('#error_name').text('');
                                $('#error_category').text('');
                                $('#error_sub_category').text('');
                                $('#error_brand').text('');
                                $('#error_color').text('');
                                $('#error_description').text('');
                                $('#error_selling_price').text('');
                                $('#error_unit').text('');
                                $('#error_thumbnail').text('');

    }

            //store coupon ajax call
            $(function () {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "single": true,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
            var table = $('#products-table').DataTable({
                "processing":true,
                "serverSide":true,
                "searching":true,
                "ajax":{
                    "url": "{{ url('admin/product') }}",
                    "data":function(e) {
                        e.category_id =$("#category_id").val();
                        e.brand_id =$("#brand_id").val();
                        e.status =$("#status").val();
                        e.pickup_id=$('#pickup_id').val();
                        e.warehouse=$('#warehouse_id').val();

                    }
                },
                columns:[

                    {data:'DT_RowIndex',name:'DT_RowIndex'},
                    {data:'thumbnail'  ,name:'thumbnail'},
                    {data:'name'  ,name:'name'},
                    {data:'code'  ,name:'code'},
                    {data:'category_name',name:'category_name'},
                    {data:'sub_category_name',name:'sub_category_name'},
                    {data:'brand_name',name:'brand_name'},
                    {data:'featured',name:'featured'},
                    {data:'today_deal',name:'today_deal'},
                    {data:'status',name:'status'},
                    {data:'action',name:'action',orderable:true, searchable:true},
                ]

            });
            function addForm() {
                save_method = "add";
                $('input[name=_method]').val('POST');
                $('#modal-form').modal('show');
                $('#modal-form form')[0].reset();

                $('.modal-title').text('Add Product');
            }
            function editForm(id) {
                var data;
                save_method = 'edit';
                $('input[name=_method]').val('PUT');
                $('#modal-form form')[0].reset();
                $.ajax({
                    url: "{{ route('product.index') }}" + '/' + id + "/edit",
                    type: "GET",
                    dataType: "JSON",
                    success: function(data) {
                        console.log(data)
                        $('#modal-form').modal('show');
                        $('.modal-title').text('Edit Products');
                        $('#id').val(data.id);
                        $('#name').val(data.name);
                        $('#code').val(data.code);
                        $('#category_d').val(data.category_id);
                        $('#sub_category').val(data.sub_category_id);
                        $('#brand').val(data.brand_id);
                        $('#pickup_point').val(data.pickups_id);
                        $('#warehouse').val(data.warehouse_id);
                        $('#unit').val(data.unit);
                        $('#tags').tagsinput('add',data.tags);
                        $('#purchase_price').val(data.purchase_price);
                        $('#selling_price').val(data.selling_price);
                        $('#discount_price').val(data.discount_price);
                        $('#stock_quantity').val(data.stock_quantity);
                        $('#tagsinput').tagsinput('add', data.size);
                        $('#color').tagsinput('add', data.color);

                       // $('#tags').html(data.size);
                        $('#description').summernote('code',data.description);
                        $('#video').val(data.video);
                        //$('#thumbnail').val(data.thumbnail);
                        // $('#images').val(data.images);
                        $('#featured').val(data.featured);
                        $('#today_deal').val(data.today_deal);
                        $('#product_slider').val(data.product_slider);
                        $('#trendy').val(data.trendy);
                        $('#status').val(data.status);

                    },
                    error : function() {
                        alert("Nothing Data");
                    }
                });
            }

            $(function(){
                $('#modal-form form').validator().on('submit', function (e) {
                    if (!e.isDefaultPrevented()){
                        var id = $('#id').val();
                        if (save_method == 'add') url = "{{  route('product.store') }}";
                        else url = "{{ route('product.index') }}" + '/' + id + "update";
                        $.ajax({
                            url : url,
                            type : "POST",
                            //hanya untuk input data tanpa dokumen
//                      data : $('#modal-form form').serialize(),
                            data: new FormData($("#modal-form form")[0]),
                            contentType: false,
                            processData: false,
                            success : function(data) {
                                $('#modal-form').modal('hide');
                                location.reload();
                               // table.ajax.reload();
                                swal({
                                    title: 'Success!',
                                    text: data.message,
                                    type: 'success',
                                    timer: '1500'
                                })
                            },
                            error : function(data){
                                dataClear();
                                console.log(data);
                                $('#error_name').text(data.responseJSON.errors.name);
                                $('#error_code').text(data.responseJSON.errors.code);
                                $('#error_name').text(data.responseJSON.errors.name);
                                $('#error_category').text(data.responseJSON.errors.category_id);
                                $('#error_sub_category').text(data.responseJSON.errors.sub_category_id);
                                $('#error_brand').text(data.responseJSON.errors.brand_id);
                                $('#error_color').text(data.responseJSON.errors.color);
                                $('#error_description').text(data.responseJSON.errors.description);
                                $('#error_selling_price').text(data.responseJSON.errors.selling_price);
                                $('#error_unit').text(data.responseJSON.errors.unit);
                                $('#error_thumbnail').text(data.responseJSON.errors.thumbnail);
                                if(data.responseJSON==false){
                                    swal({
                                    title: 'Oops...',
                                    text: data.message,
                                    type: 'error',
                                    timer: '1500'
                                })

                                }

                            }
                        });
                        return false;
                    }
                });
            });
            function deleteId(id) {
                var csrf_token = $('meta[name="csrf-token"]').attr('content');
                swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    confirmButtonClass: 'btn btn-success',
                    cancelButtonClass: 'btn btn-danger',
                    buttonsStyling: false,
                    reverseButtons: true
                }).then((result) => {
                    if (result.value) {
                        event.preventDefault();

                        $.ajax({
                            url : "{{ route('product.index') }}" + '/' + id + "destroy",
                            type : "POST",
                            data : {'_method' : 'DELETE', '_token' : csrf_token},
                            success: function (data) {
                                table.ajax.reload();
                                swal({
                                    title: 'Success!',
                                    text: data.message,
                                    type: 'success',
                                    timer: '1500'
                                })
                            },
                            error: function () {
                                swal({
                                    title: 'Oops...',
                                    text: data.message,
                                    type: 'error',
                                    timer: '1500'
                                })
                            }
                        });
                    } else if (
                        // Read more about handling dismissals
                        result.dismiss === swal.DismissReason.cancel
                    ) {
                        swal(
                            'Cancelled',
                            'Your data is safe :)',
                            'error'
                        )
                    }
                })
            }
            $('body').on('click','.deactive_featurd', function(){
                var id=$(this).data('id');
                var url = "{{ url('product/not-featured') }}/"+id;
                $.ajax({
                    url:url,
                    type:'get',
                    success: function (data) {
                        table.ajax.reload();
                        swal({
                            title: 'Success!',
                            text: data.message,
                            type: 'success',
                            timer: '1500'
                        })
                    },
                    error: function () {
                        swal({
                            title: 'Oops...',
                            text: data.message,
                            type: 'error',
                            timer: '1500'
                        })
                    }
                });
            });

            //Active featured
            $('body').on('click','.active_featurd', function(){
                var id=$(this).data('id');
                var url = "{{ url('product/active-featured') }}/"+id;
                $.ajax({
                    url:url,
                    type:'get',
                    success: function (data) {
                        table.ajax.reload();
                        swal({
                            title: 'Success!',
                            text: data.message,
                            type: 'success',
                            timer: '1500'
                        })
                    },
                    error: function () {
                        swal({
                            title: 'Oops...',
                            text: data.message,
                            type: 'error',
                            timer: '1500'
                        })
                    }
                });
            });
            //deactive today deal
            $('body').on('click','.deactive_deal', function(){
                var id=$(this).data('id');
                var url = "{{ url('product/not-deal') }}/"+id;
                $.ajax({
                    url:url,
                    type:'get',
                    success: function (data) {
                        table.ajax.reload();
                        swal({
                            title: 'Success!',
                            text: data.message,
                            type: 'success',
                            timer: '1500'
                        })
                    },
                    error: function () {
                        swal({
                            title: 'Oops...',
                            text: data.message,
                            type: 'error',
                            timer: '1500'
                        })
                    }
                });
            });

            //Active today deal
            $('body').on('click','.active_deal', function(){
                var id=$(this).data('id');
                var url = "{{ url('product/active-deal') }}/"+id;
                $.ajax({
                    url:url,
                    type:'get',
                    success: function (data) {
                        table.ajax.reload();
                        swal({
                            title: 'Success!',
                            text: data.message,
                            type: 'success',
                            timer: '1500'
                        })
                    },
                    error: function () {
                        swal({
                            title: 'Oops...',
                            text: data.message,
                            type: 'error',
                            timer: '1500'
                        })
                    }
                });
            });

            //deactive status
            $('body').on('click','.deactive_status', function(){
                var id=$(this).data('id');
                var url = "{{ url('product/not-status') }}/"+id;
                $.ajax({
                    url:url,
                    type:'get',
                    success: function (data) {
                        table.ajax.reload();

                        swal({
                            title: 'Success!',
                            text: data.message,
                            type: 'success',
                            timer: '1500'
                        })
                    },
                    error: function () {
                        swal({
                            title: 'Oops...',
                            text: data.message,
                            type: 'error',
                            timer: '1500'
                        })
                    }
                });
            });

            //Active status
            $('body').on('click','.active_status', function(){
                var id=$(this).data('id');
                var url = "{{ url('product/active-status') }}/"+id;
                $.ajax({
                    url:url,
                    type:'get',
                    success: function (data) {
                        table.ajax.reload();
                        swal({
                            title: 'Success!',
                            text: data.message,
                            type: 'success',
                            timer: '1500'
                        })
                    },
                    error: function () {
                        swal({
                            title: 'Oops...',
                            text: data.message,
                            type: 'error',
                            timer: '1500'
                        })
                    }
                });
            });

            $(document).on('change','.submitable', function(){
             $('#products-table').DataTable().ajax.reload();
           });

        </script>

    @endpush

@endsection
