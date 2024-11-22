<x-layout>
    <x-header />
	
    <div  class="w-full">
        <table class="w-full table-fixed">
            <thead>
                <tr class="border-b-2 border-gray">
                    <th class="w-1/4 pb-8 text-left text-gray-400 font-medium text-lg">@lang('table.taskName')</th>
                    <th class="w-1/3 pb-8 text-left text-gray-400 font-medium text-lg">@lang('table.description')</th>
                    <th class="w-1/7 pb-8 text-left text-gray-400 font-medium text-lg">@lang('table.createdAt')</th>
                    <th class="w-1/7 pb-8 text-left text-gray-400 font-medium text-lg">@lang('table.dueDate')</th>
                    <th class="w-1/4 pb-8 pl-6 text-left text-gray-400 font-medium text-lg">@lang('table.actions')</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach($tasks as $task)
                    <tr>
                        <x-table-item>{{ $task->name_english }}</x-table-item>
                        <x-table-item>{{ $task->description_english }}</x-table-item>
                        <x-table-item>{{ \Carbon\Carbon::parse($task->created_at)->format('d/m/Y') }}</x-table-item>
                        <x-table-item>{{ \Carbon\Carbon::parse($task->due_date)->format('d/m/Y') }}</x-table-item>
                        <x-table-item>
                            <button class="pl-6 mr-8 underline text-black">@lang('table.delete')</button>
                            <button class="mr-8 underline text-black">@lang('table.edit')</button>
                            <a href={{ route('taskInner', $task->id) }}>
                                <button class="mr-8 underline text-black">@lang('table.show')</button>
                            </a>
                        </x-table-item>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="my-14">
            {{ $tasks->links() }}
        </div>
          
    </div>
</x-layout>