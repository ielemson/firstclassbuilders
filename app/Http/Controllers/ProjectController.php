<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Project;
use Illuminate\Support\Facades\File;
use App\Models\Projectgallery;
use Intervention\Image\Facades\Image as ResizeImage;

class ProjectController extends Controller
{

    public function index()
    {
        // return "projects";
        $projects = Project::all();
        return view("back.projects.index", compact("projects"));
    }

    public function create()
    {
        return view("back.projects.create");
    }

    public function store(Request $request)
    {

        $project = new Project;

        // $CoverImg = time().'.'.$request->cover_image->extension();  
        // $request->cover_image->move(public_path('assets/images/projects'), $CoverImg);

        $project->title = $request->title;
        $project->status = $request->status;
        // $project->cover_image = $CoverImg;
        $project->description = $request->description;
        $project->slug = Str::slug($request->input('title'));

        $project->save();
        foreach ($request->image as $value) {
            // $imageName = time().'_'.$value->getClientOriginalName();
            $imageName = time().'-'.Str::random(10).'.'.$value->extension();
            $value->move(public_path('assets/images/projects'),$imageName);
 
            $fileUpload = new Projectgallery;

            // $filename = time() . '.' . $file->extension();
            // $file->move(public_path('assets/images/projects'), $filename);

            $fileUpload->project_id = $project->id;
            $fileUpload->name = $imageName;

            $fileUpload->save();
        }
        return redirect()->back()->with('success','Gallery created successfully!');

      
    }

    public function edit(Request $request, $id)
    {
        $project = Project::where("id", $id)->first();
        return view("back.projects.edit", compact("project"));
    }


    public function update(Request $request,$id)
    {

        $project = Project::where("id",$id)->first();

        // $CoverImg = time().'.'.$request->cover_image->extension();  
        // $request->cover_image->move(public_path('assets/images/projects'), $CoverImg);

        $project->title = $request->title;
        $project->status = $request->status;
        // $project->cover_image = $CoverImg;
        // $project->description = $request->description;
        $project->slug = Str::slug($request->input('title'));

        $project->save();

        foreach ($request->image as $value) {
            // $imageName = time().'_'.$value->getClientOriginalName();
            $imageName = time().'-'.Str::random(10).'.'.$value->extension();
            $value->move(public_path('assets/images/projects'),$imageName);
 
            $fileUpload = new Projectgallery;

            // $filename = time() . '.' . $file->extension();
            // $file->move(public_path('assets/images/projects'), $filename);
            
            $fileUpload->project_id = $project->id;
            $fileUpload->name = $imageName;

            $fileUpload->save();
        }
        return redirect()->back()->with('success','Gallery created successfully!');

      
    }

    // public function update(Request $request, $id)
    // {

    //     $project = Project::where("id", $id)->first();

    //     try {
    //         if ($request->hasFile('img')) {
    //             $imageName = time() . '.' . $request->img->extension();
    //             $request->img->move(public_path('assets/images/projects'), $imageName);
    //             $file = $project->img;
    //             // File::delete($file);
    //             File::delete(public_path("assets/images/projects/$file"));

    //             $project->title = $request->title;
    //             $project->status = $request->status;
    //             $project->content = $request->content;
    //             $project->slug = Str::slug($request->input('title'));
    //             $project->img = $imageName;
    //         } else {

    //             $project->title = $request->title;
    //             $project->status = $request->status;
    //             $project->content = $request->content;
    //             $project->slug = Str::slug($request->input('title'));
    //             // $project->img = $imageName;
    //         }

    //         if ($project->save()) {
    //             return redirect()->back()->with('success', 'project updated!');
    //         }

    //         return redirect('project/create')->with('error', 'Failed to update project! Try again.');
    //     } catch (\Exception $e) {
    //         $bug = $e->getMessage();

    //         return redirect()->back()->with('error', $bug);
    //     }
    // }

    public function project_delete($id)
    {

        $project =   Project::where("id", $id)->first();
        $file = $project->img;
        // File::delete($file);
        File::delete(public_path("assets/images/projects/$file"));

        $project->delete();

        return redirect()->back()->with('success', 'project removed successfully');
    }
  
  public function projectView($id){
    $project_gallery = Projectgallery::where("project_id",$id)->paginate(20);
    return view("back.projects.gallery",compact("project_gallery"));
  }

  public function projectDelete($id){

    $gallery = Projectgallery::where("id",$id)->first();

    if (file_exists(public_path("assets/images/projects/$gallery->name"))){

        $gallery->delete();

        $filedeleted = unlink(public_path("assets/images/projects/$gallery->name"));

        if ($filedeleted) {

            return redirect()->back()->with('success', 'gallery removed successfully');
        }
     } else {

        return redirect()->back()->with('error', 'error deleting image');
     }
   
  }
}
