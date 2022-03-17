@props(['href'])

@php
    $defaultClasses = 'float';
@endphp

<a {{ $attributes->class([$defaultClasses])->merge(['href' => $href]) }}>
    <i class="fa fa-plus my-float"></i>
</a>