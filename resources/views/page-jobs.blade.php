@extends('layouts.app')

@set($id,$_GET['gh_jid'])

@section('content')
  <x-wrapper>
    <x-container>
      
      <x-type.headline message="{{ $_GET['gh_jid'] ?? 'Fallback value' }}" />

      <div class="p-sm bg-green-100 my-xs">
        <div class="prose max-w-full">
          {!! print_r(wpgetapi_endpoint( 'greenhouse', 'job_post', array( 'debug' => false, 'endpoint_variables' => array($id) ) )) !!}
        </div>
      </div>

      {{-- @shortcode("[wpgetapi_endpoint api_id='career_post' endpoint_id='greenhouse' debug='true']") --}}

    </x-container>
  </x-wrapper>
@endsection