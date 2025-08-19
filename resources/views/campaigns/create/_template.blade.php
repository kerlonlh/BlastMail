<div>
    <x-input.campaigns.xt name="body" :value="old('body', $data['body'])" />
    <x-input-error :messages="$errors->get('body')" class="mt-2" />
</div>
