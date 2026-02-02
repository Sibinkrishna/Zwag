<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Auth;

class SubCategoryController extends Controller
{
    public function index()
    {
        $subtitle = "Sub Categories List";
        $metatitle = "Sub Categories List";
        $subcategories=SubCategory::with('category')->get();;
        return view('admin.subcategory.index', compact('subtitle', 'metatitle','subcategories'));
    }

    public function create()
    {
        $subtitle = "Create Sub Category";
        $metatitle = "Create Sub Category";
        $categories=Category::all();
        return view('admin.subcategory.create', compact('subtitle', 'metatitle','categories'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'sub_category_name' => 'required|unique:sub_categories,sub_category',
            'category_id' => 'required',
            'category_status' => 'required'
        ]);

        SubCategory::create([
            'sub_category' => $request->sub_category_name,
            'category_id' => $request->category_id,
            'created_by' => Auth::id(),
            'category_status' => $request->category_status
        ]);
        return redirect()
            ->route('subcategory.index')
            ->with('success', 'Sub Category Saved Successfully');
    }

    public function edit($id)
    {
        $subtitle = "Edit Sub Category";
        $metatitle = "Edit Sub Category";
        $subCategory = SubCategory::findOrFail($id);
        $categories=Category::all();
        return view('admin.subcategory.edit', compact('subCategory','categories','subtitle','metatitle'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'sub_category_name' => 'required|unique:sub_categories,sub_category,' . $id,
            'category_id' => 'required',
            'category_status' => 'required'
        ]);

        SubCategory::findOrFail($id)->update([
            'sub_category' => $request->sub_category_name,
            'created_by' => Auth::id(),
            'category_id' => $request->category_id,
            'category_status' => $request->category_status
        ]);

        return redirect()
            ->route('subcategory.index')
            ->with('success', 'Sub Category Updated Successfully');
    }
    public function destroy($id)
    {
        SubCategory::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Sub Category Deleted Successfully');
    }
}
