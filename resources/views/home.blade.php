<!DOCTYPE html>
<html lang="en" class="h-full bg-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('icons/laravel.svg') }}">
    <title>Task Manager</title>
    @vite(['resources/css/app.css' ])

</head>
<body class="h-full">
    <div class="flex gap-x-20">
        {{-- Cover photo  --}}
        @if(
            Auth::check() 
            && Auth::user()->cover_photo 
            && file_exists(storage_path('app/public/' . Auth::user()->cover_photo))
        )
            <img 
                src="{{ asset('storage/' . Auth::user()->cover_photo) }}" 
                alt="Cover" 
                class="m-10 object-cover max-w-[43rem] h-[59rem] rounded-s-[50px]"
            >
        @else
            <img 
                src="{{ asset('images/pattern.png') }}" 
                alt="Cover" 
                class="m-10 object-cover max-w-[43rem] h-[59rem] rounded-s-[50px]"
            >
        @endif

        {{-- Sign in form --}}
        <div class="flex min-h-full flex-col justify-center relative">
            <div class="mt-10 flex justify-between sm:mx-auto sm:w-full sm:max-w-sm gap-x-4">
                <div>
                    <h2 class=" text-left text-3xl font-bold tracking-tight text-black uppercase whitespace-nowrap">@lang('auth.welcome')</h2>
                    <p class="font-sans leading-4 text-left text-light-text">@lang('auth.enter_details')</p>
                </div>
                <img src="{{ asset('icons/smile.svg') }}" alt="Smiley face">
            </div>

            <form class="space-y-6 mt-10 sm:mx-auto w-[31rem] sm:max-w-sm" action="/login" method="POST">
                @csrf
                <x-input-field 
                    type="email"
                    name="email"
                    id="email"
                    value="email" 
                    label="auth.email"
                    error="email"
                />
                <x-input-field 
                    type="password"
                    name="password"
                    id="password"
                    value="password" 
                    label="auth.password"
                    error="password"
                />     
            <x-button-white type="submit" class="uppercase bg-blue hover:bg-blue-darker text-white w-full flex justify-center">@lang('auth.login')</x-button-white>
            </form>

            <x-languages class="bottom-10 right-20"  />
        </div>
    </div>

    <script>  
        // toggle show/hide password
        document.addEventListener('DOMContentLoaded', function() {
            const togglePassword = document.getElementById('togglePassword');
            const passwordField = document.getElementById('password');

            togglePassword.addEventListener('click', function() {
                const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordField.setAttribute('type', type);
            });
        });
     </script>
</body>
</html>