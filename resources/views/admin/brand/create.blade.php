@extends('admin.layouts.app')
@section('content')
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
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Brand Information</h4>
                    </div>
                    <form method="POST" action="{{ route('brand.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="brand-name" class="form-label">Brand Name</label>
                                        <input type="text" id="brand-name" name="name" class="form-control"
                                            value="{{ old('name') }}" placeholder="Enter Brand Name">
                                    </div>
                                </div>
                                <!-- <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="created-user" class="form-label">Created By</label>
                                        <input type="text" id="created-user" class="form-control"
                                            value="{{ Auth::user()->getRoleNames()->first() }}" disabled>
                                    </div>
                                </div> -->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="logo_url" class="form-label">Brand Logo</label>
                                        <input type="file" id="logo_url" class="form-control" name="logo_url">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="brand-des" class="form-label">Brand Description</label>
                                        <textarea name="description" id="brand-des" class="form-control"></textarea>
                                        <!-- <input type="text" id="brand-des" name="description" class="form-control"
                                            value="{{ old('name') }}" placeholder="Enter Brand Name"> -->
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <p>Brand Status </p>
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status"
                                                {{ old('status') == 1 ? 'checked' : '' }} value="1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Active
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status"
                                                {{ old('status') == 0 ? 'checked' : '' }} value="0">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                In Active
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer border-top d-flex gap-3">
                            <a href="{{ route('brand.index') }}" class="btn btn-outline-secondary">Cancel</a>
                            <button name="submit" type="submit" class="btn btn-primary">Save Brand</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
@endsection