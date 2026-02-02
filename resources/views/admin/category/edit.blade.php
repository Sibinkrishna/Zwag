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
                                        <h4 class="card-title">Edit Category</h4>
                                   </div>
                                   <form method="POST" action="{{route('category.update',$category->id)}}">
                                    @csrf
                                    @method('PUT')
                                        <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="category-name" class="form-label">Category Name</label>
                                                            <input type="text" id="category-name" name="category_name" class="form-control" value="{{$category->category_name}}" placeholder="Enter Category Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="created-user" class="form-label">Created By</label>
                                                            <input type="text" id="created-user" class="form-control" value="{{Auth::user()->getRoleNames()->first()}}" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <p>Category Status </p>
                                                        <div class="d-flex gap-2 align-items-center">
                                                            <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="category_status" {{($category->category_status==1)?'checked':''}}  value="1">
                                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                                        Active
                                                                    </label>
                                                            </div>
                                                            <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="category_status" {{($category->category_status==0)?'checked':''}} value="0">
                                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                                        In Active
                                                                    </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                        </div>
                                        <div class="card-footer border-top d-flex gap-3">
                                                <a href="{{route('category.index')}}" class="btn btn-outline-secondary">Cancel</a>
                                                <button name="submit" type="submit" class="btn btn-primary">Save Category</button>
                                        </div>
                                   </form>
                              </div>
                         </div>
                    </div>


               </div>
               <!-- End Container Fluid -->
@endsection
