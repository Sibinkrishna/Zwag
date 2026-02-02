<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Models\ProductImage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $subtitle = "Product List";
        $metatitle = "Product List";

        $products = Product::with('product_varient','product_images')->get();
        // dd($products);
        return view('admin.product.index', compact('subtitle', 'metatitle','products'));
    }

    public function create()
    {
        $subtitle = "Create Product";
        $metatitle = "Create Product";
        $categories = Category::all();
        $attributes = Attribute::all();
        // dd($categories);
        return view('admin.product.create', compact('subtitle', 'metatitle', 'categories', 'attributes'));
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'product_name' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'subcategory_id' => 'nullable|integer',
            'gender' => 'required|in:0,1',
            'price.*' => 'required|numeric|min:0',
            'stock.*' => 'required|integer|min:0',
            'image_url.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        try {

            DB::transaction(function () use ($request) {

                $product = Product::create([
                    'product_name' => $request->product_name,
                    'category_id' => $request->category_id,
                    'subcategory_id' => $request->subcategory_id,
                    'brand' => $request->brand,
                    'weight' => $request->weight,
                    'gender' => $request->gender,
                    'description' => $request->description,
                    'discount_type' => $request->discount_type,
                    'discount' => $request->product_discount,
                    'meta_title' => $request->meta_title,
                    'meta_keyword' => $request->meta_keyword,
                    'meta_description' => $request->meta_description,
                ]);

                if ($request->hasFile('image')) {
                    $folder = 'products/' . $product->id . '-' . Str::slug($product->product_name);
                    foreach ($request->file('image') as $image) {
                        $path = $image->store($folder, 'public');
                        ProductImage::create([
                            'product_id' => $product->id,
                            'image_url' => $path,
                        ]);
                    }
                }
                // dd($request->file('image'));

                foreach ($request->price as $i => $price) {

                    ProductVariant::create([
                        'product_id' => $product->id,
                        'tag_number' => $request->tag_number[$i] ?? null,
                        'price' => $price,
                        'stock' => $request->stock[$i],
                        'total_price' => $request->total_price[$i] ?? 0,
                        'discount' => $request->discount[$i] ?? 0,
                        'selling_price' => $request->selling_price[$i] ?? $price,
                        'tag' => $request->tag[$i] ?? [],
                        'product_associate' => $request->product_associate[$i] ?? [],
                    ]);
                }

            });

            return redirect()
                ->route('product.index')
                ->with('success', 'Product created successfully');

        } catch (\Exception $e) {

            return back()
                ->withInput()
                ->with('error', $e->getMessage());
        }
    }



    public function getSubCategories($category_id)
    {
        return response()->json(
            SubCategory::where('category_id', $category_id)->get()
        );
    }

    public function getAttributes($category_id)
    {
        return response()->json(
            Attribute::where('category_id', $category_id)->get()
        );
    }

    public function getCategoryDetails($category_id)
    {
        return response()->json([
            'sub_categories' => SubCategory::where('category_id', $category_id)->get(),
            'attributes'     => Attribute::get(),
        ]);
    }
}
