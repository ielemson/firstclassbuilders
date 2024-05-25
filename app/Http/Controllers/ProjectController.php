<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Project;
use Illuminate\Support\Facades\File;
use App\Models\Projectgallery;

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
        // dd($request->all());

        try {
            $project = new Project;
            $project->title = $request->title;
            $project->status = $request->status;
            $project->description = $request->description;
            $project->slug = Str::slug($request->input('title'));
            $project->save();

            // if ($project->save()) {
                foreach ($request->file('images') as $file) {
                    
                    $fileUpload = new Projectgallery;

                    $filename = time() . '.' . $file->extension();
                    $file->move(public_path('assets/images/projects'), $filename);
                    $fileUpload->project_id = $project->id;
                    $fileUpload->name = $filename;

                    $fileUpload->save();
                }

                return redirect()->back()->with('success', 'New project created!');
            // }

            // return redirect()->route('project.create')->with('success', 'Project created successfully');
        } catch (\Exception $e) {
            $bug = $e->getMessage();

            return redirect()->back()->with('error', $bug);
        }
    }

    public function edit(Request $request, $id)
    {
        $project = Project::where("id", $id)->first();
        return view("back.projects.edit", compact("project"));
    }


    public function update(Request $request, $id)
    {

        $project = Project::where("id", $id)->first();

        try {
            if ($request->hasFile('img')) {
                $imageName = time() . '.' . $request->img->extension();
                $request->img->move(public_path('assets/images/projects'), $imageName);
                $file = $project->img;
                // File::delete($file);
                File::delete(public_path("assets/images/projects/$file"));

                $project->title = $request->title;
                $project->status = $request->status;
                $project->content = $request->content;
                $project->slug = Str::slug($request->input('title'));
                $project->img = $imageName;
            } else {

                $project->title = $request->title;
                $project->status = $request->status;
                $project->content = $request->content;
                $project->slug = Str::slug($request->input('title'));
                // $project->img = $imageName;
            }

            if ($project->save()) {
                return redirect()->back()->with('success', 'project updated!');
            }

            return redirect('project/create')->with('error', 'Failed to update project! Try again.');
        } catch (\Exception $e) {
            $bug = $e->getMessage();

            return redirect()->back()->with('error', $bug);
        }
    }

    public function project_delete($id)
    {

        $project =   Project::where("id", $id)->first();
        $file = $project->img;
        // File::delete($file);
        File::delete(public_path("assets/images/projects/$file"));

        $project->delete();

        return redirect()->back()->with('success', 'project removed successfully');
    }
}
