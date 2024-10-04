<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Show Event Details
        </h2>
    </x-slot>

    <div class="pt-4 pb-2">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="max-w-2xl py-4 mx-auto">
                <x-jet-validation-errors class="mb-4" />

                @if (session('status'))
                    <div class="mb-4 text-sm font-medium text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="GET" action="{{ route('events.edit', ['event' => $event->id ]) }}">
                    @csrf

                    <div class="mt-2">
                        <x-jet-label for="event_name" value="Event Name" />
                        {{ $event->name }}
                    </div>
                    <div class="mt-2">
                        <x-jet-label for="information" value="Event Detail" />
                        {{!! nl2br(e($event->information)) !!}}
                    </div>
                    <div class="justify-between md:flex">
                        <div class="mt-2">
                            <x-jet-label for="event_date" value="Event Date" />
                            {{ $event->eventDate }}
                        </div>
                        <div class="mt-2">
                            <x-jet-label for="start_time" value="Start Time" />
                            {{ $event->startTime }}
                        </div>
                        <div class="mt-2">
                            <x-jet-label for="end_time" value="End Time" />
                            {{ $event->endTime }}
                        </div>
                    </div>
                    <div class="items-end justify-between md:flex">
                        <div class="mt-2">
                            <x-jet-label for="max_people" value="Max Count" />
                            1
                        </div>
                        <div class="flex justify-around space-x-4">
                            <div class="mt-2">
                                @if($event->is_visible) show @else unshow @endif
                            </div>
                        </div>
                        <div class="flex justify-around space-x-4">
                            @if ($event->eventDate >= \Carbon\Carbon::today()->format('Y/m/d'))
                            <x-jet-button class="ml-4">
                                Edit
                            </x-jet-button>
                            @endif

                        </div>

                    </div>

                </form>
                </div>
            </div>
        </div>
    </div>
    <div class="py-4">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="max-w-2xl py-4 mx-auto">
                    @if (!$users->isEmpty())
                    <div class="py-2 text-center">Reservations</div>
                    <table class="w-full text-left whitespace-no-wrap table-auto">
                        <thead>
                        <tr>
                            <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">Reserved Name</th>
                            <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">Number of people</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($reservations as $reservation)
                                @if (is_null($reservation['canceled_date']))
                                 <tr>
                                    <td class="px-4 py-3">{{ $reservation['name']}}</td>
                                    <td class="px-4 py-3">{{ $reservation['number_of_people']}}</td>
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>

                    @endif
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

