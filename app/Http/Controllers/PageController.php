<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use App\Models\Category;
use App\Models\Post;
use App\Models\Project;
use App\Models\Projectgallery;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        $projects = Project::where('status',1)->get();
        // $galleries = ProjectGallery::paginate(10);
        // dd($projects);
        return view('front.main', [
            'posts' => $posts,
            'featured' => $featured,
            'services' => $services,
            'projects' => $projects,
            'categories' => $categories,
            // 'galleries' => $galleries
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

    public function contactUsForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'captcha' => 'required|captcha'
        ]);
        
        // $user =  User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'password' => $request->password,
        // ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'message' => $request->message
        ];

        // ContactUs::create($details);
        // return back()->with('success','Great! We have received your message');
         // $userEmail = $request->email;
         Mail::to("obinnalevi43@gmail.com")->send(new ContactMessage($details));
 
         if (Mail::failures()) {
             //  return response()->Fail('Sorry! Please try again latter');
             return back()->with('error','Sorry! Please try again latter');
         }else{
             //  return response()->success('Great! Successfully send in your mail');
             return back()->with('success','Great! We have received your message');
            }
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }

    public function project($slug){
        $project = Project::where("slug",$slug)->first();
        return view("front.project",compact("project"));
    }

    public function gallery(){
        $galleries = Projectgallery::all();
        $projects = Project::where('status',1)->get();
        return view("front.gallery",compact("galleries","projects"));
    }
}
