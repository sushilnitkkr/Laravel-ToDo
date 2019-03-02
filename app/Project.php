<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // protected $fillable = [
    //     'title','description'
    // ];
    /// or---
    protected $guarded = [];     // Mass assignment

//for relation ship
     public function tasks()
     {
        return $this->hasMany(Task::class);
     }
     public function addTask($tasks)
     {
        // return Task::create(['project_id'=> $this->id,
        //     'description'=> $description]);
        // or------------
        return $this->tasks()->create($tasks);

     }
}
