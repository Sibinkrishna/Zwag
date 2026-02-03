@extends('admin.layouts.app')
@section('content')
<!-- Start Container Fluid -->
<div class="container-xxl">

    <div class="row">
        <div class="col-xl-3 col-lg-4">
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
        </div>

        <div class="col-xl-9 col-lg-8 ">
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
                        <div class="row section-top-brdr add-section ">
                            <div class="row" id="attribute_details">
                                @foreach ($attributes as $attribute)
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">{{ ucfirst($attribute->key) }}</label>
                                    <select class="form-control" data-choices name="product_associate[0][]">
                                        <option value="">Choose {{ $attribute->key }}</option>
                                        @foreach (json_decode($attribute->value) as $value)
                                        <option value="{{ $value }}">
                                            {{ $value }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                @endforeach
                            </div>
                            <div class="col-lg-3 mb-3">
                                <label for="tag_number_0" class="form-label">Tag Number</label>
                                <input type="number" id="tag_number_0" name="tag_number[]" class="form-control"
                                    placeholder="#******" value="{{ old('variants.0.tag_number') }}">
                            </div>

                            <div class="col-lg-3 mb-3">
                                <label for="product-stock" class="form-label">Tag</label>
                                <select class="form-control" data-choices data-choices-removeItem multiple
                                    name="tag[0][]">
                                    <option value="Fashion" {{ old('variants.0.tag') == 'Fashion' ? 'selected' : '' }}>
                                        Fashion</option>
                                    <option value="Electronics"
                                        {{ old('variants.0.tag') == 'Electronics' ? 'selected' : '' }}>Electronics
                                    </option>
                                    <option value="Watches" {{ old('variants.0.tag') == 'Watches' ? 'selected' : '' }}>
                                        Watches</option>
                                    <option value="Headphones"
                                        {{ old('variants.0.tag') == 'Headphones' ? 'selected' : '' }}>Headphones
                                    </option>
                                </select>
                            </div>
                            <div class="col-lg-3 mb-3">
                                <label class="form-label">Price</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class='bx bx-dollar'></i></span>
                                    <input type="number" id="price_0" class="form-control" name="price[]"
                                        placeholder="000" value="{{ old('variants.0.price') }}">
                                </div>
                            </div>
                            <div class="col-lg-3 mb-3">
                                <label class="form-label">Quantity</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class='bx bx-package'></i></span>
                                    <input type="number" class="form-control" name="stock[]"
                                        value="{{ old('variants.0.stock') }}" placeholder="000">
                                </div>
                            </div>
                            <div class="col-lg-3 mb-3">
                                <label class="form-label">Total Price</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class='bx bx-dollar'></i></span>
                                    <input type="number" id="total_price_0" class="form-control" name="total_price[]"
                                        placeholder="000" value="{{ old('variants.0.total_price') }}">
                                </div>
                            </div>
                            <div class="col-lg-3 mb-3">
                                <label class="form-label">Discount</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class='bx bxs-discount'></i></span>
                                    <input type="number" class="form-control" value="{{ old('variants.0.discount') }}"
                                        name="discount[]" placeholder="000">
                                </div>
                            </div>
                            <div class="col-lg-3 mb-3">
                                <label class="form-label">Selling Price</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class='bx bx-purchase-tag'></i></span>
                                    <input type="number" class="form-control" id="selling_price_0"
                                        name="selling_price[]" value="{{ old('variants.0.selling_price') }}"
                                        placeholder="000">
                                </div>
                            </div>

                            <div class="col-lg-12 mb-3 d-flex align-items-end">
                                <button type="button" class="btn btn-danger remove-section w-auto mrglft-auto"
                                    style="display: none;">Remove</button>
                            </div>
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






                </div>
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
                                placeholder="Enter Title">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="meta-tag" class="form-label">Meta Tag Keyword</label>
                            <input type="text" id="meta-tag" class="form-control" placeholder="Enter word"
                                name="meta_keyword">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mb-0">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control bg-light-subtle" id="description" rows="4"
                                placeholder="Type description" name="meta_description"></textarea>
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
                    <a href="#!" class="btn  yellow-btn w-100">Save</a>
                </div>
            </div>
        </div>
    </div>
</div>

</div>


<!-- End Container Fluid -->
    <script src="{{ asset('admin/assets/js/jquery.js') }}"></script>

    <script>
        // document.addEventListener('DOMContentLoaded', function() {

        //     const addButton = document.getElementById('add-varient');
        //     const container = document.getElementById('variant-container');

        //     // Store choices instances
        //     let choicesInstances = [];

        //     function initChoices(section) {
        //         section.querySelectorAll('select[data-choices]').forEach(select => {
        //             const instance = new Choices(select, {
        //                 removeItemButton: true,
        //                 shouldSort: false
        //             });
        //             choicesInstances.push(instance);
        //         });
        //     }

        //     // Initialize choices for first section
        //     initChoices(container);

        //     addButton.addEventListener('click', function() {

        //         const originalSection = container.querySelector('.add-section');

        //         // Destroy existing choices to avoid cloning UI
        //         choicesInstances.forEach(instance => instance.destroy());
        //         choicesInstances = [];

        //         const newSection = originalSection.cloneNode(true);
        //         newSection.classList.add('section-bottom-brdr');

        //         // Reset inputs
        //         newSection.querySelectorAll('input').forEach(input => input.value = '');

        //         // Reset selects
        //         newSection.querySelectorAll('select').forEach(select => {
        //             select.selectedIndex = 0;
        //         });


        //         // Remove button
        //         const removeBtn = newSection.querySelector('.remove-section');
        //         removeBtn.style.display = 'block';
        //         removeBtn.onclick = () => newSection.remove();

        //         container.appendChild(newSection);

        //         // Reinitialize choices for all sections
        //         container.querySelectorAll('.add-section').forEach(section => {
        //             initChoices(section);
        //         });
        //     });

        // });
        document.addEventListener('DOMContentLoaded', function() {

    const addButton = document.getElementById('add-varient');
    const container = document.getElementById('variant-container');

    // Store choices instances
    let choicesInstances = [];

    function initChoices(section) {
        section.querySelectorAll('select[data-choices]').forEach(select => {
            const instance = new Choices(select, {
                removeItemButton: true,
                shouldSort: false
            });
            choicesInstances.push(instance);
        });
    }

    // Initialize choices for first section
    initChoices(container);

    addButton.addEventListener('click', function() {

        const originalSection = container.querySelector('.add-section');

        // Destroy existing choices to avoid cloning UI
        choicesInstances.forEach(instance => instance.destroy());
        choicesInstances = [];

        const newSection = originalSection.cloneNode(true);

        // 🔥 CALCULATE INDEX
        const index = container.querySelectorAll('.add-section').length;

        newSection.classList.add('section-bottom-brdr');

        // Reset inputs
        newSection.querySelectorAll('input').forEach(input => {
            input.value = '';
        });

        // Reset selects
        newSection.querySelectorAll('select').forEach(select => {
            select.selectedIndex = 0;
        });

        // 🔥 UPDATE TAG INDEX
        newSection.querySelectorAll('select[name^="tag"]').forEach(select => {
            select.name = `tag[${index}][]`;
        });

        // 🔥 UPDATE PRODUCT ASSOCIATE INDEX
        newSection.querySelectorAll('select[name^="product_associate"]').forEach(select => {
            select.name = `product_associate[${index}][]`;
        });

        // Show remove button
        const removeBtn = newSection.querySelector('.remove-section');
        removeBtn.style.display = 'block';
        removeBtn.onclick = () => newSection.remove();

        container.appendChild(newSection);

        // Reinitialize choices for all sections
        container.querySelectorAll('.add-section').forEach(section => {
            initChoices(section);
        });
    });
    });

        function getSubcategory(categoryId) {


            // Target ONLY subcategory dropdown
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
