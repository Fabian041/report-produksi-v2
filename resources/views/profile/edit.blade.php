<x-app-layout>
    {{-- <x-slot name="header" class="flex">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot> --}}

    <x-breadcrumbs>
        {{ __('Profile') }}
    </x-breadcrumbs>

    <div class="py-8">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white sm:rounded-lg shadow-lg hover:shadow-2xl duration-300">
                <div class="max-w-xl" dusk="update-profile-information">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white sm:rounded-lg shadow-lg hover:shadow-2xl duration-300">
                <div class="max-w-xl" dusk="update-password">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white sm:rounded-lg shadow-lg hover:shadow-2xl duration-300">
                <div class="max-w-xl" dusk="delete-user">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
