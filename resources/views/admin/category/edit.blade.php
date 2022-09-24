@extends('admin.master')

@section('title')
Admin|Category
@endsection

@section('admin_head_css')

@endsection

@section('admin_contents')
<!-- Main content -->
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row mt-4">
                <div class="col-6 m-auto">

                    <form id="formid2" action="{{route('category.update', $data->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Category</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category Name</label>
                                    <input type="text" name="category_name" value="{{ $data->category_name }}" class="form-control" id="exampleInputEmail1"
                                        placeholder="Category name">
                                </div>
                                @error('category_name')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Edit Category</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@push('admin_js')
@endpush
