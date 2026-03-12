<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // 1. For Home Page (Main.blade.php) - Show first 6 products
    public function home()
    {
        $products = Product::take(6)->get(); 
        return view('main', compact('products'));
    }

    // 2. For Products Page (product.blade.php) - Show all products
    public function index()
    {
        $products = Product::all();
        return view('product', compact('products'));
    }

    // 3. For Single Detail Page (single.blade.php) - Show 1 product + variants
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->with(['variants', 'benefits'])->firstOrFail();
        
        // Group variants by 'group_name' so we can show headers like "Running Salt" vs "Crystal Salt"
        $groupedVariants = $product->variants->groupBy('group_name');

        return view('single', compact('product', 'groupedVariants'));
    }

    // 4. AJAX Search Functionality
    public function search(Request $request)
    {
        $query = $request->input('query');

        if (!$query) {
            return response()->json([]);
        }

        // Search in Main Products
        $products = Product::where('name', 'LIKE', "%{$query}%")
                            ->get();

        // Search in Variants (Sub-products)
        $variants = \App\Models\ProductVariant::where('variant_name', 'LIKE', "%{$query}%")
                            ->orWhere('group_name', 'LIKE', "%{$query}%")
                            ->with('product') // Get parent product for slug/image
                            ->get();

        $results = [];

        // Format Product Results
        foreach ($products as $product) {
            $results[] = [
                'name'  => $product->name,
                'image' => asset($product->image),
                'url'   => route('product.show', $product->slug),
                'type'  => 'Product'
            ];
        }

        // Format Variant Results
        foreach ($variants as $variant) {
            if ($variant->product) {
                // Avoid duplicates if you want, but showing variants is specific
                $results[] = [
                    'name'  => $variant->variant_name . ' (' . ($variant->group_name ?? 'Variant') . ')',
                    'image' => asset($variant->image ?? $variant->product->image),
                    'url'   => route('product.show', $variant->product->slug),
                    'type'  => 'Variant'
                ];
            }
        }

        return response()->json($results);
    }
}