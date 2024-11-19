<div class="lg:flex lg:items-center lg:justify-between">
    <div class="min-w-0 flex-1">
      <h1 class="text-2xl/7 font-bold text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">YOUR TASKS</h1>
    </div>
    <div class="mt-5 flex lg:ml-4 lg:mt-0">
      <span class="ml-3 hidden sm:block">
        <button type="button" class="inline-flex items-center rounded-xl bg-white px-6 py-4 text-sm font-semibold text-blue shadow-sm ring-1 ring-inset ring-blue hover:bg-gray-50 max-h-12 
        hover:bg-blue hover:text-white transition-colors duration-300 uppercase">
            Delete Old Tasks
        </button>
      </span>
  
      <span class="sm:ml-3">
        <button type="button" class="inline-flex gap-x-3 items-center rounded-xl border border-transparent bg-blue px-6 py-4 text-sm font-semibold text-white shadow-sm max-h-12
               hover:bg-blue-darker transition-all duration-300 uppercase">
        <img src="{{ asset('icons/plus-circle.svg') }}" alt="Icon" class="w-6 h-6 transition-colors duration-300">
            Add Task
        </button>
      </span>
    </div>
</div>