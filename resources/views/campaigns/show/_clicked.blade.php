<div class="space-y-4">

    <x-form action="{{ route('campaigns.show', ['campaign' => $campaign, 'what' => $what]) }}" get>

        <x-input.text name="search" placeholder="{{ __('Search an email...') }}" value="{{ $search }}" />
    </x-form>

    <x-table :headers="[__('Name'), __('# Clicks'), __('Email')]">
        <x-slot name="body">

        </x-slot>
    </x-table>

    {{-- {{ $campaigns->links() }} --}}


</div>
