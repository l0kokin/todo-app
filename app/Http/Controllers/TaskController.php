<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TaskController extends Controller
{
	public function index()
	{
		$tasks = Task::paginate(8);

		return view('index', compact('tasks'));
	}

	public function show(Task $task)
	{
		// dd($task);

		if (!$task) {
			return redirect()->route('tasks.index')->with('error', 'Task not found.');
		}

		return view('taskInner', ['task' => $task]);
	}
}
