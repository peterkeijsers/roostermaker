@props(['availability' => null])




<form class="availability" action="{{ ($availability) ? route('availability.update', [$availability->id]) : route('availability.store') }}" method="POST">
    @csrf
    @isset($availability)
        @method('PATCH')
    @endif
    <fieldset>
        <div class="field my-4">
            <x-form.label for="date_from" :value="__('From')" />
            <x-form.input id="date_from" name="date_from" class="" value="{{ ($availability) ? $availability->date_from->format('Y-m-d\TH:i:s') : '' }}" type="datetime-local" />
        </div>

        <div class="field my-4">
            <x-form.label for="date_to" :value="__('To')" />
            <x-form.input id="date_to" name="date_to" class="" value="{{ ($availability) ? $availability->date_to->format('Y-m-d\TH:i:s') : '' }}" type="datetime-local" />
        </div>

        <div class="field my-4">
            <x-form.label for="available" :value="__('Available yes / no')" />
            <x-form.input id="available" name="available" value="0" type="checkbox" />
        </div>
    </fieldset>

    <x-form.button>{{ __('Submit') }}</x-form.button>

</form>