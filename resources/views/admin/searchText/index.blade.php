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
                                             <div class="col-lg-3 col-md-6 col-sm-12">
                                                  <div class="mb-3">
                                                       <select class="form-control" id="sort-type" name="sort-type" data-choices data-choices-search-false data-choices-removeItem>
                                                            <option value="">Sort By</option>
                                                            <option value="Max Count">Max Count</option>
                                                            <option value="Min Count">Min Count</option>
                                                       </select>
                                                  </div>
                                             </div>
                                             <div class="col-lg-3 col-md-6 col-sm-12">
                                                  <div class="mb-3">
                                                       <input type="text" class="form-control humanfd-datepicker" placeholder="From Date">
                                                  </div>
                                             </div>
                                             <div class="col-lg-3 col-md-6 col-sm-12">
                                                  <div class="mb-3">
                                                       <input type="text" class="form-control humanfd-datepicker" placeholder="To Date">
                                                  </div>
                                             </div>
                                             <div class="col-lg-3 col-md-6 col-sm-12">
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

                    <div class="card">
                         <div class="card-body p-0">
                              <div class="table-responsive">
                                   <table class="table align-middle mb-0 table-hover table-centered">
                                        <thead class="bg-light-subtle">
                                             <tr>
                                                  <th>Sl. No</th>
                                                  <th>Search Text</th>
                                                  <th>Search Count</th>
                                                  <th>Created Date</th>
                                                  <th>Modified Date Date</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                             <tr>
                                                  <td>1</td>
                                                  <td>T-Shirt for Men</td>
                                                  <td>16</td>
                                                  <td>12 March 2024</td>
                                                  <td>24 April 2024</td>
                                             </tr>
                                             <tr>
                                                  <td>2</td>
                                                  <td>Jeans for Men</td>
                                                  <td>7</td>
                                                  <td>7 July 2024</td>
                                                  <td>18 April 2024</td>
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
