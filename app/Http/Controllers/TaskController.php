<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
	public function index()
	{
		$tasks = Task::paginate(8);

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

		// dd($validated);

		Task::create([
			// 'name'        => [
			// 	'en' => $validated['name.en'],
			// 	'ka' => $validated['name.ka'],
			// ],
			// 'description' => [
			// 	'en' => $validated['description.en'],
			// 	'ka' => $validated['description.ka'],
			// ],
			// 'due_date'    => $validated['due_date'],

			'name'        => $validated['name'],
			'description' => $validated['description'],
			'due_date'    => $validated['due_date'],
			'user_id'     => null,
		]);

		return redirect('/tasks')->with('success', 'Task created successfully!');
	}
}
