@extends('admin.layouts.app')
@section('content')
    <!-- Start Container Fluid -->
    <div class="container-xxl">

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="d-flex card-header justify-content-between align-items-center">
                        <div>
                            <h4 class="card-title" style="padding: 10px 0px;">Add Product Attribute </h4>
                        </div>
                    </div>
                    <div>
                        <div class="table-responsive">
                            <form class="body-form" method="post" action="{{ route('attribute.update', $attribute->id) }}">
                                @method('PUT')
                                @csrf
                                <div id="attributes-container">
                                    {{-- <div class="row mb-3">
                                        <div class="col-lg-12">
                                            <label for="select-Category" class="form-label">Select Category</label>
                                            <select class="form-control" name="category_id" id="select-Category"
                                                data-choices name="choices-single-groups">
                                                <option value="">Choose a Category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}"
                                                        {{ ($attribute->category_id == $category->id)?'selected':'' }}>
                                                        {{ $category->category_name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div> --}}
                                    <div class="row attribute-row">
                                        <div class="mb-3 col-lg-12 col-sm-12">
                                            <label class="form-label">Attribute Key</label>
                                            <input type="text" class="form-control" name="attribute_key"
                                                value="{{ $attribute->key }}" placeholder="Enter Key">
                                        </div>
                                        @php
                                            $attribute_values = json_decode($attribute->value, true);
                                        @endphp
                                        @foreach ($attribute_values as $attribute_value)
                                            <div class="row attribute-row">
                                                <div class="mb-3 col-lg-10 col-sm-12">
                                                    <label class="form-label">Attribute Value</label>
                                                    <input type="text" class="form-control" name="attribute_value[]"
                                                        value="{{ $attribute_value }}" placeholder="Enter Value">
                                                </div>

                                                <div class="mb-3 col-lg-2 col-sm-12 d-flex align-items-end">
                                                    <button type="button" class="btn btn-danger remove-btn w-100">
                                                        Remove
                                                    </button>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>

                                <div class="footer-btn-row">
                                    <button type="button" value="Add More" id="add-more-btn"
                                        class="btn  yellow-btn add-btn"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="#fff" width="15px" height="15px"
                                            fill-rule="evenodd">
                                            <path fill-rule="evenodd"
                                                d="M 11 2 L 11 11 L 2 11 L 2 13 L 11 13 L 11 22 L 13 22 L 13 13 L 22 13 L 22 11 L 13 11 L 13 2 Z" />
                                        </svg> Add More</button>
                                    <button type="submit" value="Save Attribute" class="btn  blk-btn add-btn"> Save
                                        Attribute</button>
                                    <button value="Cancel" class="btn  red-btn add-btn"> Cancel</button>
                                </div>
                            </form>
                        </div>
                        <!-- end table-responsive -->
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- End Container Fluid -->
    <script src="{{ asset('admin/assets/js/jquery.js') }}"></script>
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
