<x-app-layout layout="2-columns-right">

    <x-slot name="rightSidebar">
        <h2 class="font-bold text-3xl mb-4">{{ __('Add your availability') }} </h2>
        <x-availability.editForm />
    </x-slot>

    <x-slot name="mainContent">
        <h2 class="font-bold text-3xl mb-4">{{ __('Your specific availabilities') }} </h2>

        <div class="availability-grid">
            <div class="headings grid grid-cols-4 gap-x-4 content-center">
                <span class="font-bold">{{ __('Date from') }}</span>
                <span class="font-bold">{{ __('Date to') }}</span>
                <span class="font-bold">{{ __('Available') }}</span>
                <span class="font-bold">{{ __('Actions') }}</span>
            </div>
            @if(count($userAvailabilities) > 0)
                <div class="body grid grid-cols-4 gap-x-4 gap-y-4 content-center">
                @foreach($userAvailabilities as $userAvailability)
                    <span class="">{{ $userAvailability->date_from->translatedFormat('l j F G:i')  }}</span>
                    <span class="">{{ $userAvailability->date_to->translatedFormat('l j F G:i')  }}</span>
                    <span class="">{{ $userAvailability->available }}</span>
                    <div class="actions">
                        <form action="{{ route('availability.update', [$userAvailability->id]) }}" method="GET">
                            @csrf
                            <x-form.button>{{ __('Edit') }}</x-form.button>
                        </form>
                        <form action="{{ route('availability.destroy', [$userAvailability->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <x-form.button>{{ __('Delete') }}</x-form.button>
                        </form>
                    </div>
                @endforeach
                </div>
            @else
                <span class="">{{ __('You have no explicit availabilities') }}</span>
            @endif
        </div>

    </x-slot>



</x-app-layout>