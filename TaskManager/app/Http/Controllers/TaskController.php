<?php

namespace App\Http\Controllers;

use App\Models\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index()
    {
        $task = Task::all();
        return view('task.index', compact('task'));
    }


    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'title' => 'required|string|max:255'
        ]);

        // Create the task using mass assignment
        Task::create([
            'title' => $request->title
        ]);

        return redirect()->back();
    }

    public function complete($id)
    {
        $task = Task::find($id);
        $task->completed = true;
        $task->save();
        return redirect()->back();
    }
    public function toggleTask($id)
    {
        $task = Task::find($id);
        if ($task) {
            $task->completed = !$task->completed; 
            $task::save();
        }
        return redirect()->route('tasks.index');
    }


    public function delete($id)
    {
        $task = Task::find($id);
        $task::destroy($id);
        return redirect()->back();
    }
}
