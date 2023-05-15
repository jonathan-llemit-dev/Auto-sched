<x-splade-flash>
    <div v-if="flash.has('status')" v-text="flash.status" {{ $attributes->class('text-xs text-justify text-green-500 p-2 mt-4 border-y border-r border-l-4 border-gray-300 border-l-green-500 rounded-md shadow-sm') }}></div>
</x-splade-flash>
