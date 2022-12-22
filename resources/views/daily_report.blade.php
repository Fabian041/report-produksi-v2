<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Report Produksi') }}
        </h2>
    </x-slot> --}}

    <x-breadcrumbs>
        <li class="inline-flex items-center">
            <a href="#" class="text-gray-600 hover:text-indigo-800">
                Daily Report
            </a>
        </li>
    </x-breadcrumbs>

    <x-main-content>

        <h3 class="text-2xl font-bold">Daily Report</h3>

        <x-splade-form class="mt-5">
            <x-form-select>
                <x-slot name="label">Choose Line</x-slot>
                <option value="DCA001">DCA001</option>
            </x-form-select> 

            <x-form-select>
                <x-slot name="label">Choose Model</x-slot>
                <option value="DCA001">DCA001</option>
            </x-form-select>  

            <x-form-select>
                <x-slot name="label">Choose Back Number</x-slot>
                <option value="DCA001">DCA001</option>
            </x-form-select>     

            <label for="countries" class="block mb-2 mt-5 text-sm font-medium text-gray-900">Choose Time</label>
            <x-splade-input name="time" placeholder="choose time" time/>

            <div class="grid grid-cols-2 gap-4 mt-5">
                <label for="actual_time" class="block text-sm font-medium text-gray-900">Actual Time</label>
                <label for="quntity" class="block text-sm font-medium text-gray-900">Quantity</label>

                <input type="text" id="first_name" class="bg-white-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="John" required>

                <input type="text" id="first_name" class="bg-white-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="John" required>
            </div>

            <button type="button" class="mt-8 focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm p-20 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Submit</button>

        </x-splade-form>

        
    </x-main-content>

</x-app-layout>
