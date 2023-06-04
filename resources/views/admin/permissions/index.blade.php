<x-admin-layout>





    <div class="py- w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                <div class="flex justify-end p-2">
                    <a href="" class="px-4 py-2 bg-green-700 hover:bg-green-500 rounded-md">Create Permission</a>
                </div>
                <!-- component -->
                <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
                    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                        <thead class="bg-gray-50">

                            <tr>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Name</th>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
                            </tr>

                        </thead>

                        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                            @foreach ($permissions as $permission)
                                <tr class="hover:bg-gray-50">

                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            {{ $permissions->name }}
                                        </div>
                                    </td>
                                    <td>
                                        <a href="">Edit</a>
                                        <a href="">Delete</a>

                                    </td>

                                </tr>
                            @endforeach





                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>






</x-admin-layout>
