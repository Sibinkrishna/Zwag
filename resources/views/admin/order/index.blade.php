@extends('admin.layouts.app')

@section('content')
 <!-- Start Container Fluid -->
                    <div class="container-xxl">

                         <div class="row">
                              <div class="col-md-6 col-xl-3">
                                   <div class="card">
                                        <div class="card-body total-card">
                                             <div class="d-flex align-items-center justify-content-between">
                                                  <div>
                                                       <h4 class="card-title mb-2">In Progress</h4>
                                                       <p class="text-muted fw-medium fs-22 mb-0">656</p>
                                                  </div>
                                                  <div>
                                                       <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                                            <iconify-icon icon="solar:inbox-line-broken" class="fs-32 text-primary avatar-title svg-icon"></iconify-icon>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-6 col-xl-3">
                                   <div class="card">
                                        <div class="card-body total-card">
                                             <div class="d-flex align-items-center justify-content-between">
                                                  <div>
                                                       <h4 class="card-title mb-2">Order Shipped</h4>
                                                       <p class="text-muted fw-medium fs-22 mb-0">630</p>
                                                  </div>
                                                  <div>
                                                       <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                                            <iconify-icon icon="solar:box-broken" class="fs-32 text-primary avatar-title svg-icon"></iconify-icon>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-6 col-xl-3">
                                   <div class="card">
                                        <div class="card-body total-card">
                                             <div class="d-flex align-items-center justify-content-between">
                                                  <div>
                                                       <h4 class="card-title mb-2">Order Delivering</h4>
                                                       <p class="text-muted fw-medium fs-22 mb-0">170</p>
                                                  </div>
                                                  <div>
                                                       <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                                            <iconify-icon icon="solar:tram-broken" class="fs-32 text-primary avatar-title svg-icon"></iconify-icon>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-6 col-xl-3">
                                   <div class="card">
                                        <div class="card-body total-card">
                                             <div class="d-flex align-items-center justify-content-between">
                                                  <div>
                                                       <h4 class="card-title mb-2">Delivered</h4>
                                                       <p class="text-muted fw-medium fs-22 mb-0">200</p>
                                                  </div>
                                                  <div>
                                                       <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                                            <iconify-icon icon="solar:clipboard-check-broken" class="fs-32 text-primary avatar-title svg-icon"></iconify-icon>
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
                                        <div class="card-header">
                                             <h4 class="card-title">Filter</h4>
                                        </div>
                                        <div class="card-body">
                                             <div class="row">
                                                  <div class="col-lg-3">
                                                       <div class="mb-3">
                                                            <input type="text" id="order-id" class="form-control" placeholder="Order ID">
                                                       </div>
                                                  </div>
                                                  <div class="col-lg-3">
                                                       <div class="mb-3">
                                                            <input type="text" id="invoice-id" class="form-control" placeholder="Invoice ID">
                                                       </div>
                                                  </div>
                                                  <div class="col-lg-3">
                                                       <div class="mb-3">
                                                            <input type="text" id="customer-name" class="form-control" placeholder="Payment Method">
                                                       </div>
                                                  </div>
                                                  <div class="col-lg-3">
                                                       <div class="mb-3">
                                                            <input type="text" id="user-name" class="form-control" placeholder="Username">
                                                       </div>
                                                  </div>
                                                  <div class="col-lg-3">
                                                       <div class="mb-3">
                                                            <input type="number" id="user-mobile" class="form-control" placeholder="Mobile">
                                                       </div>
                                                  </div>
                                                  <div class="col-lg-3">
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
                                                  <h4 class="card-title">All Order List</h4>
                                             </div>
                                             <button type="button" class="btn btn-outline-success">
                                                  <i class="bx bx-download me-1"></i>Export to Excel
                                             </button>
                                        </div>
                                        <div class="card-body p-0">
                                             <div class="table-responsive">
                                                  <table class="table align-middle mb-0 table-hover table-centered">
                                                       <thead class="bg-light-subtle">
                                                            <tr>
                                                                 <th>Order ID</th>
                                                                 <th>Invoice No</th>
                                                                 <th>Total</th>
                                                                 <th>Username</th>
                                                                 <th>Items</th>
                                                                 <th>Payment Method</th>
                                                                 <th>Order Status</th>
                                                                 <th>Order Date</th>
                                                                 <th>Last Update</th>
                                                                 <th>Action</th>
                                                            </tr>
                                                       </thead>
                                                       <tbody>
                                                            <tr>
                                                                 <td>1001</td>
                                                                 <td>AA1234</td>
                                                                 <td class="link-primary fw-medium"> $1,230.00</td>
                                                                 <td>michael@gmail.com</td>
                                                                 <td> 4</td>
                                                                 <td> PhonePe</td>
                                                                 <td><i class="bx bxs-circle text-yellow me-1"></i>Order Initiated</td>
                                                                 <td>Nov 11, 2025, 4:12:17 PM </td>
                                                                 <td>Nov 15, 2025, 8:10:15 AM </td>
                                                                 <td>
                                                                      <div class="d-flex gap-2">
                                                                           <a href="{{route('order-list.show',1)}}" class="btn btn-light btn-sm btn-soft-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="View"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                           <a href="#!" class="btn btn-soft-danger btn-sm btn-soft-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Delete"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                      </div>
                                                                 </td>
                                                            </tr>

                                                            <tr>
                                                                 <td>1002</td>
                                                                 <td>AA2587</td>
                                                                 <td class="link-primary fw-medium"> $568.00</td>
                                                                 <td>TheresaBrose@gmail.com</td>
                                                                 <td> 1</td>
                                                                 <td> Online</td>
                                                                 <td><i class="bx bxs-circle text-primary me-1"></i>Order Placed</td>
                                                                 <td>Nov 25, 2025, 11:12:17 AM </td>
                                                                 <td>Nov 26, 2025, 7:22:48 AM </td>
                                                                 <td>
                                                                      <div class="d-flex gap-2">
                                                                           <a href="order-detail.php" class="btn btn-light btn-sm btn-soft-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="View"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                           <a href="#!" class="btn btn-soft-danger btn-sm btn-soft-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Delete"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                      </div>
                                                                 </td>
                                                            </tr>

                                                            <tr>
                                                                 <td>1003</td>
                                                                 <td>AA4578</td>
                                                                 <td class="link-primary fw-medium"> $251.00</td>
                                                                 <td>9998887776</td>
                                                                 <td> 3</td>
                                                                 <td> Online</td>
                                                                 <td><i class="bx bxs-circle text-success me-1"></i>Order Delivered</td>
                                                                 <td>Nov 2, 2025, 6:05:45 AM </td>
                                                                 <td>Nov 5, 2025, 12:36:05 PM </td>
                                                                 <td>
                                                                      <div class="d-flex gap-2">
                                                                           <a href="order-detail.php" class="btn btn-light btn-sm btn-soft-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="View"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                           <a href="#!" class="btn btn-soft-danger btn-sm btn-soft-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Delete"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                      </div>
                                                                 </td>
                                                            </tr>

                                                            <tr>
                                                                 <td>1004</td>
                                                                 <td>AA1789</td>
                                                                 <td class="link-primary fw-medium"> $18.00</td>
                                                                 <td>Gordon@gmail.com</td>
                                                                 <td> 1</td>
                                                                 <td> <span class="badge bg-light text-dark  px-2 py-1 fs-13">Not Paid</span></td>
                                                                 <td><i class="bx bxs-circle text-danger me-1"></i>Payment Failed</td>
                                                                 <td>Nov 9, 2025, 10:05:45 AM </td>
                                                                 <td>Nov 9, 2025, 12:36:05 PM </td>
                                                                 <td>
                                                                      <div class="d-flex gap-2">
                                                                           <a href="order-detail.php" class="btn btn-light btn-sm btn-soft-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="View"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
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
