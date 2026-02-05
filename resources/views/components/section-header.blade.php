@props([
    'title',
    'eyebrow' => null,
    'subtitle' => null,
    'align' => 'left',
])

@php
    $alignment = $align === 'center' ? 'text-center items-center' : 'text-left items-start';
    $subtitleClass = $align === 'center' ? 'text-center max-w-2xl mx-auto' : 'max-w-2xl';
@endphp

<div class="mb-10 flex flex-col {{ $alignment }}">
    @if ($eyebrow)
        <span class="badge-soft mb-3">{{ $eyebrow }}</span>
    @endif
    <h2 class="text-3xl md:text-4xl font-display font-semibold">{{ $title }}</h2>
    @if ($subtitle)
        <p class="text-muted mt-3 {{ $subtitleClass }}">{{ $subtitle }}</p>
    @endif
</div>
