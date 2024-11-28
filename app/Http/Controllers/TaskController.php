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

	public function store(TaskRequest $request, Task $task)
	{
		$validated = $request->validated();

		$task->setTranslation('name', 'en', $validated['name_en']);
		$task->setTranslation('name', 'ka', $validated['name_ka']);
		$task->setTranslation('description', 'en', $validated['description_en']);
		$task->setTranslation('description', 'ka', $validated['description_ka']);
		$task->due_date = $validated['due_date'];
		// change this later
		$task->user_id = null;
		$task->save();

		return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
	}

	public function edit(Task $task)
	{
		return view('tasks.edit', ['task' => $task]);
	}

	public function update(TaskRequest $request, Task $task)
	{
		$validated = $request->validated();

		$task->update([
			'name'        => request('name'),
			'description' => request('description'),
			'due_date'    => request('due_date'),
		]);

		return redirect()->route('tasks.index');
	}

	public function destroy(Task $task)
	{
		$task->delete();
		return redirect('/tasks');
	}
}
