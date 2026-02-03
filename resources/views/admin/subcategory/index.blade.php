@extends('admin.layouts.app')

@section('content')
  <!-- Start Container Fluid -->
               <div class="container-xxl">

                    <div class="row">
                         <div class="col-xl-12">
                              <div class="card bg-light-subtle">
                                   <div class="card-header border-0">
                                        <div class="row justify-content-between align-items-center">
                                             <div class="col-lg-6">
                                                  <div class="mt-3 mt-md-0">
                                                       <a href="{{route('subcategory.create')}}" class="btn btn-success me-1 blk-btn"><i class="bx bx-plus"></i> New Sub Category</a>
                                                  </div>
                                             </div>
                                             <div class="col-lg-6">
                                                  <div class="search-bar me-3 mb-1 ml-sm-0">
                                                       <span><i class="bx bx-search-alt"></i></span>
                                                       <input type="search" class="form-control" id="search" placeholder="Search ...">
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="card">
                                   <div>
                                        <div class="table-responsive">
                                             <table class="table align-middle mb-0 table-hover table-centered">
                                                  <thead class="bg-light-subtle">
                                                       <tr>
                                                            <th>Sl No.</th>
                                                            <th>Sub Category Name</th>
                                                            <th>Category</th>
                                                            <th>Created by</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                    @php
                                                        $i=1;
                                                    @endphp
                                                    @forelse ($subcategories as $subcategory)
                                                        <tr>
                                                            <td>{{ $i++ }}</td>
                                                            <td>{{ $subcategory->sub_category }}</td>
                                                            <td>{{ $subcategory->category->category_name }}</td>
                                                            <td>{{ $subcategory->creator->getRoleNames()->first() }}</td>
                                                            <td>
                                                                 <div class="form-check form-switch">
                                                                      <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked1" disabled {{($subcategory->category_status==1)?'checked':''}} >
                                                                 </div>
                                                            </td>
                                                            <td>
                                                                 <div class="d-flex gap-2">
                                                                      <a href="{{route('subcategory.edit',$subcategory->id)}}" class="btn btn-soft-primary btn-sm btn-soft-icons " data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Edit"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                      <a href="#!" class="btn btn-soft-danger btn-sm btn-soft-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Delete"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                    @empty
                                                       <tr>
                                                            <td>No records available</td>
                                                       </tr>
                                                    @endforelse

                                                  </tbody>
                                             </table>
                                        </div>
                                        <!-- end table-responsive -->
                                   </div>
                                   {{ $subcategories->links('admin.vendor.pagination') }}

                              </div>
                         </div>
                    </div>

               </div>
<!-- End Container Fluid -->
@endsection
