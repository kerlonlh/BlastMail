<div class="flex flex-col gap-4">

    <x-alert success :title="__('You campaign is ready to be send!')" />

    <div>

        <div>Assunt: {{ $data['subject'] }}</div>
    </div>

    <hr>

    <div>
        <x-input-label :value="__('Schedule delivery')" />
        <div class="flex flex-col gap-2 mt-2">
            <x-input.radio id="send_now" name="send_when" value="now">{{ __('Send Now') }}</x-input.radio>
            <x-input.radio id="send_later" name="send_when" value="later">{{ __('Send Later') }}</x-input.radio>
        </div>

    </div>





    <div>

        <x-input.text id="send_at" class="block mt-1 w-full" type="date" name="send_at" :value="old('send_at', $data['send_at'])"
            autofocus />
        <x-input-error :messages="$errors->get('send_at')" class="mt-2" />
    </div>

</div>
