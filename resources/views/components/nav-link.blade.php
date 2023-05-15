@props(['active', 'as' => 'Link'])

@php
$linked = ($active ?? false)
            ? 'linked'
            : '';
@endphp

<{{ $as }} {{ $attributes->class($linked) }}>
    {{ $slot }}
</{{ $as }}>
