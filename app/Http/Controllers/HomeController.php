<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Customer;
use App\Models\Faq;
use App\Models\Product;
use App\Models\ProductGallery;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Endota Sinar Indonesia';
        $description = 'Beberapa customer yang sudah menjalin hubungan dengan PT Endota Sinar Indonesia';
        $keywords = 'pt endota sinar indonesia, endota, plastic extruction';
        $contact = Contact::first();
        $blogs = Blog::where('status', 'active')->inRandomOrder()->limit(4)->get();
        $about = About::first();
        $products = Product::where('status', 'active')->inRandomOrder()->limit(8)->get();
        $categories = Category::where('status', 'active')->get();
        $product = Product::where('status', 'active')->first();
        $productGallery = ProductGallery::where('product_id', $product->id)->where('status', 'active')->get();
        $customer = Customer::where('status', 'active')->inRandomOrder()->limit(4)->get();
        $faq = Faq::where('status', 'active')->get();

        return view('dashboard', compact(
            'title',
            'description',
            'keywords',
            'contact',
            'blogs',
            'about',
            'categories',
            'products',
            'productGallery',
            'customer',
            'faq'
        ));
    }

    public function indexContact(){
        $title = 'Contact Endota';
        $description = 'Contact kami untuk kebutuhan plastic extrude yang anda butuhkan kepada kami PT Endota Sinar Indonesia';
        $keywords = 'contact, our contact, hubungi kami, pt endota sinar indonesia, endota, plastic extruction';
        $contact = Contact::first();
        $categories = Category::where('status', 'active')->get();

        return view('pages.contact', compact(
            'title',
            'description',
            'keywords',
            'contact',
            'categories',
        ));
    }

    public function history(){
        $title = 'History Endota';
        $description = 'kami mempunyai sejarah dari awal terbentuknya PT Endota Sinar Indonesia';
        $keywords = 'history, our history, sejarah, pt endota sinar indonesia, endota, plastic extruction';
        $contact = Contact::first();
        $about = About::first();
        $categories = Category::where('status', 'active')->get();

        return view('pages.about.history', compact(
            'title',
            'description',
            'keywords',
            'contact',
            'about',
            'categories',
        ));
    }

    public function visimisi(){
        $title = 'Visi Misi Endota';
        $description = 'kami mempunyai visi misi yang tetap kami pegang di PT Endota Sinar Indonesia';
        $keywords = 'visi dan misi, visi, misi, pt endota sinar indonesia, endota, plastic extruction';
        $contact = Contact::first();
        $categories = Category::where('status', 'active')->get();

        return view('pages.about.vision-mission', compact(
            'title',
            'description',
            'keywords',
            'contact',
            'categories',
        ));
    }

    public function organisasi(){
        $title = 'Struktur Organisasi Endota';
        $description = 'kami mempunyai struktur organisasi dalam manajemen PT Endota Sinar Indonesia';
        $keywords = 'struktur organisasi, pt endota sinar indonesia, endota, plastic extruction';
        $contact = Contact::first();
        $categories = Category::where('status', 'active')->get();

        return view('pages.about.organization', compact(
            'title',
            'description',
            'keywords',
            'contact',
            'categories',
        ));
    }
}
