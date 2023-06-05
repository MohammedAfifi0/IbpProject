<x-admin-layout>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl  sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Your dashboard content goes here -->
                    <h1 ><b>Welcome to the Admin Interface!<b></h1>
                        <p>You can create Role fromm the role section</p>
                    <p>You can create Permissions for those rolses fromm the Permissions section</p>
                    <p>You access the pomodoro technique page via Pomodoro section</p>
                    <p>You Acess the Admin Dashboard via Dashboard section</p>
                    <p>You could logout via the Admin section drop-down link LOGOUT</p>

                </div>

            </div>
        </div>

    </div>


</x-admin-layout>
