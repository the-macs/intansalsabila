@props(['class' => ''])

<div {{ $attributes->merge(['class' => 'px-6 py-4 border-t border-gray-200 ' . $class]) }}>
    {{ $slot }}
</div>