@extends('admin.layouts.app')
@section('content')
    <!-- Start Container -->
               <div class="container-xxl">

                    <div class="row">
                         <div class="col-lg-12">
                              <div class="row">
                                   <div class="col-lg-4">
                                        <div class="card">
                                             <div class="card-header">
                                                  <h4 class="card-title">Order Summary</h4>
                                             </div>
                                             <div class="card-body">
                                                  <div class="table-responsive">
                                                       <table class="table mb-0">
                                                            <tbody>
                                                                 <tr>
                                                                      <td class="px-0">
                                                                           <p class="d-flex mb-0 align-items-center gap-1"><iconify-icon icon="solar:clipboard-text-broken"></iconify-icon> Order Id : </p>
                                                                      </td>
                                                                      <td class="text-end text-dark fw-medium px-0">1001</td>
                                                                 </tr>
                                                                 <tr>
                                                                      <td class="px-0">
                                                                           <p class="d-flex mb-0 align-items-center gap-1"><iconify-icon icon="solar:clipboard-text-broken"></iconify-icon> Invoice Id : </p>
                                                                      </td>
                                                                      <td class="text-end text-dark fw-medium px-0">AA1234</td>
                                                                 </tr>
                                                                 <tr>
                                                                      <td class="px-0">
                                                                           <p class="d-flex mb-0 align-items-center gap-1"><iconify-icon icon="solar:calendar-date-broken"></iconify-icon> Order Date : </p>
                                                                      </td>
                                                                      <td class="text-end text-dark fw-medium px-0">Nov 11, 2025, 4:12:17 PM</td>
                                                                 </tr>
                                                                 <tr>
                                                                      <td class="px-0">
                                                                           <p class="d-flex mb-0 align-items-center gap-1"><iconify-icon icon="solar:clipboard-text-broken"></iconify-icon> Sub Total : </p>
                                                                      </td>
                                                                      <td class="text-end text-dark fw-medium px-0">$1290.00</td>
                                                                 </tr>
                                                                 <tr>
                                                                      <td class="px-0">
                                                                           <p class="d-flex mb-0 align-items-center gap-1"><iconify-icon icon="solar:ticket-broken" class="align-middle"></iconify-icon> Discount : </p>
                                                                      </td>
                                                                      <td class="text-end text-dark fw-medium px-0">-$60.00</td>
                                                                 </tr>

                                                            </tbody>
                                                       </table>
                                                  </div>
                                             </div>
                                             <div class="card-footer d-flex align-items-center justify-content-between bg-light-subtle">
                                                  <div>
                                                       <p class="fw-medium text-dark mb-0">Total Amount</p>
                                                  </div>
                                                  <div>
                                                       <p class="fw-medium text-dark mb-0">$1,230.00</p>
                                                  </div>

                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-lg-4">
                                        <div class="card">
                                             <div class="card-header">
                                                  <h4 class="card-title">Customer Details</h4>
                                             </div>
                                             <div class="card-body">
                                                  <div class="d-flex align-items-center gap-2">
                                                       <img src="{{asset('admin/assets/images/users/avatar-1.jpg')}}" alt="" class="avatar rounded-3 border border-light border-3">
                                                       <div>
                                                            <p class="mb-1">Gaston Lapierre</p>
                                                            <a href="#!" class="link-primary fw-medium">hello@dundermuffilin.com</a>
                                                       </div>
                                                  </div>
                                                  <div class="d-flex justify-content-between mt-3">
                                                       <h5 class="">Contact Number</h5>
                                                       <!-- <div>
                                                            <a href="#!"><i class='bx bx-edit-alt fs-18'></i></a>
                                                       </div> -->
                                                  </div>
                                                  <p class="mb-1">(723) 732-760-5760</p>

                                                  <div class="d-flex justify-content-between mt-3">
                                                       <h5 class="">Shipping Address</h5>
                                                       <!-- <div>
                                                            <a href="#!"><i class='bx bx-edit-alt fs-18'></i></a>
                                                       </div> -->
                                                  </div>

                                                  <div>
                                                       <p class="mb-1">Wilson's Jewelers LTD</p>
                                                       <p class="mb-1">1344 Hershell Hollow Road ,</p>
                                                       <p class="mb-1">Tukwila, WA 98168 ,</p>
                                                       <p class="mb-1">United States</p>
                                                       <p class="">(723) 732-760-5760</p>
                                                  </div>

                                                  <div class="d-flex justify-content-between mt-3">
                                                       <h5 class="">Billing Address</h5>
                                                       <!-- <div>
                                                            <a href="#!"><i class='bx bx-edit-alt fs-18'></i></a>
                                                       </div> -->
                                                  </div>

                                                  <p class="mb-1">Same as Shipping address</p>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-lg-4">
                                        <div class="card">
                                             <div class="card-header">
                                                  <h4 class="card-title">Payment Information</h4>
                                             </div>
                                             <div class="card-body">
                                                  <div class="d-flex align-items-center gap-3 mb-3">
                                                       <div class="rounded-3 bg-light avatar d-flex align-items-center justify-content-center">
                                                            <img src="{{asset('admin/assets/images/card/mastercard.svg')}}" alt="" class="avatar-sm">
                                                       </div>
                                                       <div>
                                                            <p class="mb-1 text-dark fw-medium">Master Card</p>
                                                            <p class="mb-0 text-dark">xxxx xxxx xxxx 7812</p>
                                                       </div>
                                                       <div class="ms-auto">
                                                            <iconify-icon icon="solar:check-circle-broken" class="fs-22 text-success"></iconify-icon>
                                                       </div>
                                                  </div>
                                                  <p class="text-dark mb-1 fw-medium">Transaction ID : <span class="text-muted fw-normal fs-13"> #IDN768139059</span></p>
                                                  <p class="text-dark mb-0 fw-medium">Card Holder Name : <span class="text-muted fw-normal fs-13"> Gaston Lapierre</span></p>

                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>


                         <div class="col-lg-12">
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
                                                            <th>Last Status</th>
                                                            <th>Action</th>
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
                                                            <td><i class="bx bxs-circle text-primary me-1"></i>Order Placed</td>
                                                            <td>
                                                                 <div class="d-flex gap-2">
                                                                      <a href="{{route('admin.order.details')}}" target="_blank" class="btn btn-light btn-sm btn-soft-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="View Updates"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
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
                                                                           <p class="text-muted mb-0 mt-1 fs-13"><span>Size : </span>M</p>
                                                                      </div>
                                                                 </div>

                                                            </td>
                                                            <td> 1</td>
                                                            <td>$330.00</td>
                                                            <td><i class="bx bxs-circle text-yellow me-1"></i>Order Initiated</td>
                                                            <td>
                                                                 <div class="d-flex gap-2">
                                                                      <a href="{{route('admin.order.details')}}" class="btn btn-light btn-sm btn-soft-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="View Updates"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                 </div>
                                                            </td>
                                                       </tr>

                                                       <tr>
                                                            <td>3</td>
                                                            <td>
                                                                 <div class="d-flex align-items-center gap-2">
                                                                      <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                                           <img src="{{asset('admin/assets/images/product/p-8.png')}}" alt="" class="avatar-md">
                                                                      </div>
                                                                      <div>
                                                                           <a href="#!" class="text-dark fw-medium fs-15">Men Dark Brown Wallet</a>
                                                                           <p class="text-muted mb-0 mt-1 fs-13"><span>Size : </span>S</p>
                                                                      </div>
                                                                 </div>

                                                            </td>
                                                            <td> 1</td>
                                                            <td>$132.00</td>
                                                            <td><i class="bx bxs-circle text-success me-1"></i>Order Placed</td>
                                                            <td>
                                                                 <div class="d-flex gap-2">
                                                                      <a href="{{route('admin.order.details')}}" class="btn btn-light btn-sm btn-soft-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="View Updates"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                 </div>
                                                            </td>
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
