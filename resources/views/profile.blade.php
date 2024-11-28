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

            <h2 class="self-center uppercase mt-16 mb-8">{{__('profile.change_photos')}}</h2>
            <div class="flex items-center justify-center gap-x-6 mb-8">
                <img src="{{ asset('images/avatar.png') }}" alt="Profile Picture" class="w-28 h-28 rounded-full">
                
                <label class="group ring-1 ring-inset ring-blue rounded-xl px-6 py-4 bg-white text-blue hover:bg-blue hover:text-white px-4 py-2 cursor-pointer flex items-center gap-x-2 uppercase">
                    <img src="{{ asset('icons/upload.svg') }}" alt="Upload Icon" class="group-hover:invert group-hover:brightness-0 group-hover:contrast-200">
                    <span>{{ __('profile.upload_profile') }}</span>
                    <input type="file" name="profile_picture" class="hidden">
                </label>

                <button class="uppercase text-black px-12">{{__('table.delete')}}</button>
            </div>
            <div class="flex items-center justify-center gap-x-6">
                <img src="{{ asset('images/pattern.png') }}" alt="Cover" class="w-28 h-28 rounded-xl">
                
                <label class="group ring-1 ring-inset ring-blue rounded-xl px-6 py-4 bg-white text-blue hover:bg-blue hover:text-white px-4 py-2 cursor-pointer flex items-center gap-x-2 uppercase">
                    <img src="{{ asset('icons/upload.svg') }}" alt="Upload Icon" class="group-hover:invert group-hover:brightness-0 group-hover:contrast-200">
                    <span>{{ __('profile.upload_cover') }}</span>
                    <input type="file" name="cover_photo" class="hidden">
                </label>

                <button class="uppercase text-black px-12">{{__('table.delete')}}</button>
            </div>
            
            <x-button-white type="submit" class="mt-20 mb-24 py-8 bg-blue hover:bg-blue-darker text-white w-full flex justify-center">{{__('profile.change')}}</x-button-white>       
        </form>

        <x-languages/>
    </div>
</x-layout>