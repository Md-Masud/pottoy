@extends('admin.master')
@section('title')
  Coupon
@endsection

@section('admin_head_css')
    {{-- data table --}}
    <link rel="stylesheet" href="{{asset('admin_asset')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('admin_asset')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('admin_asset')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection
@section('admin_contents')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Coupon</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#brandModal"> + Add New</button>
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
                                <h3 class="card-title">All Coupon List Here</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="" class="table table-bordered table-striped table-sm ytable">
                                    <thead>
                                    <tr>
                                        <th >SL</th>
                                        <th>Coupon Code</th>
                                        <th>Valid Date</th>
                                        <th>Type</th>
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

        {{-- category insert modal --}}
        <div class="modal fade" id="brandModal"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            @include('admin.coupon.form')
        </div>
        </div>


    {{-- edit modal --}}
    <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Add New Coupon</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form  id="form-item_updare" method="POST"  class="form-horizontal" data-toggle="validator" enctype="multipart/form-data" >
                    @csrf
                    <input type="hidden" name="_token" id="token_update" value="{{ csrf_token() }}">
                    <div class="modal-body">
                        <input type="hidden" id="id" name="id">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="brand-name">Coupon Code</label>
                                <input type="text" class="form-control" id="coupon_code_updae" name="coupon_code"  >
                                <span  class="text-danger" id="coupon_code_error"></span>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="Start-date">Valid Date<span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="valid_date_updae" name="valid_date" >
                                <span class="text-danger" id="valide_date_error"></span>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="Start-date">Type <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="type_updae" name="type" >
                                    <span id="type_error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="Start-date">Amount <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="coupon_amount_updae" name="coupon_amount" >
                                    <span class="text-danger" id="amount_error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="start-date">Status<span class="text-danger">*</span></label>
                                    <select class="form-control" id="status_updae" name="status" >
                                        <option value="1">Active</option>
                                        <option value="0">Deactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary button_update">Submit</button>
                    </div>

                </form>
            </div>
        </div>
        <!-- /.modal-content -->
        </div>
    </div>
    @push('admin_js')
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
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
        <script src="{{asset('admin_asset')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
       <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
        function error_clear(){
            $('#coupon_code_error').text('');
            $('#valide_date_error').text('');
            $('#amount_error').text('');
        }
       function  add(){
          $.ajax({
            url:"{{ route('coupon.index') }}",
            dataType:'json',
            type:'GET',
            success:function(response){
                console.log(response);
                var data='';
                $.each(response,function(key,value){
                 data=data+'<tr>';
                 data=data+'<td>'+ (key+1) +'</td>';
                 data=data+'<td>'+value.coupon_code+'</td>';
                 dateObject = new Date(value.valid_date);

                 data=data+'<td>'+dateObject.toDateString()+'</td>';
                 data=data+'<td>'+value.type+'</td>';
                 if(value.status==1){
                    data=data+'<td class="text-center "><a href="#" data-id="'+value.id+'"class="deactive_deal" value="0"><i class="fas fa-thumbs-down text-danger"></i> <span class="badge badge-success">active</span> </a></td>'

                 }else{
                    data=data+'<td class="text-center "><a href="#" data-id="'+value.id+'"class="deactive_deal" value="0"><i class="fas fa-thumbs-down text-danger"></i> <span class="badge badge-success">Deactive</span> </a></td>'
                 }
                 data=data+'<td>'
                    data=data+ '<a href="#modalEdit"  data-toggle="modal" class="btn btn-info btn-sm edit" id="edit"  data-id="'+value.id +'" ><i class="fas fa-edit"></i></a>';
                    data= data+'<a href="#" class="btn btn-danger delete m-1" id="delete" data-toggle="modal" data-id="'+value.id+'">Delete</a>'
                data=data+'</td>';
                 data=data+'</tr>';

                })
                $('tbody').html(data)
            }
        });
        }
        add();

        // $('.button_i').on('click',function(){
        //     var csrf_token =$('#_token').val();
        //     var coupon_code=$('#coupon_code').val();
        //     var valid_date=$('#valid_date').val();
        //     var coupon_amount=$('#coupon_amount').val();
        //     var type=$('#type').val();
        //     var status=$('#status').val();
        //     $.ajax({
        //         url:"{{ route('coupon.store') }}",
        //         type : "POST",
        //         data:{
        //             '_token' : csrf_token,
        //            'coupon_amount':coupon_amount,
        //             'coupon_code':coupon_code,
        //             'valid_date':valid_date,
        //             'type':type,
        //             'status':status,
        //         },
        //         dataType:'JSON',

        //         success: function(result){

        //            console.log(result);
        //             toastr.success(result);
        //             location.reload();
        //         },
        //         error:function(error){
        //          console.log(error)
        //         }
        //     });

        // });
        $('#form-item').submit(function(event){
        event.preventDefault();
        $.ajax({
            url:"{{ route('coupon.store') }}",
                type:"POST",
            data:new FormData(this),
            dataType:'JSON',
            contentType: false,
            processData: false,
            success: function(result){
                error_clear()
                add();
                toastr.success(result);
                location.reload();
            },
            error:function( error){
                console.log(error);
                $('#coupon_code_error').text(error.responseJSON.errors.coupon_code);
                $('#valide_date_error').text(error.responseJSON.errors.valide_date);
                $('#amount_error').text(error.responseJSON.errors.coupon_amount);


            }
        });
        });
        $('body').on('click','#edit',function(){
            var id=$(this).data('id');

            $.ajax({
                url:"{{ route('coupon.index') }}" + '/' + id + "/edit",
                dataType:"JSON",
                type:"GET",
                success:function(res){
                    $('#id').val(res.id);
                    $('#coupon_code_updae').val(res.coupon_code);
                    $('#valid_date_updae').val(res.valid_date);
                    $('#coupon_amount_updae').val(res.coupon_amount);
                    $('#type_updae').val(res.type);
                    $('#status_updae').val(res.status);
                }
            })
        });

        $('.button_update').on('click',function(){
            var id=$('#id').val();

            var csrf_token = $('meta[name="csrf-token"]').attr('content');
            var coupon_code=$('#coupon_code_updae').val();
            var valid_date=$('#valid_date_updae').val();
            var coupon_amount=$('#coupon_amount_updae').val();
            var type=$('#type_updae').val();
            var status=$('#status_updae').val();
            $.ajax({
                url:"{{ route('coupon.index') }}" + '/' + id + "update",
                type:"POST",
                dataType:"JSON",
                data:{
                       '_method' : 'PATCH',
                        '_token' : csrf_token,
                        'coupon_amount':coupon_amount,
                        'coupon_code':coupon_code,
                        'valid_date':valid_date,
                        'type':type,
                        'status':status,
                    },

                success:function(res){

                    add();
                    error_clear();
                    location.reload();
                    toastr.success(res);

                }
            })
        })
       $('body').on('click','#delete',function(){
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
                        var id=$(this).data('id');
                        $.ajax({
                            url : "{{ route('coupon.index') }}" + '/' + id + "destroy",
                            type : "POST",
                            data : {'_method' : 'DELETE', '_token' : csrf_token},
                            success: function (data) {
                                add();
                               toastr.success(data);
                               //location.reload();

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
        });
        $('body').on('click','.deactive_deal',function(event){
            event.preventDefault();
            var id =$(this).data('id');
            var st=$('.deactive_deal').val();
            console.log(st);
            $.ajax({
                url:"{{ url('admin/coupon/status/')}}/"+id,
                type:'GET',
                dataType:'JSON',
                success:function(res){
                    add();
                    toastr.success(res);
                    // location.reload();
                }
            })
        });
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

        </script>


    @endpush

@endsection
