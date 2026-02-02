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
                                                  <h4 class="card-title">All Customers List</h4>
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
                                                                 <th>ID</th>
                                                                 <th>Customer Name</th>
                                                                 <th>Username</th>
                                                                 <th>Created Date</th>
                                                            </tr>
                                                       </thead>
                                                       <tbody>
                                                            <tr>
                                                                 <td>001</td>
                                                                 <td><img src="{{asset('admin/assets/images/users/avatar-2.jpg')}}" class="avatar-sm rounded-circle me-2" alt="..."> Michael A. Miner</td>
                                                                 <td>michael@gmail.com</td>
                                                                 <td>Nov 25, 2025, 4:12:17 PM </td>
                                                            </tr>
                                                            <tr>
                                                                 <td>002</td>
                                                                 <td><img src="{{asset('admin/assets/images/users/avatar-3.jpg')}}" class="avatar-sm rounded-circle me-2" alt="..."> Theresa T. Brose</td>
                                                                 <td>TheresaBrosegmail.com</td>
                                                                 <td>Dec 12, 2025, 4:12:17 PM </td>
                                                            </tr>
                                                            <tr>
                                                                 <td>003</td>
                                                                 <td><img src="{{asset('admin/assets/images/users/avatar-4.jpg')}}" class="avatar-sm rounded-circle me-2" alt="...">  James L. Erickson</td>
                                                                 <td> 9998887776</td>
                                                                 <td>Sep 30, 2024, 2:07:55 AM </td>
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
