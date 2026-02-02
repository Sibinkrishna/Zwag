<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function index()
    {
        $subtitle = "Categories List";
        $metatitle = "Categories List";
        $categories = Category::all();
        return view('admin.category.index', compact('subtitle', 'metatitle', 'categories'));
    }

    public function create()
    {
        $subtitle = "Create Category";
        $metatitle = "Create Category";
        return view('admin.category.create', compact('subtitle', 'metatitle'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name'      => 'required|string|max:255|unique:categories,category_name',
            'category_status'    => 'required|in:0,1',
        ]);

        Category::create([
            'category_name' => $request->category_name,
            'category_status'        => $request->category_status,
            'created_by'    => Auth::id(),
        ]);

        return redirect()
            ->route('category.index')
            ->with('success', 'Category created successfully');
    }

    public function edit($id)
    {
        $subtitle = "Edit Category";
        $metatitle = "Edit Category";
        $category = Category::find($id);
        return view('admin.category.edit', compact('subtitle', 'metatitle', 'category'));
    }

    public function update(Request $request, Category $category)
    {

        $request->validate([
            'category_name'   => [
                'required',
                'string',
                'max:255',
                Rule::unique('categories', 'category_name')->ignore($category->id),
            ],
            'category_status' => 'required|in:0,1',
        ]);

        $category->update([
            'category_name'   => $request->category_name,
            'category_status' => $request->category_status,
            // do NOT update created_by
        ]);

        return redirect()
            ->route('category.index')
            ->with('success', 'Category updated successfully');
    }
}
