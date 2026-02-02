@extends('admin.layouts.app')
@section('content')
<!-- Start Container Fluid -->
               <div class="container-xxl">

                    <div class="row">
                         <div class="col-lg-12">
                            <form method="POST" action="{{route('user-type.update',$role->id)}}">
                                @csrf
                                @method('PUT')
                              <div class="card">
                                   <div class="card-header">
                                        <h4 class="card-title">Edit Roles Information</h4>
                                   </div>
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-lg-6">
                                                  <div class="mb-3">
                                                       <label for="user-type" class="form-label">User Type</label>
                                                       <input type="text" id="user-type" name="user_type" class="form-control" value="{{$role->name}}" placeholder="User Type">
                                                  </div>
                                             </div>
                                             <div class="col-lg-6">
                                                  <div class="mb-3">
                                                       <label for="role-tag" class="form-label">Module Permissions</label>
                                                       <select class="form-control" name="permissions[]" id="choices-multiple-remove-button" data-choices data-choices-removeItem name="choices-multiple-remove-button" multiple>
                                                            @foreach ($permissions as $permission)
                                                                <option value="{{$permission->name}}"  {{ in_array($permission->name, $permissionNames) ? 'selected' : '' }}>{{$permission->name}}</option>
                                                            @endforeach
                                                       </select>
                                                  </div>
                                             </div>

                                        </div>

                                   </div>
                                   <div class="card-footer border-top d-flex gap-3">
                                        <a href="{{route('user-type.index')}}" class="btn btn-outline-secondary">Cancel</a>
                                        <button name="button" type="submit" class="btn btn-primary">Update User</button>
                                   </div>
                              </div>
                         </div>
                    </div>


               </div>
               <!-- End Container Fluid -->
@endsection
