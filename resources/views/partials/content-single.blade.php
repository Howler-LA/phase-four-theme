<x-wrapper html="article" class="flex flex-col gap-xs sm:gap-sm">
  
  <x-container html="header">
    <x-headline html="h1" class="p-name" message="{!! $title !!}" />
    @include('partials.entry-meta')
  </x-container>

  <x-container class="e-content">
    <x-copy message="{!! the_content() !!}" />
  </x-container>

  @if ($pagination)
    <x-container html="footer">
      <nav class="page-nav" aria-label="Page">
        {!! $pagination !!}
      </nav>
    </x-container>
  @endif

</x-wrapper>