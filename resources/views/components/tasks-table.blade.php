<x-layout>
    <x-header />
	
    <div  class="w-full relative">
        <table class="w-full table-fixed">
            <thead>
                <tr class="border-b-2 border-gray">
                    <th class="w-1/4 pb-8 text-left text-gray-400 font-medium text-lg">{{__('table.task_name')}}</th>
                    <th class="w-1/3 pb-8 text-left text-gray-400 font-medium text-lg">{{__('table.description')}}</th>
                    <th class="w-1/7 pb-8 text-left text-gray-400 font-medium text-lg">{{__('table.created_at')}}</th>
                    <th class="w-1/7 pb-8 text-left text-gray-400 font-medium text-lg">{{__('table.due_date')}}</th>
                    <th class="w-1/4 pb-8 pl-6 text-left text-gray-400 font-medium text-lg">{{__('table.actions')}}</th>
                </tr>
            </thead>
            <tbody class="bg-white">
               {{ $slot }}
            </tbody>
        </table>

        <div class="py-16">
            {{ $tasks->links() }}
        </div>
        
        <x-languages class="m-10"/>
    </div>
</x-layout>