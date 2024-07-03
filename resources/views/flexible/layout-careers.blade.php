@set($careers,wpgetapi_endpoint( 'greenhouse', 'job_list', array( 'debug' => false, 'key' => '{departments}' ) ))

@if($careers)
  <x-wrapper class='border-b border-border'>
    <x-container>
      <div class="flex flex-col gap-xs">
        @foreach($careers['departments'] as $item)
          @notempty($item['jobs'])
            <x-type.headline>
              {{ $item['name'] }}
            </x-type.headline>
            <ul class="my-xs flex flex-col gap-xs">
              @foreach($item['jobs'] as $job)
                <li class="bg-gray-50 p-sm">
                  <a href="/jobs/?gh_jid={{ $job['internal_job_id'] }}" >
                    {{ $job['title'] }}
                  </a>
                </li>
              @endforeach
            </ul>
          @endnotempty
        @endforeach
      </div>
    </x-container>
  </x-wrapper>
@endif

<script>
  console.log( {!! json_encode($careers['departments']); !!} )
</script>
