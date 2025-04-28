@props(['class' => ''])

<div {{ $attributes->merge(['class' => 'bg-white rounded-lg border border-gray-200 shadow-sm overflow-hidden w-full ' . $class]) }}>
    {{ $slot }}
</div>
