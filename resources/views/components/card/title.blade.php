@props(['class' => ''])

<h3 {{ $attributes->merge(['class' => 'text-lg font-semibold ' . $class]) }}>
    {{ $slot }}
</h3>