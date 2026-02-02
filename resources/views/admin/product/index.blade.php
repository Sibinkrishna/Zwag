@extends('admin.layouts.app')

@section('content')
 <!-- Start Container Fluid -->
<div class="container-fluid">

    <div class="row">
            <div class="col-xl-12">
                <div class="card bg-light-subtle">
                    <div class="card-header border-0">
                        <div class="row justify-content-between align-items-center">
                                <div class="col-lg-6">
                                    <div class="mt-3 mt-md-0">
                                        <a href="{{route('product.create')}}" class="btn btn-success me-1 blk-btn"><i class="bx bx-plus"></i> Add Product</a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="search-bar me-3 mb-1 ml-sm-0">
                                        <span><i class="bx bx-search-alt"></i></span>
                                        <input type="search" class="form-control" id="search" placeholder="Search ...">
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center gap-1">
                        <h4 class="card-title flex-grow-1">All Product List</h4>
                    </div>
                    <div>
                        <div class="table-responsive">
                                <table class="table align-middle mb-0 table-hover table-centered">
                                    <thead class="bg-light-subtle">
                                        <tr>
                                            <th>Sl.No</th>
                                            <th>Product Name & Size</th>
                                            <th>Price</th>
                                            <th>Stock</th>
                                            <th>Category</th>
                                            <th>Sub Category</th>
                                            <th>Status</th>
                                            <th>Created On</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($products as $product)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        @if($product->product_images->count())
                                                        <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                            <img src="{{ asset('storage/'.$product->product_images->first()->image_url) }}" alt="" class="avatar-md">
                                                        </div>
                                                        @else
                                                        <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                            <img src="{{asset('admin/assets/images/product/p-1.png')}}" alt="" class="avatar-md">
                                                        </div>
                                                        @endif
                                                        <div>
                                                            <a href="#!" class="text-dark fw-medium fs-15">{{ $product->product_name }}</a>
                                                            <p class="text-muted mb-0 mt-1 fs-13"><span>Size : </span>
                                                               
                                                            </p>
                                                        </div>
                                                    </div>
                                            </td>
                                            <td>{{ ProductConstants::RUPEES_SYMBOL['INDIAN'] }} {{ number_format($product->product_varient->first()->price, 2) }}</td>
                                            <td>
                                                    <p class="mb-1 text-muted"><span class="text-dark fw-medium">{{ $product->product_varient->first()->stock }}</span></p>
                                                    <!-- <p class="mb-0 text-muted">{{ $product->sold }} Sold</p> -->
                                            </td>
                                            <td>{{ $product->category->first()->category_name }}</td>
                                            <td>{{ $product->subcategory->first()->sub_category }}</td>
                                            <td>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked{{ $product->id }}" {{ $product->status ? 'checked' : '' }} disabled>
                                                    </div>
                                            </td>
                                            <td>{{ $product->created_at->format('d F Y') }}</td>
                                            <td>
                                                    <div class="d-flex gap-2">
                                                        <a href="{{ route('product.edit',$product->id)}}" class="btn btn-soft-primary btn-sm btn-soft-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Edit"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                        <a href="#!" class="btn btn-soft-danger btn-sm btn-soft-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Delete"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                    </div>
                                            </td>
                                        </tr>
                                        @empty
                                        @endforelse
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                            <img src="{{asset('admin/assets/images/product/p-1.png')}}" alt="" class="avatar-md">
                                                        </div>
                                                        <div>
                                                            <a href="#!" class="text-dark fw-medium fs-15">Black T-shirt</a>
                                                            <p class="text-muted mb-0 mt-1 fs-13"><span>Size : </span>S , M , L , Xl </p>
                                                        </div>
                                                    </div>

                                            </td>
                                            <td>$80.00</td>
                                            <td>
                                                    <p class="mb-1 text-muted"><span class="text-dark fw-medium">486 Item</span> Left</p>
                                                    <p class="mb-0 text-muted">155 Sold</p>
                                            </td>
                                            <td> Men</td>
                                            <td> T-Shirt</td>
                                            <td>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked1" checked>
                                                    </div>
                                            </td>
                                            <td>12 March 2024</td>
                                            <td>
                                                    <div class="d-flex gap-2">
                                                        <a href="#!" class="btn btn-soft-primary btn-sm btn-soft-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Edit"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                        <a href="#!" class="btn btn-soft-danger btn-sm btn-soft-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Delete"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                    </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                            <img src="{{asset('admin/assets/images/product/p-5.png')}}" alt="" class="avatar-md">
                                                        </div>
                                                        <div>
                                                            <a href="#!" class="text-dark fw-medium fs-15">Dark Green Cargo Pent</a>
                                                            <p class="text-muted mb-0 mt-1 fs-13"><span>Size : </span>S , M , L , Xl </p>
                                                        </div>
                                                    </div>

                                            </td>
                                            <td>$110.00</td>
                                            <td>
                                                    <p class="mb-1 text-muted"><span class="text-dark fw-medium">241 Item</span> Left</p>
                                                    <p class="mb-0 text-muted">342 Sold</p>
                                            </td>
                                            <td> Men</td>
                                            <td> Jeans</td>
                                            <td>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked1" checked>
                                                    </div>
                                            </td>
                                            <td>10 Sep 2023</td>
                                            <td>
                                                    <div class="d-flex gap-2">
                                                        <a href="#!" class="btn btn-soft-primary btn-sm btn-soft-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Edit"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                        <a href="#!" class="btn btn-soft-danger btn-sm btn-soft-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Delete"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                    </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                        </div>
                        <!-- end table-responsive -->
                    </div>
                    <div class="card-footer border-top">
                        <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end mb-0">
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                                </ul>
                        </nav>
                    </div>
                </div>
            </div>

    </div>

</div>
<!-- End Container Fluid -->
@endsection
