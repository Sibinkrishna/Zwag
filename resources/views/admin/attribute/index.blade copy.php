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
                                    <a href="{{ route('attribute.create') }}" class="btn btn-success me-1 blk-btn"><i
                                            class="bx bx-plus"></i> Add Attribute</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="d-flex card-header justify-content-between align-items-center">
                        <div>
                            <h4 class="card-title" style="padding: 10px 0px;">All Attribute List</h4>
                        </div>
                    </div>
                    <div>
                        <div class="table-responsive">
                            <table class="table align-middle mb-0 table-hover table-centered">
                                <thead class="bg-light-subtle">
                                    <tr>
                                        <th>Sl.No</th>
                                        <th>Variant</th>
                                        <th>Value</th>
                                        <th>Created On</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @forelse ($attributes as $attribut)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$attribut->key}}</td>
                                            <td>{{ implode(', ', json_decode($attribut->value, true)) }}</td>
                                            <td>{{date("d M Y",strtotime($attribut->created_at))}}</td>

                                            <td>
                                                <div class="d-flex gap-2">
                                                    <a href="{{route('attribute.edit',$attribut->id)}}" class="btn btn-soft-primary btn-sm btn-soft-icons"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        data-bs-title="Edit"><iconify-icon icon="solar:pen-2-broken"
                                                            class="align-middle fs-18"></iconify-icon></a>
                                                    <a href="#!" class="btn btn-soft-danger btn-sm btn-soft-icons"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        data-bs-title="Delete"><iconify-icon
                                                            icon="solar:trash-bin-minimalistic-2-broken"
                                                            class="align-middle fs-18"></iconify-icon></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse



                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->
                    </div>
                    {{ $attributes->links('admin.vendor.pagination') }}
                </div>
            </div>
        </div>

    </div>
    <!-- End Container Fluid -->
@endsection
