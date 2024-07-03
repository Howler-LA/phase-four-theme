@props([
  'message' => null
])

<div class="p-2 px-3 bg-gray-100 border rounded">
  {!! $message ?? $slot !!}
</div>