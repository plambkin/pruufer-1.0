<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>

    <div class="flex w-full justify-between mb-10">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

            <div>
                <label class="block font-medium text-sm text-gray-700" for="email"> Name </label>

                <input
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                    id="name" type="name" name="name" required="required" autofocus="autofocus">
            </div>

            <div>
                <label class="block font-medium text-sm text-gray-700" for="email"> Email </label>

                <input
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                    id="email" type="email" name="email" required="required" autofocus="autofocus">
            </div>

            <div class="mt-4">
                <label class="block font-medium text-sm text-gray-700" for="password">Password </label>

                <input
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                    id="password" type="password" name="password" required="required" autocomplete="current-password">
            </div>

            <div class="mt-4">
                <label class="block font-medium text-sm text-gray-700" for="password">API Token </label>

                <input
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                    id="password" type="password" name="password" required="required" autocomplete="current-password">
            </div>



            <div class="flex items-center justify-end mt-4">


                <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3">
                    Amend
                </button>
            </div>
        </div>
    </div>

        <table class="w-full mt-10">
            <thead>
            <tr>
                <th class="py-2 px-4 border-b">Number </th>
                <th class="py-2 px-4 border-b">Description</th>
                <th class="py-2 px-4 border-b">Frequency</th>
                <th class="py-2 px-4 border-b">Code</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="py-2 px-4 border-b">
                    <div class="font-medium text-sm text-gray-700">12</div>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" type="text" value="12">
                </td>
                <td class="py-2 px-4 border-b">
                    <div class="font-medium text-sm text-gray-700">Row 1</div>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" type="text" value="People have enrolled in this course in the last">
                </td>
                <td class="py-2 px-4 border-b">
                    <div class="font-medium text-sm text-gray-700">Row 1</div>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" type="text" value="24 hours">
                </td>
                <td class="py-2 px-4 border-b">
                    <div class="font-medium text-sm text-gray-700">Row 1</div>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" type="text" value="Code goes here">
                </td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b">
                    <div class="font-medium text-sm text-gray-700">Row 2</div>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" type="text" value="123">
                </td>
                <td class="py-2 px-4 border-b">
                    <div class="font-medium text-sm text-gray-700">Row 2</div>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" type="text" value="People have viewed this page in the last">
                </td>
                <td class="py-2 px-4 border-b">
                    <div class="font-medium text-sm text-gray-700">Row 2</div>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" type="text" value="Week">
                </td>
                <td class="py-2 px-4 border-b">
                    <div class="font-medium text-sm text-gray-700">Row 2</div>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" type="text" value="Code goes here">
                </td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b">
                    <div class="font-medium text-sm text-gray-700">Row 3</div>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" type="text" value="26">
                </td>
                <td class="py-2 px-4 border-b">
                    <div class="font-medium text-sm text-gray-700">Row 3</div>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" type="text" value="People have purchased within the last">
                </td>
                <td class="py-2 px-4 border-b">
                    <div class="font-medium text-sm text-gray-700">Row 3</div>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" type="text" value="Day">
                </td>
                <td class="py-2 px-4 border-b">
                    <div class="font-medium text-sm text-gray-700">Row 3</div>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" type="text" value="Code goes here">
                </td>
            </tr>

            </tbody>
        </table>



</x-app-layout>
