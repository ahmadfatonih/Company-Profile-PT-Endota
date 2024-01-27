<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Product;
use App\Models\ProductGallery;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $title = 'All Product Endota';
        $description = 'Semua kategori product plastic extrude dari PT Endota Sinar Indonesia';
        $keywords = 'product endota sinar indonesia, semua product, all product, endota, indonesia, plastic extrude';
        $products = Product::where('status', 'active')->get();
        $contact = Contact::first();
        $categories = Category::where('status', 'active')->get();

        return view('pages.product.all-products', compact(
            'title',
            'description',
            'keywords',
            'products',
            'contact', 
            'categories'
        ));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $productGalleries = ProductGallery::where('product_id', $product->id)->where('status', 'active')->get();
        $contact = Contact::first();
        $title = $product->name . " | Toguma";
        $description = $product->meta_description;
        $keywords = $product->meta_keyword;
        $categories = Category::where('status', 'active')->get();
        $relateProductCategory = Category::where('id', $product->category_id)->firstOrFail();;
        $relateProduct = Product::with('productGallery')->where('category_id', $relateProductCategory->id)->inRandomOrder()->limit(4)->get();

        return view('pages.product.detail-product', compact(
            'product',
            'title',
            'description',
            'keywords',
            'contact',
            'productGalleries',
            'categories', 
            'relateProductCategory', 
            'relateProduct'
        ));
    }

    public function categoryProduct($slug)
    {
        $categoriesWithSlug = Category::where('slug', $slug)->firstOrFail();
        $products = Product::with('productGallery')
            ->where('category_id', $categoriesWithSlug->id)
            ->where('status', 'active')->get();
        $title = $categoriesWithSlug->name . " | Toguma";
        $description = 'Berbagai Macam Produk Plastik Extrude PT Endota Sinar Indonesia';
        $keywords = 'Plastik Extrude, plastic Extrude lainnya';
        $contact = Contact::first();
        $categories = Category::where('status', 'active')->get();

        return view('pages.product.products', compact(
            'categoriesWithSlug',
            'products',
            'title',
            'description',
            'keywords',
            'contact',
            'categories'
        ));
    }
}
