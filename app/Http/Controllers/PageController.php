<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Service;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $posts = Post::where('featured', false)
            ->with('user', 'categories')
            ->get();
        $categories = Category::all();
        $services = Service::where('status',1)->get();
        $featured = Post::featured()->take(3)->get();
        // dd($featured);
        return view('front.main', [
            'posts' => $posts,
            'featured' => $featured,
            'services' => $services,
            // 'servicesPage' => $servicesPage,
            'categories' => $categories
        ]);
    }

    public function posts()
    {
        return view('posts.index');
    }

    public function showPost($slug)
    {
        $post = Post::where("slug",$slug)->first();
        // dd($post);
        $posts = Post::inRandomOrder()->limit(10)->get();
        // $categories = Category::all();
        return view('front.post', compact('post','posts'));
    }

    public function showCategory(Category $category)
    {
        $posts = $category->posts()->get();
        $categories = Category::all();
        return view('front.categories.show', compact('category', 'posts', 'categories'));
    }

    public function aboutUs()
    {
        return view("front.about");
    }

    public function contactUs()
    {
        return view("front.contact");
    }

    public function service($slug){
        $service = Service::where("slug",$slug)->first();
        return view("front.service",compact("service"));
    }
}
