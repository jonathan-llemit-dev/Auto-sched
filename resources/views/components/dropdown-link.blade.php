@props(['as' => 'Link'])

<{{ $as }} {{ $attributes->class('block px-4 py-2 text-xs leading-5 text-gray-700 hover:bg-gray-300 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out') }}>{{ $slot }}</{{ $as }}>
