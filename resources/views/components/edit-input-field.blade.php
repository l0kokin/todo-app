@php
    $inputType = $inputType ?? 'input';
@endphp

<div class="relative mt-6">
    @if($inputType === 'textarea')
        <textarea 
            name="{{ $name }}" 
            id="{{ $id }}" 
            rows="{{ $rows ?? '' }}" 
            placeholder=" "
            class="mt-1 block w-full rounded-lg p-6 text-black bg-gray focus:ring-2 focus:border-blue sm:text-sm outline-none peer
            @error($error) outline-red outline-1 @else border-gray @enderror"
            {{ $attributes }}
            oninput="this.style.height = this.scrollHeight + 'px';"
        >{{ old($name, $value ?? '') }}</textarea>
    @else
        <input 
            type="{{ $type ?? 'text' }}" 
            name="{{ $name }}" 
            id="{{ $id }}" 
            value="{{ $value ?? '' }}"
            placeholder=" "
            class="block w-full rounded-lg p-6 text-black bg-gray focus:ring-2 focus:border-blue sm:text-sm outline-none peer
            @error($error) outline-red outline-1 @else border-gray @enderror"
            {{ $attributes }}
        />
    @endif

    <label 
        for="{{ $id }}" 
        class="bg-gray w-11/12 pt-2 absolute left-6 top-0 text-sm text-dark-gray transition-all peer-placeholder-shown:top-6 peer-placeholder-shown:text-base peer-placeholder-shown:dark-gray peer-focus:top-2 peer-focus:text-sm peer-focus:text-blue-500">
        {{ __($label) }}
    </label>
    @error($error)
        <p class="mt-2 ml-6 text-xs text-red">{{ $message }}</p>
    @enderror
</div>
