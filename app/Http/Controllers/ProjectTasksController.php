<?php

namespace App\Http\Controllers;
use App\Task;
use App\Project;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{

    public function store(Project $project)
    {
        //validation----------
        $attributes = request()->validate(['description'=>'required']);
       // Task::create(['project_id'=>$project->id,
       //  'description'=> request('description')]);

        //or------
        $project->addTask($attributes);
         return back();
    }
    public function update(Task $task)
    {
       $task->update(['completed' => request()->has('completed')
       ]);
       return back();
    }
}
