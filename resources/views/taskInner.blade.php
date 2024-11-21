<x-layout>
    <h1>hello this is task {{ $task->id }}</h1>
    <h1>{{ $task->task_name }}</h1>
    <p>{{ $task->description }}</p>
    <p>Created at: {{ \Carbon\Carbon::parse($task->created_at)->format('d/m/Y') }}</p>
    <p>Due date: {{ \Carbon\Carbon::parse($task->due_date)->format('d/m/Y') }}</p>
</x-layout>
