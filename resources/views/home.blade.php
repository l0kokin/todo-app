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

        {{-- Sign in --}}
        <div class="flex min-h-full flex-col justify-center mx-20 w-1/2 relative">
            <div class="mt-10 flex justify-between sm:mx-auto sm:w-full sm:max-w-sm">
                <h2 class=" text-left text-3xl font-bold tracking-tight text-black uppercase whitespace-nowrap">Welcome back!</h2>
                <img src="{{ asset('icons/smile.svg') }}" alt="Smiley face" class="">
            </div>
            <form class="space-y-6 mt-10 sm:mx-auto sm:w-full sm:max-w-sm" action="#" method="POST">
                <div>
                    <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    </div>
                </div>    
                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                        <div class="text-sm">
                        </div>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    </div>
                </div>   
                <div>
                    <x-button-white type="submit" class="uppercase bg-blue hover:bg-blue-darker text-white w-full flex justify-center">Log In</x-button-white>
                </div>
            </form>
            <x-languages class="bottom-10 right-40"  />
        </div>
    </div>
</body>
</html>