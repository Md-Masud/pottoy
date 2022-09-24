@extends('admin.master')
@section('title')
Admin|Category
@endsection

@section('admin_head_css')
{{-- data table --}}
<link rel="stylesheet" href="{{asset('admin_asset')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{asset('admin_asset')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="{{asset('admin_asset')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection

@section('admin_contents')
<!-- Main content -->
<div class="content-wrapper">
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title" style="font-size: 24px;">Category</h3>
                        <div style="float: right;">
                          <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-default">
                            <span style="font-weight: bold;">+</span> Add Category
                          </button>
                        </div>
                        
                          
                        <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
                         
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Add Category</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">×</span>
                                </button>
                              </div>
                              <form id="formid" action="{{route('category.store')}}" method="POST">
                                @csrf
                                <div class="modal-body">
                                
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Category Name</label>
                                      <input type="text" name="category_name" id="category_name" class="form-control add_input_val" id="exampleInputEmail1" placeholder="Category name">
                                    </div>
                                    
                                       @error('category_name')
                                       <div class="alert alert-danger">
                                         {{ $message }}
                                       </div>
                                       @enderror

                                       
                                </div>
                                <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="submit" id="toto" class="btn btn-primary">Add Category</button>
                                </div>
                              </form>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                    </div>
                   
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                         
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                                        role="grid" aria-describedby="example1_info">
                                        @if (session('success'))
                                            <div class="alert alert-success">
                                              {{ session('success') }}
                                            </div>
                                        @endif
                                        @if (session('delete'))
                                            <div class="alert alert-danger">
                                              {{ session('delete') }}
                                            </div>
                                        @endif
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting sorting_asc" tabindex="0" aria-controls="example1"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Rendering engine: activate to sort column descending">
                                                   Serial no.</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending">
                                                    Category Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Platform(s): activate to sort column ascending">
                                                    Category Slug</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Engine version: activate to sort column ascending">
                                                    Created At</th>
                                                    <th>Action</th>                                           
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($categories as $category )                                           
                                            <tr class="">
                                                <td>{{ $loop->index +1 }}</td>
                                                <td>{{ $category->category_name }}</td>
                                                <td>{{ $category->category_slug }}</td>
                                                <td>{{ $category->created_at->diffForHumans() }}</td>
                                                <td>
                                                  <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    <label>
                                                      <a href="{{ route('category.edit', $category->id) }}" class="btn btn-info" type="radio" name="options" id="option_a1" autocomplete="off" checked=""> Edit </a>
                                                    </label>
                                                    <label>
                                                      <a href="#" class="btn btn-danger" onclick="deleteId({{ $category->id}})" type="radio" name="options" id="option_a2" autocomplete="off"> Delete </a>
                                                    </label>
                                                    <form action="{{ route('category.destroy', $category->id) }}" method="POST" id="formDelete-{{ $category->id }}">
                                                      @csrf
                                                      @method('DELETE')
                                                    </form>
                                                  </div>
                                                </td>                                               
                                            </tr>
                                          @endforeach
                                        </tbody>                                      
                                    </table>                                                                        
                                </div>
                            </div>                          
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
</div>
@endsection
@push('admin_js')

<!-- DataTables  & Plugins -->
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


  @if ($errors->any())
  <script type="text/javascript">
           $('#modal-default').modal('show');
 
  </script>
@endif

{{-- 
  @if ($errors->any())
  <script type="text/javascript">
      $( document ).ready(function() {
          document.getElementById("modal-default").style.display = "block"; ;
      });
  </script>
@endif --}}

<script>
  // data table
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


    // sweet alert 2
     function deleteId(id){
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          event.preventDefault();
          document.getElementById('formDelete-'+id).submit();
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
        }
      })
    }




</script>
@endpush
