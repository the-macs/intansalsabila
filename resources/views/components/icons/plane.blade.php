@props(['class' => ''])

<svg {{ $attributes->merge(['class' => 'h-5 w-5 ' . $class]) }} fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
</svg>