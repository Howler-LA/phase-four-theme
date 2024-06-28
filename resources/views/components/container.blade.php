@props([
  'html' => 'div',
])

<{{$html}} {{ $attributes->merge(['class' => "px-xs sm:px-sm md:px-md"]) }}>
  {!! $slot !!}
</{{$html}}>
