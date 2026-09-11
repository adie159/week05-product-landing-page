@props(['icon', 'title'])

<div class="border-l-2 border-surface pl-6 py-2 hover:border-red transition-colors duration-150">
    <div class="text-turf mb-4">
        {!! $icon !!}
    </div>
    <h3 class="font-display font-semibold text-lg uppercase tracking-wide mb-2">{{ $title }}</h3>
    <p class="text-bone/70 text-sm leading-relaxed">{{ $slot }}</p>
</div>
