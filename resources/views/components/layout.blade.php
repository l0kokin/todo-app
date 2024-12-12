<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('icons/laravel.svg') }}">
    <title>Task Manager</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])

</head>
<body>
    <div class="flex h-screen">
        <!-- Sidebar -->
        <nav class="bg-gray w-42 flex-shrink-0 m-10 rounded-lg">
            <div class="h-full flex flex-col">
            <div class="flex-1 px-4 py-4 overflow-y-auto flex flex-col items-center">
                {{-- Profile picture --}}
                @if(Auth::user()->profile_picture && file_exists(storage_path('app/public/' . Auth::user()->profile_picture)))
                    <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="Profile Picture" class="w-16 h-16 object-cover rounded-full mb-28">
                @else
                    <img src="{{ asset('images/avatar.png') }}" alt="profile" class="w-16 h-16 object-cover rounded-full mb-28">
                @endif

                <div>
                    <x-nav-link :icon="'my-tasks'" :href="('/tasks')">{{__('sidebar.my_tasks')}}</x-nav-link>
                    <x-nav-link :icon="'due-tasks'" :href="('/tasks/due')">{{__('sidebar.due_tasks')}}</x-nav-link>
                    <x-nav-link :icon="'profile'" :href="('/profile')">{{__('sidebar.profile')}}</x-nav-link>
                </div>
            </div>
            <div class="px-4 py-4">
              <form action="{{ route('session.destroy') }}" method="GET" class="inline">
                @csrf
                <button type="submit" class="flex items-center text-left">
                    <p class="block px-3 py-2 text-md font-medium text-text-color mb-4 flex gap-x-2 items-center">
                        <img src="{{ asset('icons/log-out.svg') }}" alt="Icon" class="w-8 h-8">
                        {{__('sidebar.logout')}}
                    </p>
                </button>
            </form>
            </div>
          </div>
        </nav>
      
        <!-- Main Content -->
        <main class="flex-1 my-40 mx-8 relative">
            {{ $slot }}
        </main>
      </div> 

      <script>
        // clearing profile picture
        function clearProfilePicture() {
            const profileImage = document.getElementById('profile-picture');
            const defaultProfileImage = "{{ asset('images/avatar.png') }}"; 
            profileImage.src = defaultProfileImage; 
            const profileInput = document.querySelector('input[name="profile_picture"]');
            profileInput.value = "";  
        }
    
        // clearing cover photo
        function clearCoverPhoto() {
            const coverImage = document.getElementById('cover-photo');
            const defaultCoverImage = "{{ asset('images/pattern.png') }}"; 
            coverImage.src = defaultCoverImage; 
            const coverInput = document.querySelector('input[name="cover_photo"]');
            coverInput.value = "";  
        }

        // previewing images
        function previewImage(inputId, imageId) {
            const input = document.getElementById(inputId);
            const image = document.getElementById(imageId);

            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    image.src = e.target.result;
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>
</html>