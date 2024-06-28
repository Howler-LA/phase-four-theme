@props([
  'html' => 'div',
  'message'=> null
])

<{{$html}} {{ $attributes->merge(['class' => 'font-bold text-lg sm:text-xl md:text-2xl lg:text-3xl tracking-tight']) }}>
  {!! $message ?? $slot !!}
</{{$html}}>
