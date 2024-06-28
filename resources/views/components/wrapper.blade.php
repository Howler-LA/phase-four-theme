@props([
  'html' => 'div',
])

<{{$html}} {{ $attributes->merge(['class' => "py-xs sm:py-sm bg-background ring-1 ring-border"]) }}>
  {!! $slot !!}
</{{$html}}>
