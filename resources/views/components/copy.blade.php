@props([
  'html' => 'div',
  'message'=> null
])

<{{$html}} {{ $attributes->merge(['class' => 'prose prose-sm sm:prose']) }}>
  {!! $message ?? $slot !!}
</{{$html}}>
