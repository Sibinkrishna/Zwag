@extends('admin.layouts.app')

@section('content')
 <!-- Start Container Fluid -->
<div class="container-xxl">
    <div class="card bg-light-subtle">
            <div class="card-header border-0">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <div class="mt-md-0">
                                <a href="{{route('admin-list.create')}}" class="btn btn-success me-1 blk-btn"><i class="bx bx-plus"></i> New Admin</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="search-bar mb-1">
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
                                    <th>Username</th>
                                    <th>User Type</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=1;
                            @endphp
                            @forelse ($users as $user)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->getRoleNames()->first()}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->mobile}}</td>
                                    <td>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked1" {{($user->status)?'checked':''}}>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="{{route('admin-list.edit',$user->id)}}" class="btn btn-soft-primary btn-sm btn-soft-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Edit"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                            <a href="#!" class="btn btn-soft-danger btn-sm btn-soft-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Delete"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                        </div>
                                    </td>
                                </tr>
                                @php
                                    $i++;
                                @endphp
                            @empty
                                <tr>
                                    <td>No records found </td>
                                </tr>
                            @endforelse
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
