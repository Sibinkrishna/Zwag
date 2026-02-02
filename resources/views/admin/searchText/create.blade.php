@extends('admin.layouts.app')
@section('content')
<!-- Start Container Fluid -->
               <div class="container-xxl">

                    <div class="row">
                         <div class="col-lg-12">
                              <div class="card">
                                   <div class="card-header">
                                        <h4 class="card-title">General Information</h4>
                                   </div>
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-lg-6">
                                                  <div class="mb-3">
                                                       <label for="category-name" class="form-label">Category Name</label>
                                                       <input type="text" id="category-name" class="form-control" placeholder="Enter Category Name">
                                                  </div>
                                             </div>
                                             <div class="col-lg-6">
                                                  <div class="mb-3">
                                                       <label for="created-user" class="form-label">Created By</label>
                                                       <input type="text" id="created-user" class="form-control" value="Shop Admin" disabled>
                                                  </div>
                                             </div>
                                             <div class="col-lg-6">
                                                  <p>Category Status </p>
                                                  <div class="d-flex gap-2 align-items-center">
                                                       <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked="">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                 Active
                                                            </label>
                                                       </div>
                                                       <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                 In Active
                                                            </label>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>

                                   </div>
                                   <div class="card-footer border-top d-flex gap-3">
                                        <a href="category-list.php" class="btn btn-outline-secondary">Cancel</a>
                                        <a href="#!" class="btn btn-primary">Save Category</a>
                                   </div>
                              </div>
                         </div>
                    </div>


               </div>
               <!-- End Container Fluid -->
@endsection
