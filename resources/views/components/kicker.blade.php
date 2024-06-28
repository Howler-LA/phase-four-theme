@props([
  'html' => 'div',
  'message'=> null
])

<{{$html}} {{ $attributes->merge(['class' => '']) }}>
  {!! $message ?? $slot !!}
</{{$html}}>
