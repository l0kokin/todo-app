<div class="lg:flex lg:items-center lg:justify-between">
    <div class="min-w-0 flex-1">
      <x-header-inner>{{__('table.your_tasks')}}</x-header-inner>
    </div>
    <div class="mt-5 flex lg:ml-4 lg:mt-0">
      <span class="ml-3 hidden sm:block">
        <a href={{ route('tasks.delete.old')}}>
          <x-button-white class="bg-white text-blue hover:bg-blue hover:text-white">
            {{__('table.delete_tasks')}}
          </x-button-white>
        </a>
      </span>
  
      <span class="sm:ml-3">
        <a href="{{ route('tasks.create') }}">
          <x-button-white class="bg-blue hover:bg-blue-darker text-white ">
            <img src="{{ asset('icons/plus-circle.svg') }}" alt="Icon" class="w-6 h-6">
              {{__('table.add_task')}}
          </x-button-white>
        </a>
      </span>
    </div>
</div>