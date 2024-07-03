{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

@section('content')
  @layouts('components')
    @includeFirst([
      'flexible.layout-' . get_row_layout(), 
      'flexible.layout-empty'
    ])
  @endlayouts
@endsection