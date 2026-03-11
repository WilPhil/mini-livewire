@props(['active'])


@php
    $classes = $active
        ? 'block py-2 px-3 text-white bg-brand rounded md:bg-transparent md:text-fg-brand md:p-0'
        : 'block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
