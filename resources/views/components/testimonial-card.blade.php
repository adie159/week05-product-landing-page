@props(['name', 'role', 'initial'])

<div class="bg-surface p-8 border-t-2 border-red">
    <p class="text-bone/85 leading-relaxed mb-6">&ldquo;{{ $slot }}&rdquo;</p>
    <div class="flex items-center gap-3">
        <div class="h-11 w-11 rounded-full bg-turf/20 border border-turf flex items-center justify-center font-display font-semibold text-turf">
            {{ $initial }}
        </div>
        <div>
            <p class="font-display font-semibold uppercase tracking-wide text-sm">{{ $name }}</p>
            <p class="text-bone/50 text-xs">{{ $role }}</p>
        </div>
    </div>
</div>
