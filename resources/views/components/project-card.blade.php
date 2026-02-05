@props(['project'])

<article class="card overflow-hidden h-full flex flex-col">
    <div class="bg-surface-2 p-6">
        <div class="flex items-center justify-between">
            <span class="badge-soft">Case Study</span>
            <span class="text-sm text-muted">{{ $project->role }}</span>
        </div>
        <h3 class="text-2xl font-display font-semibold mt-4">{{ $project->title }}</h3>
        <p class="text-muted mt-2">{{ $project->tagline }}</p>
    </div>

    <div class="px-6 pt-6">
        <img src="{{ $project->image }}" alt="{{ $project->title }} preview" class="w-full rounded-2xl border border-subtle shadow-elev" loading="lazy">
    </div>

    <div class="flex-1 p-6">
        <div class="grid gap-4 text-sm">
            <div>
                <p class="text-xs uppercase tracking-[0.2em] text-muted">Problem</p>
                <p class="mt-1">{{ $project->problem }}</p>
            </div>
            <div>
                <p class="text-xs uppercase tracking-[0.2em] text-muted">Solution</p>
                <p class="mt-1">{{ $project->solution }}</p>
            </div>
            <div>
                <p class="text-xs uppercase tracking-[0.2em] text-muted">Outcome</p>
                <p class="mt-1">{{ $project->outcome }}</p>
            </div>
            <div>
                <p class="text-xs uppercase tracking-[0.2em] text-muted">Key Decisions</p>
                <div class="mt-2 grid gap-1 text-muted">
                    @foreach ($project->decisions as $decision)
                        <p>- {{ $decision }}</p>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="mt-6 flex flex-wrap gap-2">
            @foreach ($project->tech as $tech)
                <span class="chip">{{ $tech }}</span>
            @endforeach
        </div>
    </div>

    <div class="mt-auto px-6 pb-6 flex items-center justify-between">
        @if ($project->link && $project->link !== '#')
            <a href="{{ $project->link }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-semibold text-accent">
                View live
                <span aria-hidden="true">-></span>
            </a>
        @else
            <span class="text-sm text-muted">Private deployment</span>
        @endif
        <span class="chip">Full-stack ownership</span>
    </div>
</article>
