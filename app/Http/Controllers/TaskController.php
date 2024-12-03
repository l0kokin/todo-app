<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
	public function index()
	{
		$tasks = Task::where('user_id', Auth::user()->id)
			->latest()
			->paginate(8);

		return view('tasks.index', compact('tasks'));
	}

	public function dueTasks()
	{
		$tasks = Task::where('user_id', Auth::user()->id)
			->where('due_date', '<', now())
			->latest()
			->paginate(8);

		return view('tasks.due', compact('tasks'));
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

		$task->name = $validated['name'];
		$task->description = $validated['description'];
		$task->due_date = $validated['due_date'];
		$task->user_id = Auth::user()->id;
		$task->save();

		return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
	}

	public function edit(Task $task)
	{
		return view('tasks.edit', ['task' => $task]);
	}

	public function update(Task $task)
	{
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

	public function destroyOld()
	{
		Task::where('user_id', Auth::user()->id)
			->where('due_date', '<', now())
			->delete();

		$tasks = Task::where('user_id', Auth::user()->id)
			->latest()
			->paginate(8);

		return view('tasks.index', compact('tasks'));
	}
}
