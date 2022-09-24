
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">@if(@isset($data))Edit Brand  @else Add New Brand  @endif</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form id="add_form" action="{{ isset($data) ? route('brand.update',$data->id) : route('brand.store') }}"
      method="Post" class="form-horizontal"  enctype="multipart/form-data" >
    {{ csrf_field() }} {{ method_field('POST') }}
    @if (isset($data->id))
        @method('PUT')
    @endif
    <div class="modal-body">
        <div class="form-group">
            <label for="category_name">Brand Name</label>
            <input type="text" id="brand_name" class="form-control @error('brand_name') is-invalid @enderror"  name="brand_name"    value="{{ $data->brand_name ?? ''  }}">
            <small id="emailHelp" class="form-text text-muted">This is your main  brand_name </small>
            @error('brand_name')
            <span class="invalid-feedback" role="alert">  <strong>{{ $message }}</strong> </span>
            @enderror
        </div>

    </div>
    <div class="modal-body">
        <div class="form-group">
            <label for="brand-name">Brand Logo</label>
            <input type="file" class="dropify" data-height="140" name="brand_logo">
            <input type="hidden" name="old_image" value="{{ $data->brand_logo ?? ''}}">
        </div>
    </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="Submit" class="btn btn-primary">
                @isset($data)
                    <i class="fas fa-arrow-circle-up"></i>
                    <span>Update</span>
                @else
                    <i class="fas fa-plus-circle"></i>
                    <span>Create</span>
                @endisset
            </button>
        </div>
</form>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

<script type="text/javascript" src="{{ asset('admin_asset/plugins/dropify.js') }}"></script>

<script type="text/javascript">
    $('.dropify').dropify();

</script>
</div>
