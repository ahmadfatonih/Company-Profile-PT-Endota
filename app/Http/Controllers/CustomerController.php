<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){
        $title = 'Customer Endota';
        $description = 'Berbagai customer yang sudah bekerja sama dengan PT Endota Sinar Indonesia';
        $keywords = 'customer endota sinar indonesia, customer, endota, indonesia, plastic extrude';
        $customers = Customer::where('status', 'active')->get();
        $contact = Contact::first();
        $categories = Category::where('status', 'active')->get();

        return view('pages.customer', compact(
            'title',
            'description',
            'keywords',
            'customers',
            'contact', 
            'categories'
        ));
    }
}
