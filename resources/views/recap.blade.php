<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Report Produksi') }}
        </h2>
    </x-slot> --}}

    {{-- breadcrumb --}}
    <x-breadcrumbs>
        {{ __('Recap') }}
    </x-breadcrumbs>

    {{-- main content --}}
    <x-table></x-table>

</x-app-layout>
