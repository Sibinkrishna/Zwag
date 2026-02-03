<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Category;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AttributeController extends Controller
{
    public function index(){
        $subtitle="Attribute List";
        $metatitle="Attribute List";
        $attributes=Attribute::paginate(10);
        return view('admin.attribute.index',compact('subtitle','metatitle','attributes'));
    }

    public function Create(){
        $subtitle="Create Attribute";
        $metatitle="Create Attribute";
        $categories=Category::all();
        return view('admin.attribute.create',compact('subtitle','metatitle','categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'attribute_key'    => 'required|unique:attributes,key',
            'attribute_value'  => 'required|array',
        ]);

        Attribute::create([
            'category_id'   => $request->category_id,
            'key'           => $request->attribute_key,
            'value'         => json_encode($request->attribute_value),
        ]);

        return redirect()
            ->route('attribute.index')
            ->with('success', 'Attribute created successfully');
    }

    public function edit($id)
    {
        $subtitle = "Edit Attribute";
        $metatitle = "Edit Attribute";
        $categories=Category::all();
        $attribute=Attribute::find($id);
        return view('admin.attribute.edit', compact('subtitle', 'metatitle', 'categories','attribute'));
    }

    public function update(Request $request, attribute $attribute)
    {

         $request->validate([
            'category_id'      => 'required',
            'attribute_key'    => ['required', Rule::unique('attributes', 'key')->ignore($attribute->id),],
            'attribute_value'  => 'required|array',
        ]);

        $attribute->update([
            'category_id'   => $request->category_id,
            'key'           => $request->attribute_key,
            'value'         => json_encode($request->attribute_value),
        ]);

        return redirect()
            ->route('attribute.index')
            ->with('success', 'Attribute created successfully');

    }
}
