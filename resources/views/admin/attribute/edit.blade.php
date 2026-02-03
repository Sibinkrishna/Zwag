@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-4">Edit Attribute</h4>

    {{-- UPDATE ATTRIBUTE KEY --}}
    <div class="card mb-4">
        <div class="card-header">Attribute</div>
        <div class="card-body">
            <form method="POST" action="{{ route('attribute.update', $attribute->id) }}">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-4">
                        <label>Attribute Key</label>
                        <input type="text" name="key"
                               class="form-control"
                               value="{{ $attribute->key }}">
                    </div>
                    <div class="col-md-2" style="margin-top: 20px;">
                        <button class="btn btn-success">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- ADD ATTRIBUTE VALUE --}}
    <div class="card mb-4">
        <div class="card-header">Add Value</div>
        <div class="card-body">
            <form method="POST"
                  action="{{ route('attribute.values.store', $attribute->id) }}">
                @csrf

                <div class="row">
                    <div class="col-md-4">
                        <input type="text"
                               name="value"
                               class="form-control"
                               placeholder="S, M, Red">
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- LIST ATTRIBUTE VALUES --}}
    <div class="card">
        <div class="card-header">Attribute Values</div>
        <div class="card-body">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Value</th>
                        <th width="180">Action</th>
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

                                    <button class="btn btn-success btn-sm">
                                        Update
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form method="POST"
                                      action="{{ route('attribute.values.destroy', $value->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm"
                                            onclick="return confirm('Delete this value?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    @if($attribute->values->count() == 0)
                        <tr>
                            <td colspan="2" class="text-center text-muted">
                                No values added yet
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>

        </div>
    </div>

    <a href="{{ route('attribute.index') }}" class="btn btn-secondary mt-3">
        ← Back to Attributes
    </a>

</div>
@endsection
