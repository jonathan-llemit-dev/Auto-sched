@props(['active', 'as' => 'Link'])

@php
    $linked = ($active ?? false)
        ? 'sched-link'
        : '';
@endphp

<{{ $as }} {{ $attributes->class($linked) }}>
    {{ $slot }}
</{{ $as }}>
