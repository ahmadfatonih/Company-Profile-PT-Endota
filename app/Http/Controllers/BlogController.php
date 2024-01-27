<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //  
    public function index()
    {
        $title = 'Article Endota';
        $description = 'Berbagai macam artikel dan blog dari PT Endota Sinar Indonesia';
        $keywords = 'blog endota sinar indonesia, blog, artikel, endota, indonesia, plastic extrude';
        $blogs = Blog::where('status', 'active')->get();
        $contact = Contact::first();
        $categories = Category::where('status', 'active')->get();

        return view('pages.article.article', compact(
            'title',
            'description',
            'keywords',
            'blogs',
            'contact', 
            'categories'
        ));
    }

    public function show($slug)
    {
        $article = Blog::where('slug', $slug)->first();
        $relateBlogs = Blog::where('status', 'active')->inRandomOrder()->limit(4)->get();
        $contact = Contact::first();
        $title = 'Blog | Endota';
        $description = $article->meta_description;
        $keywords = $article->meta_keyword;
        $categories = Category::where('status', 'active')->get();

        return view('pages.article.detail-article', compact(
            'article',
            'contact',
            'title',
            'description',
            'keywords',
            'relateBlogs', 
            'categories'
        ));
    }
}
