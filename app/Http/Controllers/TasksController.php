<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Session;

class TasksController extends Controller
{
    
    public function create()
    {
    return view('tasks.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());

        $this->validate($request, [
        'Name' => 'required',
        'Category' => 'required',
        'Latitude' => 'required',
        'Longitude' => 'required'
        ]);

        $input = $request->all();

        Task::create($input);

        Session::flash('flash_message', 'Successfully added!');

        return redirect()->back();
    }

    public function index()
    {
        $tasks = Task::all();

        return view('tasks.index')->withTasks($tasks);
    }

    public function show($id)
    {
      $task = Task::findOrFail($id);

      return view('tasks.show')->withTask($task);
    }

    public function edit($id)
    {
      $task = Task::findOrFail($id);

      return view('tasks.edit')->withTask($task);
    }

    public function update($id, Request $request)
    {
        $task = Task::findOrFail($id);

        $this->validate($request, [
          'Name' => 'required',
          'Category' => 'required',
          'Latitude' => 'required',
          'Longitude' => 'required'
        ]);

        $input = $request->all();

        $task->fill($input)->save();

        Session::flash('flash_message', 'Successfully updated!');

        return redirect()->back();
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);

        $task->delete();

        Session::flash('flash_message', 'Successfully deleted!');

        return redirect()->route('tasks.index');
    }
}
