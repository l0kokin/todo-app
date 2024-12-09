<x-layout>
    <div class="flex flex-col items-center -ml-20">
        <x-header-inner>{{__('profile.profile')}}</x-header-inner>

        <form action="{{ route('profile.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data" class="min-w-[35%] -mt-12 flex flex-col align-center">
            @csrf
            @method('PATCH')
        
            <x-edit-input-field 
                type="email"
                name="email"
                id="email"
                value="{{ Auth::user()->email }}" 
                label="{{__('profile.email')}}"
                error="email"
            />

            <h2 class="self-center uppercase mt-16">{{__('profile.change_password')}}</h2>
            <x-input-field 
                type="password"
                name="current_password"
                id="current_password"
                value="" 
                label="{{__('profile.current_password')}}"
                error="current_password"
            />
            <x-input-field 
                type="password"
                name="new_password"
                id="new_password"
                value="" 
                label="{{__('profile.new_password')}}"
                error="new_password"
            />
            <x-input-field 
                type="password"
                name="new_password_confirmation"
                id="new_password_confirmation"
                value="" 
                label="{{__('profile.retype_password')}}"
                error="new_password"
            />

            <h2 class="self-center uppercase mt-16 mb-8">{{__('profile.change_photos')}}</h2>
            <div class="flex items-center justify-left gap-x-6 mb-8">
                {{-- Profile Picture --}}
                @if(Auth::check() && Auth::user()->profile_picture && file_exists(storage_path('app/public/' . Auth::user()->profile_picture)))
                    <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="Profile" id="profile-picture" class="w-28 h-28 rounded-full object-cover">
                @else
                    <img src="{{ asset('images/avatar.png') }}" alt="Profile" id="profile-picture" class="w-28 h-28 rounded-full object-cover">
                @endif

                <label class="group ring-1 ring-inset ring-blue rounded-xl px-6 py-4 bg-white text-blue hover:bg-blue hover:text-white px-4 py-2 cursor-pointer flex items-center gap-x-2 uppercase">
                    <img src="{{ asset('icons/upload.svg') }}" alt="Upload Icon" class="group-hover:invert group-hover:brightness-0 group-hover:contrast-200">
                    <span>{{ __('profile.upload_profile') }}</span>
                    <input type="file" name="profile_picture" id="profile-picture-input" class="hidden" onchange="previewImage('profile-picture-input', 'profile-picture')">
                </label>

                <button type="button" onclick="clearProfilePicture()" class="uppercase text-black px-12">{{__('table.delete')}}</button>
            </div>

            <div class="flex items-center justify-left gap-x-6">
                {{-- Cover photo --}}
                @if(Auth::check() && Auth::user()->cover_photo && file_exists(storage_path('app/public/' . Auth::user()->cover_photo)))
                    <img src="{{ asset('storage/' . Auth::user()->cover_photo) }}" alt="Cover" id="cover-photo" class="w-28 h-28 rounded-s-xl">
                @else
                    <img src="{{ asset('images/pattern.png') }}" alt="Cover" id="cover-photo" class="w-28 h-28 rounded-s-xl">
                @endif

                <label class="group ring-1 ring-inset ring-blue rounded-xl px-6 py-4 bg-white text-blue hover:bg-blue hover:text-white px-4 py-2 cursor-pointer flex items-center gap-x-2 uppercase">
                    <img src="{{ asset('icons/upload.svg') }}" alt="Upload Icon" class="group-hover:invert group-hover:brightness-0 group-hover:contrast-200">
                    <span>{{ __('profile.upload_cover') }}</span>
                    <input type="file" name="cover_photo" id="cover-photo-input" class="hidden" onchange="previewImage('cover-photo-input', 'cover-photo')">
                </label>

                <button type="button" onclick="clearCoverPhoto()" class="uppercase text-black px-12">{{__('table.delete')}}</button>
            </div>
            
            <x-button-white type="submit" class="mt-20 mb-24 py-8 bg-blue hover:bg-blue-darker text-white w-full flex justify-center">{{__('profile.change')}}</x-button-white>       
        </form>

        <x-languages/>
    </div>
</x-layout>
