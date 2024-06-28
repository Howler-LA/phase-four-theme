@extends('layouts.app')

@section('content')
@include('partials.page-header')

<x-wrapper>
  <x-container>

    @noposts
      <x-alert type="warning">
        {!! __('Sorry, no results were found.', 'sage') !!}
      </x-alert>
      {!! get_search_form(false) !!}
    @endnoposts

    @posts
      @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
    @endposts

    {!! get_the_posts_navigation() !!}

  </x-container>
</x-wrapper>

@endsection