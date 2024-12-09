<x-layout>
    <x-header />
	
    <div  class="w-full relative">
        <table class="w-full table-fixed">
            <thead>
                <tr class="border-b-2 border-gray">
                    <th class="w-1/5 pb-8 text-left text-gray-400 font-medium text-lg">{{__('table.task_name')}}</th>
                    <th class="w-1/3 pb-8 text-left text-gray-400 font-medium text-lg pl-6">{{__('table.description')}}</th>
                    <th class="w-1/7 pb-8 text-left text-gray-400 font-medium text-lg whitespace-nowrap">
                        <div class="flex items-center gap-x-2 pl-6">
                            {{__('table.created_at')}} 
                            <a href="{{ route('tasks.index', ['sort' => 'created_at', 'direction' => request('direction', 'asc') === 'asc' ? 'desc' : 'asc']) }}">
                                <img src="{{ asset('icons/arrows.svg') }}" class="max-w-none">
                            </a>
                        </div>
                    </th>
                    <th class="w-1/7 pb-8 text-left text-gray-400 font-medium text-lg whitespace-nowrap">
                        <div class="flex items-center gap-x-2 pl-6">
                            {{__('table.due_date')}}
                            <a href="{{ route('tasks.index', ['sort' => 'due_date', 'direction' => request('direction', 'asc') === 'asc' ? 'desc' : 'asc']) }}">
                                <img src="{{ asset('icons/arrows.svg') }}" class="max-w-none">
                            </a> 
                        </div>
                    </th>
                    <th class="w-1/4 pb-8 pl-6 text-left text-gray-400 font-medium text-lg !pl-12">{{__('table.actions')}}</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach($tasks as $task)
                    <tr>
                        <x-table-item class="pl-0">{{ $task->name }}</x-table-item>
                        <x-table-item>{{ $task->description }}</x-table-item>
                        <x-table-item>{{ \Carbon\Carbon::parse($task->created_at)->format('d/m/Y') }}</x-table-item>
                        <x-table-item class="{{ \Carbon\Carbon::parse($task->due_date)->isPast() ? 'text-red' : '' }}">
                            {{ \Carbon\Carbon::parse($task->due_date)->format('d/m/Y') }}
                        </x-table-item>
                        <x-table-item class="pl-0">
                            <a href={{ route('tasks.delete', $task->id) }} class="pl-6 mr-8 underline text-black">{{__('table.delete')}}</a>
                            <a href={{ route('tasks.edit', $task->id) }} class="mr-8 underline text-black">{{__('table.edit')}}</a>
                            <a href={{ route('tasks.show', $task->id) }}>
                                <button class="mr-8 underline text-black">{{__('table.show')}}</button>
                            </a>
                        </x-table-item>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="py-16">
            {{ $tasks->links() }}
        </div>
        
        <x-languages class="m-10"/>
    </div>
</x-layout>