<x-layout>
    <x-header />
	
    <div  class="w-full">
        <table class="w-full table-fixed">
            <thead>
                <tr class="bg-gray-100">
                    <th class="w-1/4 py-4 px-6 text-left text-gray-400 font-semibold">Task Name</th>
                    <th class="w-1/3 py-4 px-6 text-left text-gray-400 font-semibold">Description</th>
                    <th class="w-1/5 py-4 px-6 text-left text-gray-400 font-semibold">Created at</th>
                    <th class="w-1/5 py-4 px-6 text-left text-gray-400 font-semibold">Due Date</th>
                    <th class="w-1/4 py-4 px-6 text-left text-gray-400 font-semibold">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                <tr>
                    <x-table-item>Call Jim and ask about the quote</x-table-item>
                    <x-table-item>Systematic characterization and documentati...</x-table-item>
                    <x-table-item>23/06/2013</x-table-item>
                    <x-table-item>23/06/2013</x-table-item>
                    <x-table-item>
                        <button class="mr-8 underline">Delete</button>
                        <button class="mr-8 underline">Edit</button>
                        <button class="mr-8 underline">Show</button>
                    </x-table-item>
                </tr>
            </tbody>
        </table>
    </div>
</x-layout>