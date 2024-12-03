<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task Manager</title>
    @vite(['resources/css/app.css' ])

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

                <x-nav-link :icon="'my-tasks'" :href="('/tasks')">{{__('sidebar.my_tasks')}}</x-nav-link>
                <x-nav-link :icon="'due-tasks'" :href="('/tasks/due')">{{__('sidebar.due_tasks')}}</x-nav-link>
                <x-nav-link :icon="'profile'" :href="('/profile')">{{__('sidebar.profile')}}</x-nav-link>
            </div>
            <div class="px-4 py-4">
              <x-nav-link :icon="'log-out'" :href="('/')">{{__('sidebar.logout')}}</x-nav-link>
            </div>
          </div>
        </nav>
      
        <!-- Main Content -->
        <main class="flex-1 my-40 mx-10 relative">
            {{ $slot }}
        </main>
      </div>      
</body>
</html>