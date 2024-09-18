<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Show Event Details
        </h2>
    </x-slot>

    <div class="py-12">
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
                            <div class="mt-2">
                                <button onclick="location.href='{{ route('events.edit', ['event' => $event->id]) }}'">Edit</button>
                            </div>
                        </div>

                    </div>

                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

