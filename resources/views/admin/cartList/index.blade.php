@extends('admin.layouts.app')

@section('content')
    <!-- Start Container Fluid -->
    <div class="container-xxl">

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="d-flex card-header justify-content-between align-items-center">
                        <div>
                            <h4 class="card-title">Cart Details</h4>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table align-middle mb-0 table-hover table-centered">
                                <thead class="bg-light-subtle">
                                    <tr>
                                        <th>Customer Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Cart Items</th>
                                        <th>Date</th>
                                        <th>Message</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="{{asset('admin/assets/images/users/avatar-2.jpg')}}"
                                                class="avatar-sm rounded-circle me-2" alt="..."> Michael A. Miner</td>
                                        <td>michael@gmail.com</td>
                                        <td> 9998887776</td>
                                        <td> 1</td>
                                        <td>Nov 15, 2025, 8:10:15 AM </td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <div class="d-flex gap-1 align-items-center">
                                                    <a href="#!" class="btn btn-soft-info btn-sm"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        data-bs-title="Send SMS"><iconify-icon icon="solar:chat-dots-broken"
                                                            class="align-middle fs-18"></iconify-icon></a>
                                                    <div class="form-check form-checkbox-dark"><input type="checkbox"
                                                            class="form-check-input" id="customCheck1" disabled></div>
                                                </div>
                                                <div class="d-flex gap-1 align-items-center">
                                                    <a href="#!" class="btn btn-soft-success btn-sm"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        data-bs-title="Send Via Whatsapp"><iconify-icon
                                                            icon="solar:chat-round-dots-broken"
                                                            class="align-middle fs-18"></iconify-icon></a>
                                                    <div class="form-check form-checkbox-dark"><input type="checkbox"
                                                            class="form-check-input" id="customCheck1" checked disabled>
                                                    </div>
                                                </div>
                                                <div class="d-flex gap-1 align-items-center">
                                                    <a href="#!" class="btn btn-soft-danger btn-sm"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        data-bs-title="Send Email"><iconify-icon icon="solar:letter-broken"
                                                            class="align-middle fs-18"></iconify-icon></a>
                                                    <div class="form-check form-checkbox-dark"><input type="checkbox"
                                                            class="form-check-input" id="customCheck1" disabled></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="#!" class="btn btn-light btn-sm btn-soft-icons"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    data-bs-title="View"><iconify-icon icon="solar:eye-broken"
                                                        class="align-middle fs-18"></iconify-icon></a>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><img src="{{asset('admin/assets/images/users/avatar-4.jpg')}}"
                                                class="avatar-sm rounded-circle me-2" alt="..."> James L. Erickson</td>
                                        <td>James@gmail.com</td>
                                        <td> 9999999999</td>
                                        <td> 3</td>
                                        <td>Oct 22, 2025, 6:22:33 PM </td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <div class="d-flex gap-1 align-items-center">
                                                    <a href="#!" class="btn btn-soft-info btn-sm"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        data-bs-title="Send SMS"><iconify-icon icon="solar:chat-dots-broken"
                                                            class="align-middle fs-18"></iconify-icon></a>
                                                    <div class="form-check form-checkbox-dark"><input type="checkbox"
                                                            class="form-check-input" id="customCheck1" disabled></div>
                                                </div>
                                                <div class="d-flex gap-1 align-items-center">
                                                    <a href="#!" class="btn btn-soft-success btn-sm"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        data-bs-title="Send Via Whatsapp"><iconify-icon
                                                            icon="solar:chat-round-dots-broken"
                                                            class="align-middle fs-18"></iconify-icon></a>
                                                    <div class="form-check form-checkbox-dark"><input type="checkbox"
                                                            class="form-check-input" id="customCheck1" checked disabled>
                                                    </div>
                                                </div>
                                                <div class="d-flex gap-1 align-items-center">
                                                    <a href="#!" class="btn btn-soft-danger btn-sm"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        data-bs-title="Send Email"><iconify-icon icon="solar:letter-broken"
                                                            class="align-middle fs-18"></iconify-icon></a>
                                                    <div class="form-check form-checkbox-dark"><input type="checkbox"
                                                            class="form-check-input" id="customCheck1" checked disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="#!" class="btn btn-light btn-sm btn-soft-icons"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    data-bs-title="View"><iconify-icon icon="solar:eye-broken"
                                                        class="align-middle fs-18"></iconify-icon></a>
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
