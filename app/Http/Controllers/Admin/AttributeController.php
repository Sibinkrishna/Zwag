<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Attribute;
use Illuminate\Http\Request;
use App\Models\AttributeValue;
use GuzzleHttp\Promise\Create;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class AttributeController extends Controller
{
    public function index()
    {
         $subtitle="Attribute List";
        $metatitle="Attribute List";
        $attributes = Attribute::with('values')->get();
        return view('admin.attribute.index', compact('attributes','subtitle','metatitle'));
    }
    public function Create(){
        $subtitle="Create Attribute";
        $metatitle="Create Attribute";
       $attributes = Attribute::with('values')->latest()->get();
        return view('admin.attribute.create',compact('subtitle','metatitle','attributes'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'key' => 'required|unique:attributes,key'
        ]);

        Attribute::create([
            'key' => strtolower($request->key)
        ]);

        return back()->with('success', 'Attribute added');
    }

    public function storeValue(Request $request, Attribute $attribute)
    {
        $request->validate([
            'value' => 'required'
        ]);

        AttributeValue::create([
            'attribute_id' => $attribute->id,
            'value' => $request->value
        ]);

        return back()->with('success', 'Attribute value added');
    }
    public function edit($id)
    {
        $subtitle="Attribute List";
        $metatitle="Attribute List";
        $attribute = Attribute::with('values')->findOrFail($id);
        return view('admin.attribute.edit', compact('attribute','metatitle','subtitle'));
    }
    public function update(Request $request, $id)
    {
        $attribute = Attribute::findOrFail($id);

        $request->validate([
            'key' => 'required|string|unique:attributes,key,' . $attribute->id,
        ]);

        $attribute->update([
            'key' => strtolower($request->key),
        ]);

        return redirect()
            ->route('attribute.edit', $attribute->id)
            ->with('success', 'Attribute updated successfully');
    }

     public function updateValue(Request $request, $id)
    {
        $value = AttributeValue::findOrFail($id);

        $request->validate([
            'value' => 'required|string'
        ]);

        $value->update([
            'value' => $request->value
        ]);

        return redirect()->back()->with('success', 'Attribute value updated');
    }
    public function destroyValue($id)
    {
        $value = AttributeValue::findOrFail($id);
        $value->delete();

        return redirect()->back()->with('success', 'Attribute value deleted');
    }
}
