@props([
  'message' => null
])

<h2 class="text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl">
  {!! $message ?? $slot !!}
</h2>