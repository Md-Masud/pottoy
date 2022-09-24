<div class="modal fade"  id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <form  id="form-item" method="post"  class="form-horizontal" data-toggle="validator" enctype="multipart/form-data" >
                {{ csrf_field() }} {{ method_field('POST') }}

                <div class="modal-header">
                    <h3 style="text-align:left " class="modal-title"></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>

                </div>

                <div class="modal-body">
                    <input type="hidden" id="id" name="id">

                    <div class="modal-body">
                        <div class="form-group">
                            <label for="brand-name">Campaign Title </label>
                            <input type="text" class="form-control" id="title" name="title"  required="">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="Start-date">Start Date <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" id="start_date" name="start_date" required="">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="Start-date">End Date <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="end_date" name="end_date" required="">
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="start-date">Status<span class="text-danger">*</span></label>
                                <select class="form-control" id="status" name="status" >
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="End-date">Discount (%) <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="discount"  name="discount" required="">
                                <small id="emailHelp" class="form-text text-danger">Discount percentage are apply for all prodcut selling price</small>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="dropify" data-height="140" id="image" name="image">
                                <input type="hidden" name="old_image" id="old_image" >
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div class="modal fade"  id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <form  id="form-item" method="post"  class="form-horizontal" data-toggle="validator" enctype="multipart/form-data" >
                {{ csrf_field() }} {{ method_field('POST') }}

                <div class="modal-header">
                    <h3 style="text-align:left " class="modal-title"></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>

                </div>

                <div class="modal-body">
                    <input type="hidden" id="id" name="id">

                    <div class="modal-body">
                        <div class="form-group">
                            <label >pickup_point_name</label>
                            <input type="text" class="form-control @error('pickup_point_name') is-invalid @enderror" id="pickup_point_name" name="pickup_point_name"   >
                            <span class="help-block with-errors"></span>
                            @error('pickup_point_name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label >Pickup Point Address</label>
                            <input type="text" class="form-control" id="pickup_point_address" name="pickup_point_address"   >
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label >Pickup Point Phone</label>
                            <input type="text" class="form-control" id="pickup_point_phone" name="pickup_point_phone"  >
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label >Pickup Point Phone Two</label>
                            <input type="text" class="form-control" id="pickup_point_phone_two" name="pickup_point_phone_two"  >
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
