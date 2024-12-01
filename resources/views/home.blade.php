<!DOCTYPE html>
<html lang="en" class="h-full bg-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task Manager</title>
    @vite(['resources/css/app.css' ])

</head>
<body class="h-full">
    <div class="flex">
        {{-- Cover photo --}}
        <img src="{{ asset('images/pattern.png') }}" alt="Cover" class="m-10 ">

        {{-- Sign in form --}}
        <div class="flex min-h-full flex-col justify-center mx-20 w-1/2 relative">
            <div class="mt-10 flex justify-between sm:mx-auto sm:w-full sm:max-w-sm gap-x-4">
                <div>
                    <h2 class=" text-left text-3xl font-bold tracking-tight text-black uppercase whitespace-nowrap">@lang('auth.welcome')</h2>
                    <p class="font-sans leading-4 text-left text-light-text">@lang('auth.enter_details')</p>
                </div>
                <img src="{{ asset('icons/smile.svg') }}" alt="Smiley face">
            </div>

            <form class="space-y-6 mt-10 sm:mx-auto sm:w-full sm:max-w-sm" action="/login" method="POST">
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

            <x-languages class="bottom-10 right-40"  />
        </div>
    </div>
</body>
</html>