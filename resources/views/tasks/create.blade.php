<x-layout>
    <div class="flex flex-col items-center -ml-20">
        <x-header-inner>
            @lang('create.create')
        </x-header-inner>
        
        <form method="POST" action="{{ route('tasks.store') }}" class="min-w-[35%] -mt-12">
            @csrf

            <x-input-field 
                type="text"
                name="name[en]"
                id="nameEnglish"
                value="name.en" 
                label="create.name_english"
                error="name.en"
            />

            <x-input-field 
                type="text"
                name="name[ka]"
                id="nameGeorgian"
                value="name.ka" 
                label="create.name_georgian"
                error="name.ka"
            />

            <x-input-field 
                inputType="textarea"
                name="description[en]"
                id="descriptionEnglish"
                value="description.en" 
                rows="3" 
                label="create.description_english"
                error="description.en"
            />
            
            <x-input-field 
                inputType="textarea"
                name="description[ka]"
                id="descriptionGeorgian"
                value="description.ka" 
                rows="3" 
                label="create.description_georgian"
                error="description.ka"
            />

            <x-input-field 
                type="date"
                name="due_date"
                id="date"
                value="due_date" 
                rows="3" 
                label="table.due_date"
                error="due_date"
            />

            <x-button-white type="submit" class="mt-6 py-8 bg-blue hover:bg-blue-darker text-white w-full flex justify-center"> @lang('create.create')</x-button-white>       
        </form>
    </div>
    <x-languages/>
</x-layout>
