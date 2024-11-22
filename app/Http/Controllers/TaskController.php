<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
	public function index()
	{
		$tasks = Task::paginate(8);

		return view('index', compact('tasks'));
	}

	public function show(Task $task)
	{
		if (!$task) {
			return redirect()->route('tasks.index')->with('error', 'Task not found.');
		}

		return view('taskInner', ['task' => $task]);
	}

	public function create()
	{
		return view('tasksCreate');
	}

	public function store(Request $request)
	{
		$validated = $request->validate([
			'nameEnglish'         => 'required|string|max:255',
			'nameGeorgian'        => 'required|string|max:255',
			'descriptionEnglish'  => 'required|string',
			'descriptionGeorgian' => 'required|string',
			'dueDate'             => 'required|date',
		]);

		Task::create([
			'name_english'         => $validated['nameEnglish'],
			'name_georgian'        => $validated['nameGeorgian'],
			'description_english'  => $validated['descriptionEnglish'],
			'description_georgian' => $validated['descriptionGeorgian'],
			'due_date'             => $validated['dueDate'],
		]);

		return redirect('/tasks');
	}
}
