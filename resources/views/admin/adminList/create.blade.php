@extends('admin.layouts.app')
@section('content')
    <!-- Start Container Fluid -->
    <div class="container-xxl">

        <div class="row">
            <div class="col-lg-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('admin-list.store') }}">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Create Admin</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="admin-name" class="form-label">Username</label>
                                        <input type="text" id="admin-name" name="user_name" class="form-control" placeholder="Username">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="admin-password">Password</label>
                                        <input type="password" id="admin-password" name="password" class="form-control"
                                            placeholder="Enter your password">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="user-type">User Type</label>
                                        <select class="form-control" id="user-type" name="user_type" data-choices
                                            data-choices-search-false data-choices-removeItem>
                                            <option value="">Please Select User Type</option>
                                            @foreach ($roles as $role)
                                                <option value="{{$role->name}}">{{$role->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="user-mail" class="form-label">Email</label>
                                        <input type="email" id="user-mail" name="user_email" class="form-control"
                                            placeholder="Enter Email Id">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="user-number" class="form-label">Mobile Number</label>
                                        <input type="number" id="user-mail" name="mobile_number" class="form-control"
                                            placeholder="Enter Mobile Number">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <p>Admin Status </p>
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status"
                                                id="flexRadioDefault1" checked="" value="active">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Active
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status"
                                                id="flexRadioDefault2" value="inactive">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                In Active
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer border-top d-flex gap-3">
                            <a href="{{route('admin-list.index')}}" class="btn btn-outline-secondary">Cancel</a>
                            <button name="submit" type="submit" class="btn btn-primary">Save Admin</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
    <!-- End Container Fluid -->
@endsection
