<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
GET /projects (index)
GET /projects/create (create)
GET /projects/1 (show)
POST /projects (store)
GET /projects/1/edit (edit)
PATCH /projects/1 (update)



*/
Route::resource('projects','projectController');
Route::post('/projects/{project}/tasks','ProjectTasksController@store');
Route::patch('/tasks/{task}','ProjectTasksController@update');
//Or -------
// Route::get('/projects','projectController@index');
// Route::post('/projects','projectController@store');// from input data of form
// Route::get('/projects/create','projectController@create');
// Route::get('/projects/{project}','projectController@show');
// Route::get('/projects/{project}/edit','projectController@edit');
// Route::patch('/projects/{project}','projectController@update');
// Route::delete('/projects/{project}','projectController@destroy');
