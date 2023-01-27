<x-admin-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.events.create') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indig0-700 rounded-lg">Create Event</a>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Product name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Image
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Description
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($events as $event)
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $event->name }}
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <img src="{{ Storage::url($event->image) }}" class="w-16 h-16 rounded">
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $event->description }}
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <div class="flex space-x-2">
                                    <a href="{{ route('admin.events.edit', $event->id) }}" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white ">Edit</a>
                                    <form class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white "
                                          method="POST"
                                          action="{{ route('admin.events.destroy', $event->id) }}"
                                          onsubmit="return confirm('Are you sure');">
                                        @csrf
                                        @method('Delete')
                                        <button type="submit">Delete</button>
                                    </form>
                                </div>
                            </th>
                        </tr>

                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
