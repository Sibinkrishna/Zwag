@extends('admin.layouts.app')
@section('content')
<!-- Start Container Fluid -->
<div class="container-xxl">
    <form action="{{ route('product.update',$product->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    <div class="row">
        {{-- <div class="col-xl-3 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <img src="assets/images/product/p-1.png" alt="" class="img-fluid rounded bg-light">
                    <div class="mt-3">
                        <h4>{{$product->product_name}}<span
                                class="fs-14 text-muted ms-1">({{$product->product_varient->first()->tag}})</span></h4>
                        <h5 class="text-dark fw-medium mt-3">Price :</h5>
                        <h4 class="fw-semibold text-dark mt-2 d-flex align-items-center gap-2">
                            @if($product->product_varient->first()->price !=
                            $product->product_varient->first()->selling_price)
                            <span class="text-muted text-decoration-line-through">
                                {{ ProductConstants::RUPEES_SYMBOL['INDIAN'] }}
                                {{$product->product_varient->first()->price}}
                            </span>
                            @endif
                            {{ ProductConstants::RUPEES_SYMBOL['INDIAN'] }}
                            {{$product->product_varient->first()->selling_price}}
                            <!-- <small class="text-muted"> (30% Off)</small> -->
                        </h4>
                        <div class="mt-3">
                            <h5 class="text-dark fw-medium">Size :</h5>
                            <div class="d-flex flex-wrap gap-2" role="group"
                                aria-label="Basic checkbox toggle button group">
                                @php
                                $values = $product->product_varient
                                ->pluck('product_associate') // get JSON/array column
                                ->map(function($item){
                                return is_string($item)
                                ? json_decode($item, true)[0] ?? null
                                : $item[0] ?? null;
                                })
                                ->filter() // remove nulls
                                ->unique(); // avoid duplicates
                                @endphp

                                @foreach($values as $val)
                                <label
                                    class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center">
                                    {{ $val }}
                                </label>
                                @endforeach
                            </div>
                        </div>
                        <div class="mt-3">
                            <h5 class="text-dark fw-medium">Colors :</h5>
                            <div class="d-flex flex-wrap gap-2" role="group"
                                aria-label="Basic checkbox toggle button group">
                                @php
                                $values = $product->product_varient
                                ->pluck('product_associate') // get JSON/array column
                                ->map(function($item){
                                return is_string($item)
                                ? json_decode($item, true)[1] ?? null
                                : $item[1] ?? null;
                                })
                                ->filter() // remove nulls
                                ->unique(); // avoid duplicates
                                @endphp

                                @foreach($values as $val)
                                <label
                                    class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center">
                                    {{ $val }}
                                </label>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="col-xl-12 col-lg-8 ">
            @if($product->product_images->count() > 0)
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Product Photos</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                    @foreach($product->product_images as $image)
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                            <div class="product-img position-relative mb-3"
                                style="width:200px;height:100px;">
                                <img src="{{ asset('storage/'.$image->image_url) }}"
                                    class="img-fluid rounded bg-light"
                                    style="width:200px;height:100px;object-fit:cover;">
                                <div class="product-action-btns position-absolute top-0 end-0 m-2">
                                    <form action="{{ route('product.image.delete',$image->id) }}"
                                        method="POST">
                                        @csrf
                                        <button type="submit"
                                            class="btn btn-icon btn-sm btn-danger"
                                            onclick="return confirm('Delete this image?')">
                                            <i class="bx bx-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Product Photo</h4>
                </div>
                <div class="card-body">
                    <div class="dropzone bg-light-subtle py-5">
                        <div class="fallback">
                            <input name="file" type="file" multiple="multiple">
                        </div>
                        <div class="dz-message needsclick">
                            <i class="bx bx-cloud-upload fs-48 text-primary"></i>
                            <h3 class="mt-4">Drop your images here, or <span class="text-primary">click to browse</span>
                            </h3>
                            <span class="text-muted fs-13">
                                1600 x 1200 (4:3) recommended. PNG, JPG and GIF files are allowed
                            </span>
                        </div>
                    </div>

                    <ul class="list-unstyled mb-0" id="dropzone-preview">
                        <li class="mt-2" id="dropzone-preview-list">
                            <!-- This is used as the file preview template -->
                            <div class="border rounded">
                                <div class="d-flex p-2">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar-sm bg-light rounded">
                                            <img data-dz-thumbnail class="img-fluid rounded d-block" src="#"
                                                alt="Dropzone-Image" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="pt-1">
                                            <h5 class="fs-14 mb-1" data-dz-name>&</h5>
                                            <p class="fs-13 text-muted mb-0" data-dz-size></p>
                                            <strong class="error text-primary" data-dz-errormessage></strong>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 ms-3">
                                        <button data-dz-remove class="btn btn-sm btn-primary">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- end dropzon-preview -->
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Product Information</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="product-name" class="form-label">Product Name</label>
                                <input type="text" id="product-name" name="product_name" class="form-control"
                                    placeholder="Items Name" value="{{ $product->product_name }}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <label for="product-categories" class="form-label">Product Categories</label>
                            <select class="form-control" id="product-categories" data-choices data-choices-groups
                                data-placeholder="Select Categories" name="category_id"
                                onchange="getSubcategory(this.value)">
                                <option value="">Choose a categories</option>

                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label for="product-categories" class="form-label">Product SubCategories</label>
                            <select class="form-control" id="product_subcategories" data-choices data-choices-groups
                                data-placeholder="Select Categories" name="subcategory_id">
                                <option value="">Choose a SubCategories</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="product-brand" class="form-label">Brand</label>
                                <select class="form-control" id="brand" data-choices data-choices-groups
                                    data-placeholder="Select brand" name="brand_id">
                                    @forelse($brands as $brand)
                                    <option value="{{ $brand->id}}" {{ old('brand_id', $product->brand_id) == $brand->id ? 'selected' : '' }}>{{$brand->name}}</option>
                                    @empty
                                    <option value="" disabled>No Brand Found</option>
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="product-weight" class="form-label">Weight</label>
                                <input type="text" id="product-weight" class="form-control" placeholder="In gm & kg"
                                    name="weight" value="{{ $product->weight }}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <label for="gender" class="form-label">Gender</label>
                            <!-- <input type="text" id="gender" class="form-control" value="Men" readonly
                                            placeholder="Men" name="gender"> -->
                            <select class="form-control" id="gender" data-choices data-choices-groups
                                data-placeholder="Select Gender" name="gender">
                                @foreach(ProductConstants::GENDER as $key => $label)
                                <option value="{{ $key }}" {{ old('gender', $product->gender) == $product->gender ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control bg-light-subtle" id="description" rows="7"
                                    placeholder="Short description about the product" name="description">{{ $product->description }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Product Variants</h4>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="discount-type" class="form-label">Discount Type</label>
                                <select class="form-control" id="product_discount_type" data-choices data-choices-groups
                                    data-placeholder="Select discount type" name="discount_type">
                                    <option value="">Choose a discount type</option>
                                    <option value="percentage" {{ old('discount_type', $product->discount_type) == $product->discount_type ? 'selected' : '' }}>Percentage(%)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="product-name" class="form-label">Product Discount</label>
                                <input type="text" id="product_discount" class="form-control" placeholder="0.00"
                                    name="product_discount" value="{{ $product->product_discount }}">
                            </div>
                        </div>
                    </div>
                    <div id="variant-container">

                        @foreach($product->product_varient as $i=>$variant)
                        <div class="variant-row row add-section section-top-brdr">

                            <!-- ATTRIBUTES -->
                            <div class="row">
                                @foreach($attributes as $attribute)
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">{{ ucfirst($attribute->key) }}</label>

                                    <select name="product_associate[{{ $i }}][]"
                                            class="form-control attribute-select" data-choices>

                                        @foreach(json_decode($attribute->value) as $val)
                                        <option value="{{ $val }}"
                                            {{ in_array($val, json_decode($variant->product_associate)) ? 'selected' : '' }}>
                                            {{ $val }}
                                        </option>
                                        @endforeach

                                    </select>
                                </div>
                                @endforeach
                            </div>

                            <!-- TAG NUMBER -->
                            <div class="col-lg-3 mb-3">
                                <label class="form-label">Tag Number</label>
                                <input type="number" name="tag_number[]" class="form-control"
                                    value="{{ $variant->tag_number }}">
                            </div>

                            <!-- TAGS -->
                            <div class="col-lg-3 mb-3">
                                <label class="form-label">Tag</label>
                                <select multiple name="tag[{{ $i }}][]" class="form-control tag-select" data-choices>
                                    @foreach(['Fashion','Electronics','Watches','Headphones'] as $t)
                                    <option value="{{ $t }}"
                                        {{ in_array($t,explode(',',$variant->tag))?'selected':'' }}>
                                        {{ $t }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- PRICE -->
                            <div class="col-lg-3 mb-3">
                                <label class="form-label">Price</label>
                                <input type="number" class="form-control" name="price[]"
                                    value="{{ $variant->price }}">
                            </div>

                            <!-- QTY -->
                            <div class="col-lg-3 mb-3">
                                <label class="form-label">Quantity</label>
                                <input type="number" class="form-control" name="stock[]"
                                    value="{{ $variant->stock }}">
                            </div>

                            <!-- TOTAL -->
                            <div class="col-lg-3 mb-3">
                                <label class="form-label">Total Price</label>
                                <input type="number" class="form-control" name="total_price[]"
                                    value="{{ $variant->total_price }}">
                            </div>

                            <!-- DISCOUNT -->
                            <div class="col-lg-3 mb-3">
                                <label class="form-label">Discount</label>
                                <input type="number" class="form-control" name="discount[]"
                                    value="{{ $variant->discount }}">
                            </div>

                            <!-- SELLING -->
                            <div class="col-lg-3 mb-3">
                                <label class="form-label">Selling Price</label>
                                <input type="number" class="form-control" name="selling_price[]"
                                    value="{{ $variant->selling_price }}">
                            </div>

                            <!-- REMOVE -->
                            <div class="col-lg-12 mb-3 d-flex justify-content-end">
                                <button type="button" class="btn btn-danger remove-section"
                                    {{ $i==0 ? 'style=display:none' : '' }}>
                                    Remove
                                </button>
                            </div>

                        </div>
                        @endforeach
                        <div class="row ">
                            <div class="col-12 footer-btn-row">
                                <button type="button" value="Add More" id="add-varient" class="btn  yellow-btn add-btn"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#fff" width="15px"
                                        height="15px" fill-rule="evenodd">
                                        <path fill-rule="evenodd"
                                            d="M 11 2 L 11 11 L 2 11 L 2 13 L 11 13 L 11 22 L 13 22 L 13 13 L 22 13 L 22 11 L 13 11 L 13 2 Z">
                                        </path>
                                    </svg> Add Another Varient</button>

                            </div>
                        </div>
                    </div>



                        {{-- <div id="variant-container">
                            <div class="row add-section section-top-brdr">
                                <div class="row" id="attribute_details">
                                    @foreach($product->product_varient as $i=>$variant)
                                        <div class="row add-section">
                                        @foreach($attributes as $attribute)
                                        <div class="col-lg-6 mb-3">
                                        <label class="form-label">{{ ucfirst($attribute->key) }}</label>
                                        <select name="product_associate[{{ $i }}][]"
                                                class="form-control" data-choices>

                                        @foreach(json_decode($attribute->value) as $val)
                                        <option value="{{ $val }}"
                                            {{ (is_array(json_decode($variant->product_associate)) && in_array($val, json_decode($variant->product_associate))) ? 'selected' : '' }}>
                                            {{ $val }}
                                        </option>
                                        @endforeach

                                        </select>
                                        </div>
                                        @endforeach
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <label for="tag_number_0" class="form-label">Tag Number</label>
                                    <input type="number" id="tag_number_0" name="tag_number[]" class="form-control"
                                        placeholder="#******" value="{{ $variant->tag_number }}">
                                </div>

                                <div class="col-lg-3 mb-3">
                                    <label for="product-tag" class="form-label">Tag</label>
                                <select multiple name="tag[{{ $i }}][]" class="form-control" data-choices data-choices-removeItem>
                                    @foreach(['Fashion','Electronics','Watches','Headphones'] as $t)
                                    <option value="{{ $t }}"
                                        {{ in_array($t,explode(',',$variant->tag))?'selected':'' }}>
                                    {{ $t }}
                                    </option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <label class="form-label">Price</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class='bx bx-dollar'></i></span>
                                        <input type="number" id="price_0" class="form-control" name="price[]"
                                            placeholder="000" value="{{ $variant->price }}">
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <label class="form-label">Quantity</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class='bx bx-package'></i></span>
                                        <input type="number" class="form-control" name="stock[]"
                                            value="{{ $variant->stock }}" placeholder="000">
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <label class="form-label">Total Price</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class='bx bx-dollar'></i></span>
                                        <input type="number" id="total_price_0" class="form-control" name="total_price[]"
                                            placeholder="000" value="{{ $variant->total_price }}">
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <label class="form-label">Discount</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class='bx bxs-discount'></i></span>
                                        <input type="number" class="form-control" value="{{ $variant->discount }}"
                                            name="discount[]" placeholder="000">
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <label class="form-label">Selling Price</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class='bx bx-purchase-tag'></i></span>
                                        <input type="number" class="form-control" id="selling_price_0"
                                            name="selling_price[]" value="{{ $variant->selling_price }}"
                                            placeholder="000">
                                    </div>
                                </div>

                                <div class="col-lg-12 mb-3 d-flex align-items-end">
                                    <button type="button" class="btn btn-danger remove-section w-auto mrglft-auto"
                                        style="display: none;">Remove</button>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-12 footer-btn-row">
                                <button type="button" value="Add More" id="add-varient" class="btn  yellow-btn add-btn"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#fff" width="15px"
                                        height="15px" fill-rule="evenodd">
                                        <path fill-rule="evenodd"
                                            d="M 11 2 L 11 11 L 2 11 L 2 13 L 11 13 L 11 22 L 13 22 L 13 13 L 22 13 L 22 11 L 13 11 L 13 2 Z">
                                        </path>
                                    </svg> Add Another Varient</button>

                            </div>
                        </div>
                        </div> --}}
            </div>
            </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Meta Options</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="meta-title" class="form-label">Meta Title</label>
                            <input type="text" id="meta-title" class="form-control" name="meta_title"
                                placeholder="Enter Title" value="{{ $product->meta_title }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="meta-tag" class="form-label">Meta Tag Keyword</label>
                            <input type="text" id="meta-tag" class="form-control" placeholder="Enter word"
                                name="meta_keyword" value="{{ $product->meta_description }}">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mb-0">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control bg-light-subtle" id="description" rows="4"
                                placeholder="Type description" name="meta_description">{{ $product->meta_description }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-3 mb-3 rounded">
            <div class="row justify-content-end g-2">
                <div class="col-lg-2">
                    <a href="#!" class="btn blk-btn w-100">Reset</a>
                </div>
                <div class="col-lg-2">
                    <button type="submit" class="btn  yellow-btn w-100">Save</button>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>

</div>


<!-- End Container Fluid -->
    <script src="{{ asset('admin/assets/js/jquery.js') }}"></script>
   <script>

    function initChoices(container){
        container.querySelectorAll('[data-choices]').forEach(el => {

            // If already initialized, destroy first
            if (el.choicesInstance) {
                el.choicesInstance.destroy();
            }

            let instance = new Choices(el, {
                removeItemButton: true,
                shouldSort: false
            });

            // store reference
            el.choicesInstance = instance;
        });
    }

    /* INITIAL LOAD */
    document.addEventListener('DOMContentLoaded', function(){
        initChoices(document);
    });


    /* ADD VARIANT */
    document.getElementById('add-varient').addEventListener('click', function () {

        let container = document.getElementById('variant-container');
        let firstRow  = container.querySelector('.variant-row');

        let clone = firstRow.cloneNode(true);

        // Clear inputs
        clone.querySelectorAll('input').forEach(input => {
            input.value = '';
        });

        // Reset selects
        clone.querySelectorAll('select').forEach(select => {
            select.innerHTML = select.innerHTML; // force reset
        });

        // Show remove button
        clone.querySelector('.remove-section').style.display = 'inline-block';

        container.appendChild(clone);

        // Re-init choices for new row
        initChoices(clone);
    });


    /* REMOVE VARIANT */
    document.addEventListener('click', function(e){
        if(e.target.classList.contains('remove-section')){
            e.target.closest('.variant-row').remove();
        }
    });

    </script>

    <script>
        function getSubcategory(categoryId) {

            $('#product_subcategories').html('<option value="">Loading...</option>');

            if (categoryId) {
                subCategoryChoices.clearChoices();
                subCategoryChoices.setChoices([{
                    value: '',
                    label: 'Select Sub Category',
                    selected: true,
                    disabled: true
                }], 'value', 'label', false);
                if (categoryId) {

                    let url = '/get-category-details/' + categoryId;

                    $.get(url, function(data) {
                        console.log(data);

                        let choicesData = [];

                        data.sub_categories.forEach(function(item) {
                            choicesData.push({
                                value: item.id,
                                label: item.sub_category
                            });
                        });
                        subCategoryChoices.setChoices(choicesData, 'value', 'label', true);
                    });

                } else {
                    subCategoryChoices.setChoices([{
                        value: '',
                        label: 'Select Sub Category',
                        selected: true
                    }], 'value', 'label', true);
                }

            } else {
                $('#product_subcategories').html('<option value="">Select Sub Category</option>');
            }
        }
    </script>
    <script>
        let subCategoryChoices;

        document.addEventListener('DOMContentLoaded', function() {
            subCategoryChoices = new Choices('#product_subcategories', {
                shouldSort: false,
                placeholder: true,
                placeholderValue: 'Select Sub Category',
                allowHTML: false
            });
        });

        function clearAttributeDetails() {
            const container = document.getElementById("attribute_details");

            // Destroy Choices instances inside attribute_details
            container.querySelectorAll('select[data-choices]').forEach(select => {
                if (select.choicesInstance) {
                    select.choicesInstance.destroy();
                }
            });

            // Remove HTML
            container.innerHTML = "";
        }
    </script>
@endsection
