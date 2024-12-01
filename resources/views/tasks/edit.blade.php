<x-layout>
    <a href={{ route('tasks.index') }} class="flex gap-x-3 mb-4 self-start ml-52">
    <div class="flex flex-col items-center -ml-20">
            <img src="{{ asset('icons/back.svg') }}" class="mb-1">
            <p class="uppercase">{{__("table.back")}}</p>
        </a>
        <x-header-inner>
            @lang('create.edit')
        </x-header-inner>
        
        <form method="POST" action="{{ route('tasks.update', $task->id) }}" class="min-w-[35%] -mt-12">
            @csrf
            @method('PATCH')

            <x-edit-input-field 
                type="text"
                name="name[en]"
                id="nameEnglish"
                value="{!! $task->getTranslation('name', 'en') !!}" 
                label="create.name_english"
                error="name.en"
            />

            <x-edit-input-field 
                type="text"
                name="name[ka]"
                id="nameGeorgian"
                value="{!! $task->getTranslation('name', 'ka') !!}" 
                label="create.name_georgian"
                error="name.ka"
            />

            <x-edit-input-field 
                inputType="textarea"
                name="description[en]"
                id="descriptionEnglish"
                value="{!! $task->getTranslation('description', 'en') !!}" 
                rows="3" 
                label="create.description_english"
                error="description.en"
            />
            
            <x-edit-input-field 
                inputType="textarea"
                name="description[ka]"
                id="descriptionGeorgian"
                value="{!! $task->getTranslation('description', 'ka') !!}" 
                rows="3" 
                label="create.description_georgian"
                error="description.ka"
            />

            <x-edit-input-field 
                type="date"
                name="due_date"
                id="date"
                value="{{ $task->due_date }}" 
                rows="3" 
                label="table.due_date"
                error="due_date"
            />

            <x-button-white type="submit" class="mt-6 py-8 bg-blue hover:bg-blue-darker text-white w-full flex justify-center">@lang('create.edit_changes')</x-button-white>       
        </form>
    </div>
    <x-languages/>
</x-layout>
