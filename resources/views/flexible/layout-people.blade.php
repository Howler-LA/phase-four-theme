<x-wrapper class="border-b border-border">
  <x-container>
    <x-layout.list>
      <div class="flex flex-col gap-xs">
        <x-type.kicker message="{!! $content['kicker'] !!}" />
        <x-type.headline message="{!! $content['headline'] !!}" />
        <x-type.copy message="{!! $content['copy'] !!}" />
      </div>
      <x-layout.grid columns="4">
        @posts($query)
          <x-card.person 
            thumbnail="{{ get_post_thumbnail_id() }}"
            name="{{ get_the_title() }}" 
            position="{{ get_field('content_role') }}" 
          />
        @endposts
      </x-layout.grid>
    </x-layout-list>
  </x-container>
</x-wrapper>