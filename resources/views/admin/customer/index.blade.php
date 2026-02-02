@extends('admin.layouts.app')

@section('content')
 <!-- Start Container Fluid -->
            <div class="container-xxl">

                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-2 mb-3">
                                    <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                        <iconify-icon icon="solar:users-group-two-rounded-bold-duotone" class="fs-32 text-primary avatar-title svg-icon"></iconify-icon>
                                    </div>
                                    <div>
                                        <h4 class="mb-0">All Customers</h4>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="text-muted fw-medium fs-22 mb-0">+22.63k</p>
                                    <div>
                                        <span class="badge text-success bg-success-subtle fs-12"><i class="bx bx-up-arrow-alt"></i>34.4%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-2 mb-3">
                                    <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                        <iconify-icon icon="solar:box-bold-duotone" class="fs-32 text-primary avatar-title svg-icon"></iconify-icon>
                                    </div>
                                    <div>
                                        <h4 class="mb-0">Orders</h4>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="text-muted fw-medium fs-22 mb-0">+4.5k</p>
                                    <div>
                                        <span class="badge text-danger bg-danger-subtle fs-12"><i class="bx bx-down-arrow-alt"></i>8.1%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-2 mb-3">
                                    <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                        <iconify-icon icon="solar:headphones-round-sound-bold-duotone" class="fs-32 text-primary avatar-title svg-icon"></iconify-icon>
                                    </div>
                                    <div>
                                        <h4 class="mb-0">Services Request</h4>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="text-muted fw-medium fs-22 mb-0">+1.03k</p>
                                    <div>
                                        <span class="badge text-success bg-success-subtle fs-12"><i class="bx bx-up-arrow-alt"></i>12.6%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-2 mb-3">
                                    <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                        <iconify-icon icon="solar:bill-list-bold-duotone" class="fs-32 text-primary avatar-title svg-icon"></iconify-icon>
                                    </div>
                                    <div>
                                        <h4 class="mb-0">Invoice & Payment</h4>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="text-muted fw-medium fs-22 mb-0">$38,908.00</p>
                                    <div>
                                        <span class="badge text-success bg-success-subtle fs-12"><i class="bx bx-up-arrow-alt"></i>45.9%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-xl-12">
                         <div class="card">
                              <div class="card-header">
                                   <h4 class="card-title">Filter</h4>
                              </div>
                              <div class="card-body">
                                   <div class="row">
                                        <div class="col-lg-3">
                                             <div class="mb-3">
                                                  <input type="text" id="user-id" class="form-control" placeholder="User ID">
                                             </div>
                                        </div>
                                        <div class="col-lg-3">
                                             <div class="mb-3">
                                                  <input type="text" id="user-name" class="form-control" placeholder="Username">
                                             </div>
                                        </div>
                                        <div class="col-lg-3">
                                             <div class="mb-3">
                                                  <input type="text" id="customer-name" class="form-control" placeholder="Customer Name">
                                             </div>
                                        </div>
                                        <div class="col-lg-3">
                                             <div class="mb-3">
                                                  <input type="email" id="user-email" class="form-control" placeholder="Email ID">
                                             </div>
                                        </div>
                                        <div class="col-lg-3">
                                             <div class="mb-3">
                                                  <input type="number" id="user-mobile" class="form-control" placeholder="Mobile">
                                             </div>
                                        </div>
                                        <div class="col-lg-4">
                                             <div class="mb-3 d-flex gap-1">
                                                  <button type="button" class="btn btn-outline-secondary yellow-btn">
                                                  <i class="bx bx-refresh me-1"></i>Refresh
                                                  </button>
                                                  <button type="button" class="btn btn-primary blk-btn">
                                                  <i class="bx bx-search me-1"></i>Search
                                                  </button>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                         <div class="card">
                              <div class="d-flex card-header justify-content-between align-items-center">
                                   <div>
                                        <h4 class="card-title">All Customers List</h4>
                                   </div>
                                   <button type="button" class="btn btn-outline-success">
                                        <i class="bx bx-download me-1"></i>Export to Excel
                                   </button>
                              </div>
                              <div>
                                   <div class="table-responsive">
                                        <table class="table align-middle mb-0 table-hover table-centered">
                                             <thead class="bg-light-subtle">
                                                  <tr>
                                                       <th>ID</th>
                                                       <th>Customer Name</th>
                                                       <th>Username</th>
                                                       <th>Created Date</th>
                                                       <th>Action</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                       <td>001</td>
                                                       <td><img src="{{asset('admin/assets/images/users/avatar-2.jpg')}}" class="avatar-sm rounded-circle me-2" alt="..."> Michael A. Miner</td>
                                                       <td>michael@gmail.com</td>
                                                       <td>Nov 25, 2025, 4:12:17 PM </td>
                                                       <td>
                                                            <div class="d-flex gap-2">
                                                                 <a href="{{route('customer-list.details')}}" class="btn btn-light btn-sm btn-soft-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Account Info"><iconify-icon icon="solar:shield-user-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                 <a href="#!" class="btn btn-soft-primary btn-sm btn-soft-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Edit"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                 <a href="#!" class="btn btn-soft-danger btn-sm btn-soft-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Delete"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                            </div>
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                       <td>002</td>
                                                       <td><img src="{{asset('admin/assets/images/users/avatar-3.jpg')}}" class="avatar-sm rounded-circle me-2" alt="..."> Theresa T. Brose</td>
                                                       <td>TheresaBrosegmail.com</td>
                                                       <td>Dec 12, 2025, 4:12:17 PM </td>
                                                       <td>
                                                            <div class="d-flex gap-2">
                                                                 <a href="customer-detail.php" class="btn btn-light btn-sm btn-soft-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Account Info"><iconify-icon icon="solar:shield-user-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                 <a href="#!" class="btn btn-soft-primary btn-sm btn-soft-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Edit"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                 <a href="#!" class="btn btn-soft-danger btn-sm btn-soft-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Delete"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                            </div>
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                       <td>003</td>
                                                       <td><img src="{{asset('admin/assets/images/users/avatar-4.jpg')}}" class="avatar-sm rounded-circle me-2" alt="...">  James L. Erickson</td>
                                                       <td> 9998887776</td>
                                                       <td>Sep 30, 2024, 2:07:55 AM </td>
                                                       <td>
                                                            <div class="d-flex gap-2">
                                                                 <a href="customer-detail.php" class="btn btn-light btn-sm btn-soft-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Account Info"><iconify-icon icon="solar:shield-user-broken" class="align-middle fs-18"></iconify-icon></a>
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
