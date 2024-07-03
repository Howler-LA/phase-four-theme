@props([
  'message' => null
])

@if($message || $slot->isNotEmpty())
  <p class="text-base font-semibold text-indigo-600">
    {!! $message ?? $slot !!}
  </p>
@endif