@props(['group'])

<div class="card p-6 h-full">
    <h3 class="text-xl font-display font-semibold">{{ $group->title }}</h3>
    <p class="text-muted mt-2">{{ $group->description }}</p>
    <div class="mt-4 flex flex-wrap gap-2">
        @foreach ($group->items as $item)
            <span class="chip">{{ $item }}</span>
        @endforeach
    </div>
</div>
