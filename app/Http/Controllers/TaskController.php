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
}
