@extends('admin.master')

@section('title')
Admin|Sub Category
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

                    <form id="formid2" action="{{route('sub-category.update', $sub_category->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-bold">Update Sub Category</h4>
                            </div>
                            <div class="card-body">
                                @if ($errors->any())
                                    @foreach($errors->all() as  $error)
                                    <li class="text-danger ml-4">{{ $error }}</li>
                                    @endforeach
                                @endif                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category Name</label>
                                    <select name="category_id" id=""  class="form-control">
                                        @foreach ($categories as $category)                                         
                                        <option {{ $category->id == $sub_category->category_id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Sub Category Name</label>
                                    <input type="text" name="sub_category_name" value="{{ $sub_category->sub_category_name }}" class="form-control" id="exampleInputEmail1">
                                </div>
                                
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update Sub Category</button>
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
