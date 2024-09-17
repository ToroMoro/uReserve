<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Manage Events
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
            <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                @if (session('status'))
                    <div class="mb-4 text-sm font-medium text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                <button onclick="location.href='{{ route('events.create') }}'">Create New</button>
                <div></div>
                <div class="w-full mx-auto overflow-auto lg:w-2/3">
                <table class="w-full text-left whitespace-no-wrap table-auto">
                    <thead>
                    <tr>
                        <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">Event Name</th>
                        <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">Start Date</th>
                        <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">End Date</th>
                        <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">Count</th>
                        <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">Max Count</th>
                        <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">Show</th>
                        <th class="w-10 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 rounded-tr rounded-br title-font"></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $event)
                        <tr>
                            <td class="px-4 py-3">{{ $event->name }}</td>
                            <td class="px-4 py-3">{{ $event->start_date }}</td>
                            <td class="px-4 py-3">{{ $event->end_date }}</td>
                            <td class="px-4 py-3">ato</td>
                            <td class="px-4 py-3">{{ $event->max_people }}</td>
                            <td class="px-4 py-3">{{ $event->is_visible }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $events->links()}}
                </div>
            </div>
            </section>

            </div>
        </div>
    </div>

</x-app-layout>

