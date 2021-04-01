<x-app-layout layout="1-column">

    <x-slot name="mainContent">
        <h2 class="font-bold text-3xl mb-4">{{ __('Edit your availability') }} </h2>
        <x-availability.editForm :availability="$availability" />

    </x-slot>

</x-app-layout>