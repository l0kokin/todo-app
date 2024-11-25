<x-layout>
    <div class="flex flex-col items-center -ml-20">
        <x-header-inner>
            Create Task
        </x-header-inner>
        
        <form method="POST" action="{{ route('tasks.store') }}" class="min-w-[35%] -mt-12">
            @csrf
            
            <div class="relative mt-6">
                <input 
                    type="text" 
                    name="name[en]"
                    id="nameEnglish" 
                    value="{{ old('name.en') }}"
                    class="block w-full rounded-lg p-6 text-black bg-gray focus:ring-2 focus:border-blue sm:text-sm outline-none peer
                    @error('name.en') outline-red outline-1 @else border-gray @enderror"
                />
                <label 
                    for="nameEnglish" 
                    class="absolute left-6 top-2 text-sm text-dark-gray transition-all peer-placeholder-shown:top-4 peer-placeholder-shown:text-base peer-placeholder-shown:dark-gray peer-focus:top-2 peer-focus:text-sm peer-focus:text-blue-500">
                    @lang('table.nameEnglish')
                </label>
                @error('name.en')
                    <p class="mt-2 ml-6 text-xs text-red">{{ $message }}</p>
                @enderror
            </div>

            <div class="relative mt-6">
                <input 
                    type="text" 
                    name="name[ka]"
                    id="nameGeorgian" 
                    value="{{ old('name.ka') }}"
                    class="block w-full rounded-lg p-6 text-black bg-gray focus:ring-2 focus:border-blue sm:text-sm outline-none peer
                    @error('name.ka') outline-red outline-1 @else border-gray-300 @enderror"
                />
                <label 
                    for="nameGeorgian" 
                    class="absolute left-6 top-2 text-sm text-dark-gray transition-all peer-placeholder-shown:top-4 peer-placeholder-shown:text-base peer-placeholder-shown:dark-gray peer-focus:top-2 peer-focus:text-sm peer-focus:text-blue-500">
                    @lang('table.nameGeorgian')
                </label>
                @error('name.ka')
                    <p class="mt-2 ml-6 text-xs text-red">{{ $message }}</p>
                @enderror
            </div>

            <div class="relative mt-6">
                <textarea 
                    id="descriptionEnglish"
                    name="description[en]"
                    rows="3" 
                    class="block w-full rounded-lg p-6 text-black bg-gray focus:ring-2 focus:border-blue sm:text-sm outline-none peer
                    @error('description.en') outline-red outline-1 @else border-gray-300 @enderror"
                >{{ old('description.en') }}</textarea>
                <label 
                    for="descriptionEnglish" 
                    class="absolute left-6 top-2 text-sm text-dark-gray transition-all peer-placeholder-shown:top-4 peer-placeholder-shown:text-base peer-placeholder-shown:dark-gray peer-focus:top-2 peer-focus:text-sm peer-focus:text-blue-500"                >
                    @lang('table.descriptionEnglish')
                </label>
                @error('description.en')
                    <p class="mt-2 ml-6 text-xs text-red">{{ $message }}</p>
                @enderror
            </div>

            <div class="relative mt-6">
                <textarea 
                    id="descriptionGeorgian" 
                    name="description[ka]"
                    rows="3" 
                    class="block w-full rounded-lg p-6 text-black bg-gray focus:ring-2 focus:border-blue sm:text-sm outline-none peer
                    @error('description.ka') outline-red outline-1 @else border-gray-300 @enderror"
                >{{ old('description.ka') }}</textarea>
                <label 
                    for="descriptionGeorgian" 
                    class="absolute left-6 top-2 text-sm text-dark-gray transition-all peer-placeholder-shown:top-4 peer-placeholder-shown:text-base peer-placeholder-shown:dark-gray peer-focus:top-2 peer-focus:text-sm peer-focus:text-blue-500"                >
                    @lang('table.descriptionGeorgian')
                </label>
                @error('description.ka')
                    <p class="mt-2 ml-6 text-xs text-red">{{ $message }}</p>
                @enderror
            </div>

            <div class="relative mt-6">
                <input 
                    type="date" 
                    name="due_date"
                    id="date" 
                    value="{{ old('due_date') }}"
                    class="block w-full rounded-lg p-6 pt-10 text-black bg-gray focus:ring-2 focus:border-blue sm:text-sm outline-none peer uppercase appearance-none
                    @error('due_date') outline-red outline-1 @else border-gray-300 @enderror"
                />
                <label 
                    for="date" 
                    class="absolute left-6 top-4 text-dark-gray text-sm transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-placeholder-shown:text-dark-gray peer-focus:top-2 peer-focus:text-sm peer-focus:text-blue-500"
                >
                    @lang('table.dueDate')
                </label>
                @error('due_date')
                    <p class="mt-2 ml-6 text-xs text-red">{{ $message }}</p>
                @enderror
            </div>     

            <x-button-white type="submit" class="mt-6 py-8 bg-blue hover:bg-blue-darker text-white w-full flex justify-center">Create Task</x-button-white>       
        </form>
    </div>
    
    <x-languages/>
</x-layout>
