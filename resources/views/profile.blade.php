<x-layout>
    <div class="flex flex-col items-center -ml-20">
        <x-header-inner>{{__('profile.profile')}}</x-header-inner>

        <form action="" class="min-w-[35%] -mt-12 flex flex-col align-center">
            <x-input-field 
            type="email"
            name=""
            id="email"
            value="" 
            label="{{__('profile.email')}}"
            error="email"
            />

            <h2 class="self-center uppercase mt-16">{{__('profile.change_password')}}</h2>
            <x-input-field 
            type="password"
            name=""
            id="password"
            value="" 
            label="{{__('profile.current_password')}}"
            error="password"
            />
            <x-input-field 
            type="password"
            name=""
            id="password"
            value="" 
            label="{{__('profile.new_password')}}"
            error="password"
            />
            <x-input-field 
            type="password"
            name=""
            id="password"
            value="" 
            label="{{__('profile.retype_password')}}"
            error="password"
            />

            <h2 class="self-center uppercase mt-16">{{__('profile.change_photos')}}</h2>
            <div class="flex items-center justify-center gap-x-6 mb-8">
                <img src="{{ asset('images/avatar.png') }}" alt="Profile Picture" class="w-28 h-28 rounded-full">
                <x-button-white class="bg-white text-blue hover:bg-blue hover:text-white">
                    <img src="{{ asset('icons/upload.svg') }}">
                    {{ __('profile.upload_profile')}}
                </x-button-white>
                <button class="uppercase text-black px-12">{{__('table.delete')}}</button>
            </div>
            <div class="flex items-center justify-center gap-x-6">
                <img src="{{ asset('images/pattern.png') }}" alt="Cover" class="w-28  h-28 rounded-xl">
                <x-button-white class="bg-white text-blue hover:bg-blue hover:text-white">                    
                    <img src="{{ asset('icons/upload.svg') }}">
                    {{ __('profile.upload_cover')}}
                </x-button-white>
                <button class="uppercase text-black px-12">{{__('table.delete')}}</button>
            </div>
            
            <x-button-white type="submit" class="mt-20 mb-24 py-8 bg-blue hover:bg-blue-darker text-white w-full flex justify-center">{{__('profile.change')}}</x-button-white>       
        </form>

        <x-languages/>
    </div>
</x-layout>