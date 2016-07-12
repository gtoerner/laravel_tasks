<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Task;
use App\User;
Use Illuminate\Http\Request;

Route::get('users', function () {
    $users = User::orderBy('created_at', 'asc')->get();

    return view('users', ['users' => $users]);
});

Route::get('tasks', function () {
    $tasks = Task::orderBy('created_at', 'asc')->get();

    return view('tasks', [
        'tasks' => $tasks
    ]);
});

Route::post('tasks/task', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);

    if ($validator->fails()) {
        return redirect('tasks')
            ->withInput()
            ->withErrors($validator);
    }

    $task = new Task;
    $task->name = $request->name;
    $task->save();

    return redirect('tasks');
});

Route::delete('tasks/task/{task}', function (Task $task) {
    $task->delete();

    return redirect('tasks');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::auth();

Route::get('/home', 'HomeController@index');
