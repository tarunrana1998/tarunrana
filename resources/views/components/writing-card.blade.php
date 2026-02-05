@props(['entry'])

<article class="card p-6 h-full flex flex-col">
    <div class="flex items-center justify-between">
        <span class="badge-soft">{{ $entry->tag }}</span>
        <span class="text-sm text-muted">{{ $entry->date }}</span>
    </div>
    <h3 class="text-xl font-display font-semibold mt-4">{{ $entry->title }}</h3>
    <p class="text-muted mt-2">{{ $entry->summary }}</p>
    <div class="mt-auto pt-5">
        @if ($entry->link && $entry->link !== '#')
            <a href="{{ $entry->link }}" class="text-sm font-semibold text-accent">Read notes</a>
        @else
            <span class="text-sm text-muted">Draft in progress</span>
        @endif
    </div>
</article>
