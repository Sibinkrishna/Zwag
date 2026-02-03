@extends('admin.layouts.app')
@section('content')
<!-- Start Container Fluid -->
               <div class="container-xxl">

                    <div class="row">
                         <div class="col-xl-12">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                              <div class="card">
                                   <div class="d-flex card-header justify-content-between align-items-center">
                                        <div>
                                             <h4 class="card-title" style="padding: 10px 0px;" >Add Product Attribute </h4>
                                        </div>
                                   </div>
                                   <div>
                                        <div class="table-responsive">
                                             <form class="body-form" method="post" action="{{route('attribute.store')}}">

                                                @csrf
                                                  <div id="attributes-container">
                                                       {{-- <div class="row mb-3">
                                                            <div class="col-lg-12">
                                                                 <label for="select-Category" class="form-label">Select Category</label>
                                                                 <select class="form-control" name="category_id" id="select-Category" data-choices name="choices-single-groups">
                                                                    <option value="">Choose a Category</option>
                                                                    @foreach ($categories as $category)
                                                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                                                    @endforeach

                                                                 </select>
                                                            </div>
                                                       </div> --}}
                                                       <div class="row d-flex justify-content-between align-items-center">
                                                            <div class="col-lg-6 col-sm-6">
                                                                 <label class="form-label">Attribute Key</label>
                                                                 <input type="text" class="form-control" name="key" placeholder="Enter Key">
                                                            </div>
                                                            <div class="col-lg-6 col-sm-6">
                                                                <div class="footer-btn-row" style="margin-top:30px;">
                                                                <button type="submit" value="Save Attribute" class="btn blk-btn add-btn"> Save Attribute</button>
                                                                <a value="Cancel" class="btn red-btn add-btn" href="{{ route('attribute.index') }}" > Cancel</a>
                                                                </div>
                                                            </div>
                                                       </div>
                                                  </div>

                                             </form>
                                        </div>
                                        <!-- end table-responsive -->
                                   </div>

                              </div>
                              <div class="card">
                                   <div class="d-flex card-header justify-content-between align-items-center">
                                        <div>
                                             <h4 class="card-title" style="padding: 10px 0px;" >Add Attribute Values</h4>
                                        </div>
                                   </div>
                                   <div>
                                        <div class="table-responsive">

                                                  <div id="attributes-container">
                                                    @foreach($attributes as $attribute)
                                                    <form class="body-form" method="POST" action="{{ route('attribute.values.store', $attribute) }}">
                                                            @csrf
                                                       <div class="row d-flex justify-content-between align-items-center">
                                                            <div class="col-lg-6 col-sm-6">
                                                                 <label class="form-label">{{ strtoupper($attribute->key) }}</label>
                                                                 <input type="text" class="form-control" name="value" placeholder="">
                                                            </div>
                                                            <div class="col-lg-6 col-sm-6">
                                                                <div class="footer-btn-row" style="margin-top:30px;">
                                                                <button type="submit" value="Save Attribute" class="btn blk-btn add-btn"> Save {{ ucfirst($attribute->key) }}</button>
                                                                <a value="Cancel" class="btn red-btn add-btn" href="{{ route('attribute.index') }}" > Cancel</a>
                                                                </div>
                                                            </div>
                                                       </div>
                                                       </form>
                                                       <ul>
                                                            @foreach($attribute->values as $value)
                                                                <li>{{ $value->value }}</li>
                                                            @endforeach
                                                        </ul>
                                                       @endforeach
                                                  </div>


                                        </div>
                                        <!-- end table-responsive -->
                                   </div>

                              </div>
                         </div>
                    </div>

               </div>
               <!-- End Container Fluid -->
               <script src="{{asset('admin/assets/js/jquery.js')}}"></script>
<script>
$(document).ready(function() {
    // When "Add More" is clicked
    $("#add-more-btn").click(function() {
        // Define the HTML for the new row
        var newRow = `
        <div class="row attribute-row ">
            <div class="mb-3 col-lg-10 col-sm-12">
                <label class="form-label">Attribute Value</label>
                <input type="text" class="form-control" name="attribute_value[]" placeholder="Enter Value">
            </div>
            <div class="mb-3 col-lg-2 col-sm-12 d-flex align-items-end">
                <button type="button" class="btn btn-danger remove-btn w-100">Remove</button>
            </div>
        </div>`;

        // Append it to the container
        $("#attributes-container").append(newRow);
    });

    // When "Remove" is clicked (using Event Delegation)
    $(document).on('click', '.remove-btn', function() {
        // Ensure at least one row remains if you want, or just remove
        if ($(".attribute-row").length > 1) {
            $(this).closest('.attribute-row').remove();
        } else {
            alert("You must have at least one attribute row.");
        }
    });
});
</script>

@endsection
