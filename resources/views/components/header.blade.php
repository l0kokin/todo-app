<div class="lg:flex lg:items-center lg:justify-between">
    <div class="min-w-0 flex-1">
      <h1 class="text-2xl/7 font-bold text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">YOUR TASKS</h1>
    </div>
    <div class="mt-5 flex lg:ml-4 lg:mt-0">
      <span class="ml-3 hidden sm:block">
        <x-button-white class="bg-white text-blue hover:bg-blue hover:text-white">
            Delete old tasks
        </x-button-white>
      </span>
  
      <span class="sm:ml-3">
        <x-button-white class="bg-blue hover:bg-blue-darker text-white ">
          <img src="{{ asset('icons/plus-circle.svg') }}" alt="Icon" class="w-6 h-6 transition-colors duration-300">
            Add Task
        </x-button-white>
      </span>
    </div>
</div>