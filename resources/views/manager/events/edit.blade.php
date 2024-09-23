<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Edit Event
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
                <form method="POST" action="{{ route('events.update', ['event' => $event->id]) }}">
                    @csrf
                    @method('PUT')
                    <div class="mt-2">
                        <x-jet-label for="event_name" value="Event Name" />
                        <x-jet-input id="event_name" class="block w-full mt-1" type="text" name="event_name" value="{{ $event->name }}" required autofocus />
                    </div>
                    <div class="mt-2">
                        <x-jet-label for="information" value="Event Detail" />
                        <x-textarea row="3" id="information" name="information" class="block w-full mt-1" type="text" name="information" required>{{ $event->information}}</x-textarea>
                    </div>
                    <div class="justify-between md:flex">
                        <div class="mt-2">
                            <x-jet-label for="event_date" value="Event Date" />
                            <x-jet-input id="event_date" class="block w-full mt-1" type="text" name="event_date" value="{{ $eventDate }}" required />
                        </div>
                        <div class="mt-2">
                            <x-jet-label for="start_time" value="Start Time" />
                            <x-jet-input id="start_time" class="block w-full mt-1" type="text" name="start_time" value="{{ $startTime }}" required/>
                        </div>
                        <div class="mt-2">
                            <x-jet-label for="end_time" value="End Time" />
                            <x-jet-input id="end_time" class="block w-full mt-1" type="text" name="end_time" value="{{ $endTime }}" required/>
                        </div>
                    </div>
                    <div class="items-end justify-between md:flex">
                        <div class="mt-2">
                            <x-jet-label for="max_people" value="Max Count" />
                            <x-jet-input id="max_people" class="block w-full mt-1" type="number" name="max_people" value="{{ $event->max_people }}" required/>
                        </div>
                        <div class="flex justify-around space-x-4">
                            <div class="mt-2">
                                <input type="radio" name="is_visible" @if ($event->is_visible === 1 ) checked @endif value="1" />Show
                                <input type="radio" name="is_visible" @if ($event->is_visible === 0 ) checked @endif value="0" />Unshow
                            </div>
                        </div>
                        <x-jet-button class="ml-4">
                            Complete
                        </x-jet-button>
                    </div>

                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

