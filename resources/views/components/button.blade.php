@props([
    'href' => '#',
    'variant' => 'primary', // primary | outline | ghost
])

@php
$base = 'inline-flex items-center justify-center gap-2 px-7 py-3 font-display font-semibold uppercase tracking-wide text-sm transition-colors duration-150';

$variants = [
    'primary' => 'bg-red text-bone hover:bg-red/85',
    'outline' => 'border-2 border-bone text-bone hover:bg-bone hover:text-ink',
    'ghost'   => 'text-bone hover:text-turf border-b-2 border-transparent hover:border-turf',
];
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $base . ' ' . $variants[$variant]]) }}>
    {{ $slot }}
</a>
