
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Add New Coupon</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="text-danger " aria-hidden="true">&times;</span>
                </button>
            </div>
            <form  id="form-item" method="POST"  class="form-horizontal" data-toggle="validator" enctype="multipart/form-data" >
                @csrf
                {{-- <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}"> --}}

                <div class="modal-body">
                    <input type="hidden" id="id" name="id">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="brand-name">Coupon Code</label>
                            <input type="text" class="form-control" id="coupon_code" name="coupon_code"  >
                            <span class="text-danger "  id="coupon_code_error"></span>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="Start-date">Valid Date<span class="text-danger " class="text-text-danger ">*</span></label>
                            <input type="date" class="form-control" id="valid_date" name="valid_date" >
                            <span class="text-danger " id="valide_date_error"></span>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="Start-date">Type <span class="text-danger " class="text-text-danger ">*</span></label>
                                <input type="number" class="form-control" id="type" name="type" >
                                <span class="text-danger " id="type_error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="Start-date">Amount <span class="text-danger " class="text-text-danger ">*</span></label>
                                <input type="number" class="form-control" id="coupon_amount" name="coupon_amount" >
                                <span class="text-danger "  id="amount_error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="start-date">Status<span class="text-danger " class="text-text-danger ">*</span></label>
                                <select class="form-control" id="status" name="status" >
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-text-danger " data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary button_i">Submit</button>
                </div>

            </form>
        </div>
    </div>
    <!-- /.modal-content -->

