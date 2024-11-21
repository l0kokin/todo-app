<x-layout>
    <div>
        <h1 class="text-3xl font-bold mb-16 uppercase">{{ $task->task_name }}</h1>
    </div>
    <p>{{ $task->description }}</p>
    <p>Created at: {{ \Carbon\Carbon::parse($task->created_at)->format('d/m/Y') }}</p>
    <p>Due date: {{ \Carbon\Carbon::parse($task->due_date)->format('d/m/Y') }}</p>
</x-layout>
