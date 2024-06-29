@props([
  'columns' => null,
])

@php($class = match ($columns) {
  '5'     => 'lg:grid-cols-5',
  '4'     => 'lg:grid-cols-4',
  default => 'lg:grid-cols-3',
  '2'     => 'lg:grid-cols-2',
})

<div {{ $attributes->merge(['class' => "grid grid-cols-2 {$class} gap-xs sm:gap-sm md:gap-md"]) }}>
  {!! $slot !!}
</div>
