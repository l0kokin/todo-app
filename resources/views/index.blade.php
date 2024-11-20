<x-layout>
    <x-header />
	
    <div  class="w-full">
        <table class="w-full table-fixed mt-10">
            <thead>
                <tr class="border-b-2 border-gray">
                    <th class="w-1/4 pb-8 text-left text-gray-400 font-medium text-lg">Task Name</th>
                    <th class="w-1/3 pb-8 text-left text-gray-400 font-medium text-lg">Description</th>
                    <th class="w-1/7 pb-8 text-left text-gray-400 font-medium text-lg">Created at</th>
                    <th class="w-1/7 pb-8 text-left text-gray-400 font-medium text-lg">Due Date</th>
                    <th class="w-1/4 pb-8 pl-6 text-left text-gray-400 font-medium text-lg">Actions</th>
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
                            <button class="pl-6 mr-8 underline text-gray-darker">Delete</button>
                            <button class="mr-8 underline text-gray-darker">Edit</button>
                            <button class="mr-8 underline text-gray-darker">Show</button>
                        </x-table-item>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-10">
            {{ $tasks->links() }}
        </div>
    </div>
</x-layout>