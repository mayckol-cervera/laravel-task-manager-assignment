<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all(); // Fetch all tasks

        return view('tasks.index', compact('tasks'));
    }

    public function show($id)
    {
        $task = Task::findOrFail($id); // Fetch single task

        return view('tasks.show', compact('task'));
    }

    public function create()
    {
    return view('tasks.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:3|max:255|unique:tasks',
            'description' => 'nullable|max:500'
        ]);

   # \App\Models\Task::create($validated);

        Task::create([
            'title' => $validated['title'],
            'description' => $validated['description'] ?? null,
            'is_completed' => false
        ]);


    return redirect('/tasks')->with('success', 'Task created successfully!');
    }

    public function complete($id)
    {
        $task = Task::findOrFail($id);

         $task->is_completed = true;
        $task->save();

        return redirect('/tasks');
    }
}