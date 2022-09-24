@php
   error_reporting(E_ALL);
@endphp
@extends('admin.master')
@section('title')
    Brand
@endsection

@section('admin_head_css')
@endsection
@section('admin_contents')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Admin Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
{{--                            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>--}}
                            <li class="breadcrumb-item active">Website Setting</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Website Setting</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" action="{{ isset($setting)?  route('setting.edit',$setting->id): route('setting.store')}}" method="Post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone One</label>
                                        <input type="text" class="form-control" name="phone_one" value="{{$setting->phone_one?? ''}}" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone Two</label>
                                        <input type="text" class="form-control" name="phone_two" value="{{$setting->phone_two ?? ''}}" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Main Email</label>
                                        <input type="email" class="form-control" name="main_email" value="{{$setting->main_email ?? ''}}" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Support Email</label>
                                        <input type="email" class="form-control" name="support_email" value="{{$setting->support_email ?? ''}}" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Address</label>
                                        <input type="text" class="form-control" name="address" value="{{$setting->address ?? ''}}" >
                                    </div>

                                    <strong class="text-info">Social Link</strong>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Facebook</label>
                                        <input type="text" class="form-control" name="facebook" value="{{$setting->facebook ?? ''}}" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Twitter</label>
                                        <input type="text" class="form-control" name="twitter" value="{{$setting->twitter ?? ''}}" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Instagram</label>
                                        <input type="text" class="form-control" name="instagram" value="{{$setting->instagram ?? ''}}" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Linkedin</label>
                                        <input type="text" class="form-control" name="linkedin" value="{{$setting->linkedin ??''}}" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Youtube</label>
                                        <input type="text" class="form-control" name="youtube" value="{{$setting->youtube ?? ''}}" >
                                    </div>

                                    <strong class="text-info">Logo & Favicon</strong>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Main Logo</label>
                                        <input type="file" class="form-control" name="logo" id="logo" >
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    @if (isset($setting))
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    @else
                                    <button type="submit" class="btn btn-primary">Create</button>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
