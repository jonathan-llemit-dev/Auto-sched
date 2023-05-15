@props(['width' => 'fit'])

@php
switch ($width) {
    case 'fit':
        $width = 'w-fit';
    break;
}
@endphp

<x-splade-dropdown {{ $attributes->except('width') }}>
    <x-slot:trigger>
        {{ $trigger }}
    </x-slot:trigger>

    <div class="mt-2 {{ $width }} rounded-md shadow-lg overflow-hidden bg-white">
        {{ $content }}
    </div>
</x-splade-dropdown>
