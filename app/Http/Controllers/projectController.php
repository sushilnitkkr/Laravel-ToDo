<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
class projectController extends Controller
{
    public function index()
    {
     // $projects = Project::all(); //to fetch data from database

      $projects = Project::where('owner_id',auth()->id())->get();
    return view('projects.index',compact("projects")); // to send data view model
    }

    public function create()
    {
     return view('projects.create');
    }
    public function show(Project $project)
    {
      // $project = Project::findOrFail($id);
        return view('projects.show',compact('project'));
    }
     public function edit(Project $project){
      //return $id;
     // $project = Project::findOrFail($id);
     	return view('projects.edit',compact('project'));
    }
     public function update(Project $project){
          //dd('hello');
       //$project = Project::findOrFail($id);
      //-------------------
       // $project->title = request('title');
       // $project->description = request('description');
       // $project->save();
      // or -------------
      $project->update(request(['title','description']));
       return redirect('/projects');
    }

    public function store()
    {
       // $project = new Project();
       // $project->title = request('title');   // request data from the form
       // $project->description = request('description');
       // $project->save();
      // -------Or -------
      // Project::create([
      //  'title'=> request('title'),'description' => request('description')

      // ]);
      // -----------------------validation of field server side-----------------------
      request()->validate([
        'title'=>['required','min:3','max:255'],
        'description'=>'required'
      ]);
      Project::create(request(['title','description']));
       return redirect('/projects');

    }
    public function destroy(Project $project)
    {
    // dd('hello');
      $project->delete();
      return redirect('/projects');
    }
}
