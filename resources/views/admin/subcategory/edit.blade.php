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
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">General Information</h4>
                    </div>
                    <form action="{{route('subcategory.update',$subCategory->id)}}" method="POST">
                        @csrf
                        @method("PUT")
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="category-name" class="form-label">Sub Category Name</label>
                                        <input type="text" id="sub-category-name" name="sub_category_name" value="{{$subCategory->sub_category}}" class="form-control"
                                            placeholder="Enter Sub Category Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="category">Category</label>
                                        <select class="form-control" id="category" name="category_id" data-choices
                                            data-choices-search-false data-choices-removeItem>
                                            <option value="">Please Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{$category->id}}" {{($subCategory->category_id==$category->id)?'selected':''}}>{{$category->category_name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="created-user" class="form-label">Created By</label>
                                        <input type="text" id="created-user" class="form-control" value="{{ Auth::user()->getRoleNames()->first() }}"
                                            disabled>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <p>Category Status </p>
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="category_status"
                                                id="flexRadioDefault1"  {{ old('category_status',$subCategory->category_status) == 1 ? 'checked' : '' }} value="1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Active
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="category_status"
                                                id="flexRadioDefault2"  {{ old('category_status',$subCategory->category_status) == 0 ? 'checked' : '' }} value="0">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                In Active
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer border-top d-flex gap-3">
                            <a href="{{route('subcategory.index')}}" class="btn btn-outline-secondary">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save Sub Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
    <!-- End Container Fluid -->
@endsection
