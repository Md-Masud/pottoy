
@extends('admin.master')
@section('title')
   Brand
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
                        <h1 class="m-0">Brand</h1>
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
                                <h3 class="card-title">All Brand List Here</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped table-sm ytable">
                                    <thead>
                                    <tr>
                                        <th >SL</th>
                                        <th>Brand Name</th>
                                        <th>Brand Slug</th>
                                        <th>Brand Logo</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($brands as $key=>$brand)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $brand->brand_name }}</td>
                                            <td>{{ $brand->brand_slug}}</td>
                                            <td>
                                                <img src="{{asset('public/files/brand_logo/'.$brand->brand_logo)}}" style="width: 100px; height: 100px;" alt="Girl in a jacket">
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-info btn-sm edit"
                                                   data-id="{{ $brand->id }}" data-toggle="modal"
                                                   data-target="#ourTeam"><i class="fas fa-edit"></i></a>
                                                <button class="btn btn-danger waves-effect" type="button"
                                                        onclick="deleteId({{ $brand->id }})">
                                                    <i class="material-icons">delete</i>
                                                </button>
                                                <form id="delete-form-{{ $brand->id }}"
                                                      action="{{ route('brand.destroy',$brand->id) }}"
                                                      method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

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
            @include('admin.brand.form')
        </div>
        </div>


    {{-- edit modal --}}
    <div class="modal fade" id="ourTeam" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div id="modal">
            </div>
        </div>
    </div>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.js"></script>

    <script type="text/javascript">
        $('.dropify').dropify();
    </script>
{{--    <script>--}}
{{--        $('#add_form').submit(function(e){--}}
{{--            e.preventDefault();--}}
{{--            $.ajax({--}}
{{--                type:'post',--}}
{{--                url: $(this).attr('action'),--}}
{{--                data: new FormData($("#brandModal form")[0]),--}}
{{--                contentType: false,--}}
{{--                 processData: false,--}}
{{--                success:function(data){--}}
{{--                    toastr.success(data);--}}
{{--                    $('#add_form')[0].reset();--}}
{{--                    $('#brandModal').modal('hide');--}}
{{--                    table.ajax.reload();--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}


{{--    </script>--}}

    <script type="text/javascript">
        $('body').on('click','.edit', function(){
            let brand_id=$(this).data('id');

            $.get("{{ route('brand.index') }}" + '/' +brand_id+ '/edit', function(data){
                $("#modal").html(data)
            });
        });
    </script>
    @push('admin_js')
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

        <!-- DataTables  & Plugins -->
{{--        <script src="{{asset('admin_asset')}}/plugins/validator/validator.min.js"></script>--}}
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

        </script>


    @endpush

@endsection
