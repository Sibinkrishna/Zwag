@extends('admin.layouts.app')

@section('content')
  <!-- Start Container Fluid -->
                    <div class="container-xxl">



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
                                                            <input type="text" id="Customer-id" class="form-control" placeholder="Customer ID">
                                                       </div>
                                                  </div>
                                                   <div class="col-lg-3">
                                                       <div class="mb-3">
                                                            <input type="text" id="customer-name" class="form-control" placeholder="Customer Name">
                                                       </div>
                                                  </div>
                                                   <div class="col-lg-3">
                                                       <div class="mb-3">
                                                            <input type="text" id="username" class="form-control" placeholder="Username">
                                                       </div>
                                                  </div>
                                                  <div class="col-lg-3">
                                                       <div class="mb-3">
                                                            <input type="date" id="created-date" class="form-control" placeholder="Created Date">
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
                                   <div class="d-flex card-header justify-content-between align-items-center flex-wrap rowgp-15">
                                             <div>
                                                  <h4 class="card-title">All Product List</h4>
                                             </div>
                                             <div class="export-btn-row">
                                                  <button type="button" class="btn btn-pdf">
                                                       <i class="bx bx-download me-1"></i>Export to PDF
                                                  </button>
                                                  <button type="button" class="btn btn-outline-success">
                                                       <i class="bx bx-download me-1"></i>Export to Excel
                                                  </button>
                                             </div>
                                        </div>

                                   <div>
                                        <div class="table-responsive">
                                             <table class="table align-middle mb-0 table-hover table-centered">
                                                  <thead class="bg-light-subtle">
                                                       <tr>
                                                            <th>Sl.No</th>
                                                            <th>Product Name &amp; Size</th>
                                                            <th>Price</th>
                                                            <th>Stock</th>
                                                            <th>Category</th>
                                                            <th>Sub Category</th>
                                                            <th>Status</th>
                                                            <th>Created On</th>
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
                                                                      <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked1" checked="">
                                                                 </div>
                                                            </td>
                                                            <td>12 March 2024</td>
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
                                                                      <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked1" checked="">
                                                                 </div>
                                                            </td>
                                                            <td>10 Sep 2023</td>
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
