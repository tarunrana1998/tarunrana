@props(['entry'])

<article class="relative pl-10">
    <span class="absolute left-0 top-5 h-3 w-3 rounded-full" style="background: var(--accent); box-shadow: 0 0 0 6px rgba(110,231,255,0.12);"></span>
    <div class="card p-6">
        <div class="flex flex-col gap-2 md:flex-row md:items-center md:justify-between">
            <div>
                <h3 class="text-xl font-display font-semibold">{{ $entry->role }}</h3>
                <p class="text-muted">{{ $entry->company }}</p>
            </div>
            <span class="chip text-sm">{{ $entry->period }}</span>
        </div>
        <p class="text-muted mt-4">{{ $entry->summary }}</p>
        <div class="mt-4 flex flex-wrap gap-2">
            @foreach ($entry->stack as $tech)
                <span class="chip">{{ $tech }}</span>
            @endforeach
        </div>
        <div class="mt-5 grid gap-2 text-sm text-muted">
            @foreach ($entry->highlights as $highlight)
                <p>- {{ $highlight }}</p>
            @endforeach
        </div>
    </div>
</article>
