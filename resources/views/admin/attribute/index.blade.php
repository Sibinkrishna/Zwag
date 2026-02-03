@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-4">Manage Attributes</h4>

    {{-- ADD ATTRIBUTE --}}
    <div class="card mb-4">
        <div class="card-header">Add Attribute</div>
        <div class="card-body">
            <form method="POST" action="{{ route('attribute.store') }}">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" name="key" class="form-control"
                               placeholder="size, color, fabric">
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- LIST ATTRIBUTES --}}
    @foreach($attributes as $attribute)
        <div class="card mb-3">
            <div class="card-header d-flex justify-content-between align-items-center">

                {{-- EDIT ATTRIBUTE KEY --}}
                <form method="POST" action="{{ route('attribute.update', $attribute->id) }}"
                      class="d-flex">
                    @csrf
                    @method('PUT')
                    <input type="text" name="key"
                           class="form-control me-2"
                           value="{{ $attribute->key }}">
                    <button class="btn btn-sm btn-success">Update</button>
                </form>

                {{-- DELETE ATTRIBUTE --}}
                <form method="POST" action="{{ route('attribute.destroy', $attribute->id) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger"
                            onclick="return confirm('Delete attribute?')">
                        Delete
                    </button>
                </form>
            </div>

            <div class="card-body">

                {{-- ADD ATTRIBUTE VALUE --}}
                <form method="POST"
                      action="{{ route('attribute.values.store', $attribute->id) }}"
                      class="mb-3">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" name="value"
                                   class="form-control"
                                   placeholder="Add value (S, M, Red)">
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary btn-sm">Add Value</button>
                        </div>
                    </div>
                </form>

                {{-- ATTRIBUTE VALUES --}}
                <table class="table table-sm table-bordered">
                    <thead>
                        <tr>
                            <th>Value</th>
                            <th width="200">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($attribute->values as $value)
                            <tr>
                                <td>
                                    <form method="POST"
                                          action="{{ route('attribute.values.update', $value->id) }}"
                                          class="d-flex">
                                        @csrf
                                        @method('PUT')
                                        <input type="text"
                                               name="value"
                                               class="form-control me-2"
                                               value="{{ $value->value }}">
                                        <button class="btn btn-sm btn-success">
                                            Save
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <form method="POST"
                                          action="{{ route('attribute.values.destroy', $value->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger"
                                                onclick="return confirm('Delete value?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        @if($attribute->values->count() == 0)
                            <tr>
                                <td colspan="2" class="text-center text-muted">
                                    No values added
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>

            </div>
        </div>
    @endforeach
</div>
@endsection
