<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Report Produksi') }}
        </h2>
    </x-slot> --}}

    <x-breadcrumbs>
        <li class="inline-flex items-center">
            <a href="#" class="text-gray-600 hover:text-indigo-800">
                Dashboard
            </a>
        </li>
    </x-breadcrumbs>
    
    {{-- card item --}}
    <x-card></x-card>


    {{-- main content --}}
    <x-table></x-table>
        

</x-app-layout>
