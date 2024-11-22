<x-layout>
    <div class="flex flex-col items-center -ml-20">
        <x-header-inner>
            Create Task
        </x-header-inner>
        
        <form action="" class="min-w-[35%] -mt-12">
            <div class="relative mt-6">
                <input 
                    type="text" 
                    id="nameEnglish" 
                    placeholder=" " 
                    class="block w-full rounded-lg border-0 p-6 text-black bg-gray focus:ring-2 focus:border-blue sm:text-sm outline-none peer"
                />
                <label 
                    for="nameEnglish" 
                    class="absolute left-6 top-2 text-sm text-dark-gray transition-all peer-placeholder-shown:top-4 peer-placeholder-shown:text-base peer-placeholder-shown:dark-gray peer-focus:top-2 peer-focus:text-sm peer-focus:text-blue-500"                >
                    @lang('table.nameEnglish')
                </label>
            </div>

            <div class="relative mt-6">
                <input 
                    type="text" 
                    id="nameGeorgian" 
                    placeholder=" " 
                    class="block w-full rounded-lg border-0 p-6 text-black bg-gray focus:ring-2 focus:border-blue sm:text-sm outline-none peer"
                />
                <label 
                    for="nameGeorgian" 
                    class="absolute left-6 top-2 text-sm text-dark-gray transition-all peer-placeholder-shown:top-4 peer-placeholder-shown:text-base peer-placeholder-shown:dark-gray peer-focus:top-2 peer-focus:text-sm peer-focus:text-blue-500"                >
                    @lang('table.nameGeorgian')
                </label>
            </div>

            <div class="relative mt-6">
                <textarea 
                    id="descriptionEnglish" 
                    placeholder=" " 
                    rows="3" 
                    class="block w-full rounded-lg border-0 p-6 text-black bg-gray focus:ring-2 focus:border-blue sm:text-sm outline-none peer"
                ></textarea>
                <label 
                    for="descriptionEnglish" 
                    class="absolute left-6 top-2 text-sm text-dark-gray transition-all peer-placeholder-shown:top-4 peer-placeholder-shown:text-base peer-placeholder-shown:dark-gray peer-focus:top-2 peer-focus:text-sm peer-focus:text-blue-500"                >
                    @lang('table.descriptionEnglish')
                </label>
            </div>

            <div class="relative mt-6">
                <textarea 
                    id="descriptionGeorgian" 
                    placeholder=" " 
                    rows="3" 
                    class="block w-full rounded-lg border-0 p-6 text-black bg-gray focus:ring-2 focus:border-blue sm:text-sm outline-none peer"
                ></textarea>
                <label 
                    for="descriptionGeorgian" 
                    class="absolute left-6 top-2 text-sm text-dark-gray transition-all peer-placeholder-shown:top-4 peer-placeholder-shown:text-base peer-placeholder-shown:dark-gray peer-focus:top-2 peer-focus:text-sm peer-focus:text-blue-500"                >
                    @lang('table.descriptionGeorgian')
                </label>
            </div>

            <div class="relative mt-6">
                <input 
                    type="date" 
                    id="date" 
                    placeholder=" " 
                    class="block w-full rounded-lg border-0 p-6 pt-10 text-black bg-gray focus:ring-2 focus:border-blue sm:text-sm outline-none peer uppercase appearance-none"
                />
                <label 
                    for="date" 
                    class="absolute left-6 top-4 text-dark-gray text-sm transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-placeholder-shown:text-dark-gray peer-focus:top-2 peer-focus:text-sm peer-focus:text-blue-500"
                >
                    @lang('table.dueDate')
                </label>
            </div>     

            <x-button-white type='submit' class="mt-6 py-8 bg-blue hover:bg-blue-darker text-white w-full flex justify-center">Create Task</x-button-white>       
        </form>

        <x-languages/>
    </div>
</x-layout>
