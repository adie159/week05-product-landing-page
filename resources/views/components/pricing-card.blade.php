@props([
    'name',
    'price',
    'unit' => '',
    'featured' => false,
])

<div @class([
    'flex flex-col p-8 border-2',
    'border-red bg-surface relative' => $featured,
    'border-surface bg-surface/40' => !$featured,
])>
    @if($featured)
        <span class="absolute -top-3 left-8 bg-red text-bone text-xs font-display uppercase tracking-wide px-3 py-1">Most Chosen</span>
    @endif

    <h3 class="font-display uppercase tracking-wide text-lg text-bone/80">{{ $name }}</h3>

    <div class="mt-4 mb-6 flex items-baseline gap-1">
        <span class="font-display font-semibold text-5xl">₱{{ $price }}</span>
        @if($unit)
            <span class="text-bone/60 text-sm">/ {{ $unit }}</span>
        @endif
    </div>

    <ul class="space-y-3 mb-8 flex-1">
        {{ $slot }}
    </ul>

    <x-button href="https://www.facebook.com/profile.php?id=61558571424663" :variant="$featured ? 'primary' : 'outline'" class="w-full">
        Choose {{ $name }}
    </x-button>
</div>
