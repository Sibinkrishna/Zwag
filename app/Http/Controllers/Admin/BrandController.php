<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\Auth;

class BrandController extends Controller
{
    public function index()
    {
        $subtitle = "Brand List";
        $metatitle = "Brand List";
        $brands = Brand::paginate(10);
        return view('admin.brand.index', compact('subtitle', 'metatitle','brands'));
    }
    public function create()
    {
        $subtitle = "Create Brand";
        $metatitle = "Create Brand";
        return view('admin.brand.create', compact('subtitle', 'metatitle'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'logo_url' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required|boolean',
        ]);

        $brand = Brand::create([
            'name' => $request->name,
            'description' => $request->description,
            // 'logo_url' => $request->logo_url, // Handle file upload as needed
            'status' => $request->status ?? 1,
            'created_by' => Auth::user()->id,
        ]);
        if($request->hasFile('logo_url')) {
            $file = $request->file('logo_url');
            $filename = time().'_'.$file->getClientOriginalName();
            $filePath = $file->storeAs('brands', $filename, 'public');
            $brand->logo_url = '/storage/' . $filePath;
            $brand->save();
        }

        return redirect()->route('brand.index')->with('success', 'Brand created successfully.');
    }
    public function edit($id)
    {
        $subtitle = "Edit Brand";
        $metatitle = "Edit Brand";
        $brand = Brand::findOrFail($id);
        // dd($brand);
        return view('admin.brand.edit', compact('subtitle', 'metatitle', 'brand'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'logo_url' => 'nullable|image|mimes:jpeg,png,jpg|max:100',
            'status' => 'required|boolean',
        ]);
        // dd($request->all());
        $brand = Brand::findOrFail($id);
        $brand->name = $request->name;
        $brand->description = $request->description;
        $brand->status = $request->status ?? 1;
        if($request->hasFile('logo_url')) {
            $file = $request->file('logo_url');
            $filename = time().'_'.$file->getClientOriginalName();
            $filePath = $file->storeAs('brands', $filename, 'public');
            $brand->logo_url = '/storage/' . $filePath;
        }
        $brand->save();
        return redirect()->route('brand.index')->with('success', 'Brand updated successfully.');
    }
    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();
        return redirect()->route('brand.index')->with('success', 'Brand deleted successfully.');
    }
}
