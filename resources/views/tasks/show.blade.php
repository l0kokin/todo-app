<x-layout>
    <div class="flex justify-between">
        <x-header-inner>{{ $task->name }}</x-header-inner>
        <x-button-white class="bg-white text-blue hover:bg-blue hover:text-white">
            <a href={{ route('tasks.edit', $task->id) }} class='flex items-center gap-x-2'>
                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11 4.5H4C3.46957 4.5 2.96086 4.71071 2.58579 5.08579C2.21071 5.46086 2 5.96957 2 6.5V20.5C2 21.0304 2.21071 21.5391 2.58579 21.9142C2.96086 22.2893 3.46957 22.5 4 22.5H18C18.5304 22.5 19.0391 22.2893 19.4142 21.9142C19.7893 21.5391 20 21.0304 20 20.5V13.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M18.5 3C18.8978 2.60218 19.4374 2.37868 20 2.37868C20.5626 2.37868 21.1022 2.60218 21.5 3C21.8978 3.39783 22.1213 3.93739 22.1213 4.5C22.1213 5.06261 21.8978 5.60218 21.5 6L12 15.5L8 16.5L9 12.5L18.5 3Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                {{__('create.edit')}}
            </a>
        </x-button-white>
    </div>

    <div class="mb-16">
        <h2 class="text-light-text mb-4">@lang('table.description')</h2>
        <p class="text-lg">{{ $task->description }}</p>
    </div>

    <div class="grid grid-cols-2 gap-x-16">
        <h2 class="text-light-text mb-4">@lang('table.created_date')</h2>
        <h2 class="text-light-text mb-4">@lang('table.due_date')</h2>
        <p class="text-lg">{{ \Carbon\Carbon::parse($task->created_at)->format('d/m/Y') }}</p>
        <p class="text-lg">{{ \Carbon\Carbon::parse($task->due_date)->format('d/m/Y') }}</p>
    </div>

   <x-languages />
</x-layout>
