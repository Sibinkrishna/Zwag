
<div>

@foreach($variants as $i => $variant)

<div class="row border p-3 mb-3">

    {{-- ATTRIBUTES --}}
    @foreach($productAttributes as $k => $attribute)
    <div class="col-lg-6 mb-2">
        <label>{{ ucfirst($attribute->key) }}</label>

        <select class="form-control"
            wire:model="variants.{{ $i }}.product_associate.{{ $k }}">

            <option value="">Select</option>

            @foreach(json_decode($attribute->value) as $val)
                <option value="{{ $val }}">{{ $val }}</option>
            @endforeach

        </select>
    </div>
    @endforeach

    {{-- TAG NUMBER --}}
    <div class="col-lg-3">
        <label>Tag Number</label>
        <input type="number"
            class="form-control"
            wire:model="variants.{{ $i }}.tag_number">
    </div>

    {{-- TAGS --}}
    <div class="col-lg-3">
        <label>Tags</label>
        <select multiple
            class="form-control"
            wire:model="variants.{{ $i }}.tag">

            <option value="Fashion">Fashion</option>
            <option value="Electronics">Electronics</option>
            <option value="Watches">Watches</option>
            <option value="Headphones">Headphones</option>
        </select>
    </div>

    {{-- PRICE --}}
    <div class="col-lg-3">
        <label>Price</label>
        <input type="number"
            class="form-control"
            wire:model="variants.{{ $i }}.price">
    </div>

    {{-- STOCK --}}
    <div class="col-lg-3">
        <label>Quantity</label>
        <input type="number"
            class="form-control"
            wire:model="variants.{{ $i }}.stock">
    </div>

    {{-- TOTAL --}}
    <div class="col-lg-3">
        <label>Total Price</label>
        <input type="number"
            class="form-control"
            wire:model="variants.{{ $i }}.total_price">
    </div>

    {{-- DISCOUNT --}}
    <div class="col-lg-3">
        <label>Discount</label>
        <input type="number"
            class="form-control"
            wire:model="variants.{{ $i }}.discount">
    </div>

    {{-- SELLING --}}
    <div class="col-lg-3">
        <label>Selling Price</label>
        <input type="number"
            class="form-control"
            wire:model="variants.{{ $i }}.selling_price">
    </div>

    {{-- REMOVE --}}
    <div class="col-lg-12 mt-2 text-end">
        @if($i > 0)
            <button type="button"
                class="btn btn-danger"
                wire:click="removeVariant({{ $i }})">
                Remove
            </button>
        @endif
    </div>

</div>

@endforeach


<button type="button"
    class="btn btn-primary"
    wire:click="addVariant">
    ➕ Add Another Variant
</button>

</div>
