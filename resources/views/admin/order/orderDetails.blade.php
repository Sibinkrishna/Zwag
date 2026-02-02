@extends('admin.layouts.app')
@section('content')
     <!-- Start Container -->
               <div class="container-xxl">

                    <div class="row">
                         <div class="col-lg-7">
                              <div class="card">
                                   <div class="card-header">
                                        <h4 class="card-title">Order Timeline</h4>
                                   </div>
                                   <div class="card-body">
                                        <div class="position-relative ms-2">
                                             <span class="position-absolute start-0  top-0 border border-dashed h-100"></span>
                                             <div class="position-relative ps-4">
                                                  <div class="mb-4">
                                                       <span class="position-absolute start-0 avatar-sm translate-middle-x bg-light d-inline-flex align-items-center justify-content-center rounded-circle">
                                                            <div class="spinner-border spinner-border-sm text-warning" role="status">
                                                                 <span class="visually-hidden">Loading...</span>
                                                            </div>
                                                       </span>
                                                       <div class="ms-2 d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                                            <div>
                                                                 <h5 class="mb-1 text-dark fw-medium fs-15">The packing has been started</h5>
                                                                 <p class="mb-0">Confirmed by Gaston Lapierre</p>
                                                            </div>
                                                            <p class="mb-0">April 23, 2024, 09:40 am</p>

                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="position-relative ps-4">
                                                  <div class="mb-4">
                                                       <span class="position-absolute start-0 avatar-sm translate-middle-x bg-light d-inline-flex align-items-center justify-content-center rounded-circle text-success fs-20">
                                                            <i class='bx bx-check-circle'></i>
                                                       </span>
                                                       <div class="ms-2 d-flex flex-wrap gap-2  align-items-center justify-content-between">
                                                            <div>
                                                                 <h5 class="mb-1 text-dark fw-medium fs-15">Order Placed</h5>
                                                                 <p class="mb-2">Invoice email was sent to <a href="#!" class="link-primary">hello@dundermuffilin.com</a></p>
                                                                 <a href="#!" class="btn btn-light border-btn resend-btn">Resend Invoice</a>
                                                            </div>
                                                            <p class="mb-0">April 23, 2024, 09:40 am</p>

                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="position-relative ps-4">
                                                  <div class="mb-4">
                                                       <span class="position-absolute start-0 avatar-sm translate-middle-x bg-light d-inline-flex align-items-center justify-content-center rounded-circle text-success fs-20">
                                                            <i class='bx bx-check-circle'></i>
                                                       </span>
                                                       <div class="ms-2 d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                                            <div>
                                                                 <h5 class="mb-1 text-dark fw-medium fs-15">Payment Confirmed</h5>
                                                                 <p class="mb-2">Using Master Card</p>
                                                                 <div class="d-flex align-items-center gap-2">
                                                                      <p class="mb-1 text-dark fw-medium">Status :</p>
                                                                      <span class="badge bg-success-subtle text-success  px-2 py-1 fs-13">Paid</span>
                                                                 </div>
                                                            </div>
                                                            <p class="mb-0">April 23, 2024, 09:40 am</p>

                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="position-relative ps-4">
                                                  <div class="mb-4">
                                                       <span class="position-absolute start-0 avatar-sm translate-middle-x bg-light d-inline-flex align-items-center justify-content-center rounded-circle text-success fs-20">
                                                            <i class='bx bx-check-circle'></i>
                                                       </span>
                                                       <div class="ms-2 d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                                            <div>
                                                                 <h5 class="mb-1 text-dark fw-medium fs-15">Payment Pending</h5>
                                                                 <p class="mb-1 text-dark fw-medium">Status : Pending</p>
                                                            </div>
                                                            <p class="mb-0">April 23, 2024, 09:40 am</p>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="position-relative ps-4">
                                                  <div class="mb-2">
                                                       <span class="position-absolute start-0 avatar-sm translate-middle-x bg-light d-inline-flex align-items-center justify-content-center rounded-circle text-success fs-20">
                                                            <i class='bx bx-check-circle'></i>
                                                       </span>
                                                       <div class="ms-2 d-flex flex-wrap gap-2  align-items-center justify-content-between">
                                                            <div>
                                                                 <h5 class="mb-2 text-dark fw-medium fs-15">Order Initiated</h5>
                                                            </div>
                                                            <p class="mb-0">April 23, 2024, 09:40 am</p>

                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="col-lg-5">
                              <div class="card">
                                   <div class="card-header">
                                        <h4 class="card-title">Order Status</h4>
                                   </div>
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-lg-6">
                                                  <div class="mb-3">
                                                       <select class="form-control" id="sort-type" name="sort-type" data-choices data-choices-search-false data-choices-removeItem>
                                                            <option value="">Select Order Status</option>
                                                            <option value="Order Placed">Order Placed</option>
                                                            <option value="Order Processed">Order Processed</option>
                                                            <option value="Order Dispatched">Order Dispatched</option>
                                                            <option value="Order Delivered">Order Delivered</option>
                                                            <option value="Order Failed">Order Failed</option>
                                                            <option value="Order Cancelled">Order Cancelled</option>
                                                       </select>
                                                  </div>
                                             </div>
                                             <div class="col-lg-6">
                                                  <div class="mb-3 d-flex gap-1">
                                                       <button type="button" class="btn btn-primary blk-btn">
                                                            Save Status
                                                       </button>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="card">
                                   <div class="card-header">
                                        <h4 class="card-title">Order Item List</h4>
                                   </div>
                                   <div class="card-body">
                                        <div class="table-responsive">
                                             <table class="table align-middle mb-0 table-hover table-centered">
                                                  <thead class="bg-light-subtle border-bottom">
                                                       <tr>
                                                            <th>Sl.No</th>
                                                            <th>Product Name & Size</th>
                                                            <th>Quantity</th>
                                                            <th>Amount</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>
                                                                 <div class="d-flex align-items-center gap-2">
                                                                      <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                                           <img src="{{asset('admin/assets/images/product/p-1.png')}}" alt="" class="avatar-md">
                                                                      </div>
                                                                      <div>
                                                                           <a href="#!" class="text-dark fw-medium fs-15">Men Black Slim Fit T-shirt</a>
                                                                           <p class="text-muted mb-0 mt-1 fs-13"><span>Size : </span>M</p>
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td> 1</td>
                                                            <td>$83.00</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
    <!-- End Container Fluid -->
@endsection
