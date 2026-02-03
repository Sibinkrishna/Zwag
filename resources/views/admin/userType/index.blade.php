@extends('admin.layouts.app')

@section('content')
 <!-- Start Container Fluid -->
<div class="container-xxl">
    <div class="card bg-light-subtle">
            <div class="card-header border-0">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <div class="mt-md-0">
                                <a href="{{route('user-type.create')}}" class="btn btn-success me-1 blk-btn"><i class="bx bx-plus"></i> New User</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="search-bar me-3 mb-1">
                                <span><i class="bx bx-search-alt"></i></span>
                                <input type="search" class="form-control" id="search" placeholder="Search ...">
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
                                    <th>User Type</th>
                                    <th>Actions</th>
                                </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=1;
                            @endphp
                            @forelse ($usertypes as $usertype)
                                 <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$usertype->name}}</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <!-- <a href="#!" class="btn btn-light btn-sm" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="View"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a> -->
                                            <a href="{{route('user-type.edit',$usertype->id)}}" class="btn btn-soft-primary btn-sm btn-soft-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Edit"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                            <a href="#!" id="sweetalert-params" class="btn btn-soft-danger btn-sm btn-soft-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Delete"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                        </div>
                                    </td>
                                </tr>
                                @php
                                    $i++;
                                @endphp
                            @empty
                                 <tr>
                                    <td>No Records found </td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
            {{ $usertypes->links('admin.vendor.pagination') }}
    </div>

</div>
<!-- End Container Fluid -->
@endsection
