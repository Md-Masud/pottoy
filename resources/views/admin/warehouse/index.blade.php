@extends('admin.master')
@section('title')
    Brand
@endsection

@section('admin_head_css')
    {{-- data table --}}

    <link rel="stylesheet" href="{{asset('admin_asset')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('admin_asset')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('admin_asset')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

{{--    <link href="{{ asset('admin_asset/plugins/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">--}}
@endsection
@section('admin_contents')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">WareHouse</h1>
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
                                <h3 class="card-title">Warehouse list </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="products-table" class="table table-bordered table-striped table-sm ytable">
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Warehouse Name</th>
                                        <th>Warehouse Address</th>
                                        <th>Warehouse Phone</th>
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
    @include('admin.warehouse.form')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @push('admin_js')
    {{-- <script --}}
  {{-- src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script> --}}

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
        <script src="{{asset('admin_asset')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
{{--        <script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2..min.css"></script>--}}
{{--        <script src="{{ asset('admin_asset/plugins/sweetalert2/sweetalert2.min.js') }}"></script>--}}
        <script>

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
                processing: true,
                serverSide: true,
                ajax: "{{ url('admin/warehouse') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'warehouse_name', name: 'warehouse_name'},
                    {data: 'warehouse_address', name: 'warehouse_address'},
                    {data: 'warehouse_phone', name: 'warehouse_phone'},
                    {data: 'action', name: 'action', orderable: true, searchable: true},

                ]
            });

                    function addForm() {
                        save_method = "add";
                        $('input[name=_method]').val('POST');
                        $('#modal-form').modal('show');
                        $('#modal-form form')[0].reset();
                        $('.modal-title').text('Add Warehouse');
                    }

                   function editForm(id) {
                    save_method = 'edit';
                    $('input[name=_method]').val('PUT');
                    $('#modal-form form')[0].reset();
                    $.ajax({
                    url: "{{ route('warehouse.index') }}" + '/' + id + "/edit",
                    type: "GET",
                    dataType: "JSON",
                    success: function(data) {
                        console.log(data)
                        $('#modal-form').modal('show');
                        $('.modal-title').text('Edit Products');

                         $('#id').val(data.id);
                          $('#warehouse_name').val(data.warehouse_name);
                         $('#warehouse_address').val(data.warehouse_address);
                          $('#warehouse_phone').val(data.warehouse_phone);

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
                        if (save_method == 'add') url = "{{  route('warehouse.store') }}";
                        else url = "{{ route('warehouse.index') }}" + '/' + id + "update";
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
                                table.ajax.reload();
                                swal({
                                    title: 'Success!',
                                    text: data.message,
                                    type: 'success',
                                    timer: '1500'
                                })
                            },
                            error : function(data){
                                swal({
                                    title: 'Oops...',
                                    text: data.message,
                                    type: 'error',
                                    timer: '1500'
                                })
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
                            url : "{{ route('warehouse.index') }}" + '/' + id + "destroy",
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
                //
                // $('#delete-form-').submit(function () {
                //
                //
                //
                // });
            }

        </script>


    @endpush

@endsection





