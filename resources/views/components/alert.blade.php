@props(['title', 'success' => null, 'warning' => null, 'danger' => null, 'noIcon' => false])



<div @class([
    'relative w-full overflow-hidden rounded-xl border bg-white text-slate-700 dark:bg-slate-900 dark:text-slate-300',
    'border-green-600' => $success,
    'border-amber-600' => $warning,
    'border-red-600' => $danger,
]) role="alert">
    <div @class([
        'flex w-full items-center gap-2 p-4',
        'bg-green-600/10' => $success,
        'bg-amber-600/10' => $warning,
        'bg-red-600/10' => $danger,
    ])>
        <div @class([
            'text-green-600 rounded-full p-1',
            'bg-green-600/15' => $success,
            'bg-amber-600/15' => $warning,
            'bg-red-600/15' => $danger,
        ]) aria-hidden="true">
            @unless ($noIcon)
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-6"
                    aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                        clip-rule="evenodd" />
                </svg>
            @endunless
        </div>
        <div class="ml-2">
            <h3 @class([
                'text-sm font-semibold ',
                'text-green-500' => $success,
                'text-amber-500' => $warning,
                'text-red-500' => $danger,
            ])>{{ $title }}</h3>
            @if ($slot)
                <p class="text-xs font-medium sm:text-sm">{{ $slot }}</p>
            @endif

        </div>

    </div>
</div>
