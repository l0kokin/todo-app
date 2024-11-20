<x-layout>
    <x-header />
	
    <div  class="w-full">
        <table class="w-full table-fixed">
            <thead>
                <tr class="bg-gray-100">
                    <th class="w-1/4 py-4 px-6 text-left text-gray-400 font-semibold">Task Name</th>
                    <th class="w-1/3 py-4 px-6 text-left text-gray-400 font-semibold">Description</th>
                    <th class="w-1/6 py-4 px-6 text-left text-gray-400 font-semibold">Created at</th>
                    <th class="w-1/6 py-4 px-6 text-left text-gray-400 font-semibold">Due Date</th>
                    <th class="w-1/5 py-4 px-6 text-left text-gray-400 font-semibold">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach($tasks as $task)
                    <tr>
                        <x-table-item>{{ $task->task_name }}</x-table-item>
                        <x-table-item>{{ $task->description }}</x-table-item>
                        <x-table-item>{{ \Carbon\Carbon::parse($task->created_at)->format('d/m/Y') }}</x-table-item>
                        <x-table-item>{{ \Carbon\Carbon::parse($task->due_date)->format('d/m/Y') }}</x-table-item>
                        <x-table-item>
                            <button class="mr-8 underline">Delete</button>
                            <button class="mr-8 underline">Edit</button>
                            <button class="mr-8 underline">Show</button>
                        </x-table-item>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>