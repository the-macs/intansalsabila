@props(['class' => ''])

<div {{ $attributes->merge(['class' => 'px-6 py-4 ' . $class]) }}>
    {{ $slot }}
</div>
