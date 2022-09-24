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
                            <label >Warehouse_name</label>
                            <input type="text" class="form-control @error('warehouse_name') is-invalid @enderror" id="warehouse_name" name="warehouse_name"   >
{{--                            <span class="help-block with-errors"></span>--}}
                            @error('warehouse_name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label >warehouse Address</label>
                            <input type="text" class="form-control" id="warehouse_address" name="warehouse_address"   >
{{--                            <span class="help-block with-errors"></span>--}}
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label >Warehouse Phone</label>
                            <input type="text" class="form-control" id="warehouse_phone" name="warehouse_phone"  >
{{--                            <span class="help-block with-errors"></span>--}}
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
