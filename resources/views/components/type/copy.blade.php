@props([
  'message' => null
])

<div {{ $attributes->merge(['class' => "text-lg leading-8 text-gray-600"]) }}>
  {!! $message ?? $slot !!}
</div>
