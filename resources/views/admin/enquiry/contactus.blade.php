@extends('admin.layouts.app')

@section('content')
  <!-- Start Container Fluid -->

               <div class="container-xxl">

                    <div class="card">
                         <div class="d-flex card-header justify-content-between align-items-center flex-wrap rowgp-15">
                              <div>
                                   <h4 class="card-title">Contact Us Form Details</h4>
                              </div>
                              <div class="search-bar me-3 mb-1">
                                   <span><i class="bx bx-search-alt"></i></span>
                                   <input type="search" class="form-control" id="search" placeholder="Search ...">
                              </div>
                         </div>
                         <div class="card-body p-0">
                              <div class="table-responsive">
                                   <table class="table align-middle mb-0 table-hover table-centered">
                                        <thead class="bg-light-subtle">
                                             <tr>
                                                  <th>Sl. No</th>
                                                  <th>Name</th>
                                                  <th>Mobile Number</th>
                                                  <th>Email</th>
                                                  <th>Date</th>
                                                  <th>Action</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                             <tr>
                                                  <td>1</td>
                                                  <td>John Doe</td>
                                                  <td>9998887776</td>
                                                  <td>john.doe@gmail.com</td>
                                                  <td>Nov 25, 2025, 4:12:17 PM</td>
                                                  <td>
                                                       <div class="d-flex gap-2">
                                                            <a href="#!" class="btn btn-light btn-sm btn-soft-icons" data-bs-toggle="modal" data-bs-target="#exampleMessageViewModal"><iconify-icon icon="solar:eye-broken" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="View Message" class="align-middle fs-18"></iconify-icon></a>
                                                            <a href="#!" id="sweetalert-params" class="btn btn-soft-danger btn-sm btn-soft-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Delete"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                       </div>
                                                  </td>
                                             </tr>
                                             <tr>
                                                  <td>2</td>
                                                  <td>Thomas Muller</td>
                                                  <td>8888877777</td>
                                                  <td>thomas.muller@gmail.com</td>
                                                  <td>Nov 11, 2025, 12:25:35 PM</td>
                                                  <td>
                                                       <div class="d-flex gap-2">
                                                            <a href="#!" class="btn btn-light btn-sm btn-soft-icons" data-bs-toggle="modal" data-bs-target="#exampleMessageViewModal"><iconify-icon icon="solar:eye-broken" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="View Message" class="align-middle fs-18"></iconify-icon></a>
                                                            <a href="#!" class="btn btn-soft-danger btn-sm btn-soft-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Delete"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                       </div>
                                                  </td>
                                             </tr>
                                        </tbody>
                                   </table>
                              </div>
                              <!-- end table-responsive -->
                         </div>
                         <div class="row g-0 align-items-center justify-content-between text-center text-sm-start p-3 border-top">
                              <div class="col-sm">
                                   <div class="text-muted">
                                        Showing <span class="fw-semibold">10</span> of <span class="fw-semibold">20</span> Results
                                   </div>
                              </div>
                              <div class="col-sm-auto mt-3 mt-sm-0">
                                   <ul class="pagination  m-0">
                                        <li class="page-item">
                                             <a href="#" class="page-link"><i class='bx bx-left-arrow-alt'></i></a>
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
                                             <a href="#" class="page-link"><i class='bx bx-right-arrow-alt'></i></a>
                                        </li>
                                   </ul>
                              </div>
                         </div>
                    </div>

               </div>
               <!-- End Container Fluid -->
@endsection
