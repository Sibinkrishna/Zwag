@extends('admin.layouts.app')

@section('content')
<!-- Start Container Fluid -->
               <div class="container-fluid">
                    <!-- Start here.... -->
                    <div class="row">
                         <div class="col-xxl-5 col-xl-6">
                              <div class="row">
                                   <div class="col-md-6">
                                        <div class="card overflow-hidden">
                                             <div class="card-body total-card">
                                                  <div class="row">
                                                       <div class="col-4">
                                                            <div class="avatar-md bg-primary rounded">
                                                                 <iconify-icon icon="solar:cart-5-bold-duotone" class="avatar-title fs-32 text-primary svg-icon"></iconify-icon>
                                                            </div>
                                                       </div> <!-- end col -->
                                                       <div class="col-8 text-end">
                                                            <p class="text-muted mb-0 text-truncate">Total Orders</p>
                                                            <h3 class="text-dark mt-1 mb-0">13, 647</h3>
                                                       </div> <!-- end col -->
                                                  </div> <!-- end row-->
                                             </div> <!-- end card body -->
                                             <div class="card-footer total-card-footer py-2 bg-light bg-opacity-50">
                                                  <div class="d-flex align-items-center justify-content-between">
                                                       <div class="last-quantity">
                                                            <span class="text-success"> <i class="bx bxs-up-arrow fs-12"></i> 2.3%</span>
                                                            <span class="text-muted ms-1 fs-12">Last Week</span>
                                                       </div>
                                                       <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                                                  </div>
                                             </div> <!-- end card body -->
                                        </div> <!-- end card -->
                                   </div> <!-- end col -->
                                   <div class="col-md-6">
                                        <div class="card overflow-hidden">
                                             <div class="card-body total-card">
                                                  <div class="row">
                                                       <div class="col-4">
                                                            <div class="avatar-md bg-primary rounded">
                                                                 <i class="bx bx-award avatar-title fs-24 text-primary svg-icon"></i>
                                                            </div>
                                                       </div> <!-- end col -->
                                                       <div class="col-8 text-end">
                                                            <p class="text-muted mb-0 text-truncate">Total Products</p>
                                                            <h3 class="text-dark mt-1 mb-0">9, 526</h3>
                                                       </div> <!-- end col -->
                                                  </div> <!-- end row-->
                                             </div> <!-- end card body -->
                                             <div class="card-footer total-card-footer py-2 bg-light bg-opacity-50">
                                                  <div class="d-flex align-items-center justify-content-between">
                                                       <div class="last-quantity">
                                                            <span class="text-success"> <i class="bx bxs-up-arrow fs-12"></i> 8.1%</span>
                                                            <span class="text-muted ms-1 fs-12">Last Month</span>
                                                       </div>
                                                       <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                                                  </div>
                                             </div> <!-- end card body -->
                                        </div> <!-- end card -->
                                   </div> <!-- end col -->
                                   <div class="col-md-6">
                                        <div class="card overflow-hidden">
                                             <div class="card-body total-card">
                                                  <div class="row">
                                                       <div class="col-4">
                                                            <div class="avatar-md bg-primary rounded">
                                                                 <i class="bx bxs-backpack avatar-title fs-24 text-primary svg-icon"></i>
                                                            </div>
                                                       </div> <!-- end col -->
                                                       <div class="col-8 text-end">
                                                            <p class="text-muted mb-0 text-truncate">Total Customers</p>
                                                            <h3 class="text-dark mt-1 mb-0">976</h3>
                                                       </div> <!-- end col -->
                                                  </div> <!-- end row-->
                                             </div> <!-- end card body -->
                                             <div class="card-footer total-card-footer py-2 bg-light bg-opacity-50">
                                                  <div class="d-flex align-items-center justify-content-between">
                                                       <div class="last-quantity">
                                                            <span class="text-danger"> <i class="bx bxs-down-arrow fs-12"></i> 0.3%</span>
                                                            <span class="text-muted ms-1 fs-12">Last Month</span>
                                                       </div>
                                                       <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                                                  </div>
                                             </div> <!-- end card body -->
                                        </div> <!-- end card -->
                                   </div> <!-- end col -->
                                   <div class="col-md-6">
                                        <div class="card overflow-hidden">
                                             <div class="card-body total-card">
                                                  <div class="row">
                                                       <div class="col-4">
                                                            <div class="avatar-md bg-primary rounded">
                                                                 <i class="bx bx-dollar-circle avatar-title text-primary fs-24 svg-icon"></i>
                                                            </div>
                                                       </div> <!-- end col -->
                                                       <div class="col-8 text-end">
                                                            <p class="text-muted mb-0 text-truncate">Total Enquiry</p>
                                                            <h3 class="text-dark mt-1 mb-0">$123.6k</h3>
                                                       </div> <!-- end col -->
                                                  </div> <!-- end row-->
                                             </div> <!-- end card body -->
                                             <div class="card-footer total-card-footer py-2 bg-light bg-opacity-50">
                                                  <div class="d-flex align-items-center justify-content-between">
                                                       <div class="last-quantity">
                                                            <span class="text-danger"> <i class="bx bxs-down-arrow fs-12"></i> 10.6%</span>
                                                            <span class="text-muted ms-1 fs-12">Last Month</span>
                                                       </div>
                                                       <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                                                  </div>
                                             </div> <!-- end card body -->
                                        </div> <!-- end card -->
                                   </div> <!-- end col -->
                              </div> <!-- end row -->
                         </div> <!-- end col -->

                         <div class="col-xxl-7 col-xl-6 ">
                              <div class="card">
                                   <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                             <h4 class="card-title">Performance</h4>
                                             <div>
                                                  <button type="button" class="btn btn-sm btn-outline-light">ALL</button>
                                                  <button type="button" class="btn btn-sm btn-outline-light">1M</button>
                                                  <button type="button" class="btn btn-sm btn-outline-light">6M</button>
                                                  <button type="button" class="btn btn-sm btn-outline-light active">1Y</button>
                                             </div>
                                        </div> <!-- end card-title-->

                                        <div dir="ltr">
                                             <div id="dash-performance-chart" class="apex-charts"></div>
                                        </div>
                                   </div> <!-- end card body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->
                    </div> <!-- end row -->


                    <div class="row">
                              <div class="col-xl-12">
                                   <div class="card">
                                        <div class="d-flex card-header justify-content-between align-items-center">
                                             <div>
                                                  <h4 class="card-title">Recent Orders</h4>
                                             </div>

                                        </div>
                                        <div class="card-body p-0">
                                             <div class="table-responsive">
                                                  <table class="table align-middle mb-0 table-hover table-centered">
                                                       <thead class="bg-light bg-opacity-50">
                                                            <tr>
                                                                 <th>Order ID</th>
                                                                 <th>Invoice No</th>
                                                                 <th>Total</th>
                                                                 <th>Username</th>
                                                                 <th>Items</th>
                                                                 <th>Payment Method</th>
                                                                 <th>Order Status</th>
                                                                 <th>Order Date</th>
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
                                                                 <td><i class="bx bxs-circle text-success me-1"></i>Order Delivered</td>
                                                                 <td>Nov 11, 2025, 4:12:17 PM </td>

                                                            </tr>

                                                            <tr>
                                                                 <td>1002</td>
                                                                 <td>AA2587</td>
                                                                 <td class="link-primary fw-medium"> $568.00</td>
                                                                 <td>TheresaBrose@gmail.com</td>
                                                                 <td> 1</td>
                                                                 <td> Online</td>
                                                                 <td><i class="bx bxs-circle text-danger me-1"></i>Payment Failed</td>
                                                                 <td>Nov 25, 2025, 11:12:17 AM </td>

                                                            </tr>

                                                            <tr>
                                                                 <td>1003</td>
                                                                 <td>AA4578</td>
                                                                 <td class="link-primary fw-medium"> $251.00</td>
                                                                 <td>9998887776</td>
                                                                 <td> 3</td>
                                                                 <td> Online</td>
                                                                 <td><i class="bx bxs-circle text-primary me-1"></i>Order Placed</td>
                                                                 <td>Nov 2, 2025, 6:05:45 AM </td>

                                                            </tr>

                                                            <tr>
                                                                 <td>1004</td>
                                                                 <td>AA1789</td>
                                                                 <td class="link-primary fw-medium"> $18.00</td>
                                                                 <td>Gordon@gmail.com</td>
                                                                 <td> 1</td>
                                                                 <td> <span class="badge bg-light text-dark  px-2 py-1 fs-13">Not Paid</span></td>
                                                                 <td><i class="bx bxs-circle text-yellow me-1"></i>Order Initiated</td>
                                                                 <td>Nov 9, 2025, 10:05:45 AM </td>

                                                            </tr>
                                                       </tbody>
                                                  </table>
                                             </div>
                                             <!-- end table-responsive -->
                                        </div>
                                         <div class="card-footer border-top">
                                        <div class="row g-3">
                                             <div class="col-sm">
                                                  <div class="text-muted">
                                                       Showing
                                                       <span class="fw-semibold">5</span>
                                                       of
                                                       <span class="fw-semibold">90,521</span>
                                                       orders
                                                  </div>
                                             </div>

                                             <div class="col-sm-auto">
                                                  <ul class="pagination m-0">
                                                       <li class="page-item">
                                                            <a href="#" class="page-link"><i class="bx bx-left-arrow-alt"></i></a>
                                                       </li>
                                                       <li class="page-item active">
                                                            <a href="#" class="page-link">1</a>
                                                       </li>
                                                       <li class="page-item">
                                                            <a href="#" class="page-link">2</a>
                                                       </li>
                                                       <li class="page-item">
                                                            <a href="#" class="page-link">3</a>
                                                       </li>
                                                       <li class="page-item">
                                                            <a href="#" class="page-link"><i class="bx bx-right-arrow-alt"></i></a>
                                                       </li>
                                                  </ul>
                                             </div>
                                        </div>
                                   </div>
                                   </div>
                              </div>

                         </div>

               </div>
               <!-- End Container Fluid -->

@endsection


