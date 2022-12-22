@props(['width' => '48'])

@php
switch ($width) {
    case '48':
        $width = 'w-48';
        break;
}
@endphp

<x-splade-dropdown {{ $attributes->except('width') }} class="flex flex-row items-center w-full px-6 py-3 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline hover:text-indigo-800">
    <x-slot:trigger>
        {{ $trigger }}
    </x-slot:trigger>

    @isset($content)    
    <div class="mt-2 {{ $width }} rounded-md shadow-lg ring-1 ring-black ring-opacity-5 py-1 bg-white">
        {{ $content }}
    </div>
    @endisset
</x-splade-dropdown>
