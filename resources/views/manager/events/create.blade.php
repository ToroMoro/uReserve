<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Create Event
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                Date<input type=“text” id=“event_date” name=“event_date”>
                Start time<input type=“text” id=“start_time” name=“start_time”>
                End Time<input type=“text” id=“end_time” name=“end_time”>
            </div>
        </div>
    </div>
</x-app-layout>

