<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Report Produksi') }}
        </h2>
    </x-slot> --}}

    {{-- breadcrumbs --}}
    <x-breadcrumbs>
        {{ __('Dashboard') }}
    </x-breadcrumbs>
    
    {{-- card item --}}
    <x-card></x-card>


    {{-- main content --}}
    <x-table></x-table>
        

</x-app-layout>
