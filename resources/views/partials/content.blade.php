<article @php(post_class('flex flex-col gap-xs sm:gap-sm'))>
  
  <header>
    <x-headline html="h2" class="entry-title">
      <a href="{{ get_permalink() }}">
        {!! $title !!}
      </a>
    </x-headline>

    @include('partials.entry-meta')
  </header>

  <x-copy class="entry-summary">
    @php(the_excerpt())
  </x-copy>
</article>
