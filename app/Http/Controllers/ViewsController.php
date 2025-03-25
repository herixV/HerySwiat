<?php

namespace App\Http\Controllers;

// use App\Models\BranchContacts;
// use App\Models\Branches;

use App\Models\AboutUs;
use App\Models\Category;
use App\Models\Company;
use App\Models\SocialNetworks;
use App\Models\Dress;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Post;
use App\Models\Review;
use App\Models\Services;
use App\Models\Tag;
use Illuminate\Http\Request;
use PharIo\Manifest\Author;

class ViewsController extends Controller
{

    public function home() {
        $company = Company::where('id', 1)->first();
        $socialNetworks = SocialNetworks::where('company_id', $company->id)->get();
        $services = Services::orderBy('id','desc')->get();
        $dresses = Dress::orderBy('id','desc')->paginate(6);
        $galleries = Gallery::with('category')->orderBy('id','desc')->get();
        $aboutUs = AboutUs::orderBy('id', 'asc')->get();
        $about = AboutUs::orderBy('id', 'asc')->first();
        $posts = Post::latest()->take(5)->get(); // Obtiene los últimos 4 posts
        
        return view(
            'home', 
            [
                'company' => $company,
                'socialNetworks' => $socialNetworks,
                'services' => $services,
                'dresses' => $dresses,
                'galleries' => $galleries,
                'aboutUs' => $aboutUs,
                'about' => $about,
                'posts' => $posts
            ]
        );
    }

    public function about() {
        $company = Company::where('id', 1)->first();
        $socialNetworks = socialNetworks::where('company_id', $company->id)->get();
        $aboutUs = AboutUs::orderBy('id', 'asc')->get();

        return view(
            'about',
            [
                'company' => $company,
                'socialNetworks' => $socialNetworks,
                'aboutUs' => $aboutUs,
            ]
        );
    }
    
    public function gallery() {
        $company = Company::where('id', 1)->first();
        $socialNetworks = socialNetworks::where('company_id', $company->id)->get();
        $categories = Category::all();
        $galleries = Gallery::with('category')->orderBy('id','desc')->get();

        return view(
            'gallery',
            [
                'company' => $company,
                'socialNetworks' => $socialNetworks,
                'categories' => $categories,
                'galleries' => $galleries,
            ]
        );
    }

    public function services() {
        $company = Company::where('id', 1)->first();
        $socialNetworks = socialNetworks::where('company_id', $company->id)->get();
        $services = Services::orderBy('id','desc')->get();

        return view(
            'services',
            [
                'company' => $company,
                'socialNetworks' => $socialNetworks,
                'services' => $services,
            ]
        );
    }

    public function serviceDetails($id) {
        $service = Services::find($id);
        $services = Services::orderBy('id','desc')->get();
        $company = Company::where('id', 1)->first();
        $socialNetworks = socialNetworks::where('company_id', $company->id)->get();
        $posts = Post::latest()->take(3)->get();
        // dd($company);
        return view(
            'service-details',
            [
                'company' => $company,
                'socialNetworks' => $socialNetworks,
                'service' => $service,
                'services' => $services,
                'posts' => $posts
            ]
        );
    }

    public function contact() {
        $company = Company::where('id', 1)->first();
        $socialNetworks = socialNetworks::where('company_id', $company->id)->get();

        return view(
            'contact',
            [
                'company' => $company,
                'socialNetworks' => $socialNetworks,
            ]
        );
    }

    public function blog() {
        $company = Company::where('id', 1)->first();
        $socialNetworks = socialNetworks::where('company_id', $company->id)->get();
        $posts = Post::orderBy('id', 'desc')->paginate();

        return view(
            'blog',
            [
                'company' => $company,
                'socialNetworks' => $socialNetworks,
                'posts' => $posts,
            ]
        );
    }

    public function blogSingle($id) {
        $company = Company::where('id', 1)->first();
        $socialNetworks = socialNetworks::where('company_id', $company->id)->get();
        $post = Post::find($id);
        $posts = Post::latest()->take(3)->get();
        $tags = Tag::all();
        $categories = Category::all();
        // $author = Author::all();

        return view(
            'blog-single',
            [
                'company' => $company,
                'socialNetworks' => $socialNetworks,
                'post' => $post,
                'posts' => $posts,
                'tags' => $tags,
                'categories' => $categories,
            ]
        );
    }

    public function sitemap() {
        $company = Company::where('id', 1)->first();
        $socialNetworks = socialNetworks::where('company_id', $company->id)->get();

        return view(
            'sitemap',
            [
                'company' => $company,
                'socialNetworks' => $socialNetworks,
            ]
        );
    }

    public function reviews() {
        $company = Company::where('id', 1)->first();
        $socialNetworks = socialNetworks::where('company_id', $company->id)->get();
        $reviews = Review::orderBy('id','desc')->get();

        return view(
            'reviews',
            [
                'company' => $company,
                'socialNetworks' => $socialNetworks,
                'reviews' => $reviews,
            ]
        );
    }

    public function faqs() {
        $company = Company::where('id', 1)->first();
        $socialNetworks = socialNetworks::where('company_id', $company->id)->get();
        $faqs = Faq::all();
        
        return view(
            'faqs',
            [
                'company' => $company,
                'socialNetworks' => $socialNetworks,
                'faqs' => $faqs,
            ]
        );
    }

    public function models() {
        $company = Company::where('id', 1)->first();
        $socialNetworks = socialNetworks::where('company_id', $company->id)->get();
        $dresses = Dress::orderBy('id','desc')->paginate(6);
        
        
        return view(
            'models',
            [
                'company' => $company,
                'socialNetworks' => $socialNetworks,
                'dresses' => $dresses,
            ]
        );
    }

     public function login() {
        $company = Company::where('id', 1)->first();
        $socialNetworks = socialNetworks::where('company_id', $company->id)->get();
        
        return view(
            'login', 
            [
                'company' => $company,
                'socialNetworks' => $socialNetworks,
            ]
        );
    }
    public function register() {
        $company = Company::where('id', 1)->first();
        $socialNetworks = socialNetworks::where('company_id', $company->id)->get();
        
        
        return view(
            'register',
            [
                'company' => $company,
                'socialNetworks' => $socialNetworks,
            ]
        );
    }
}
