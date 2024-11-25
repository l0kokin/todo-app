<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
	public function index()
	{
		$tasks = Task::latest()->paginate(8);

		return view('tasks.index', compact('tasks'));
	}

	public function show(Task $task)
	{
		if (!$task) {
			return redirect()->route('tasks.index')->with('error', 'Task not found.');
		}

		return view('tasks.show', ['task' => $task]);
	}

	public function create()
	{
		return view('tasks.create');
	}

	public function store(TaskRequest $request)
	{
		$validated = $request->validated();

		Task::create([
			'name'        => $validated['name'],
			'description' => $validated['description'],
			'due_date'    => $validated['due_date'],
			// change this later
			'user_id'     => null,
		]);

		return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
	}
}
