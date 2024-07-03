<x-wrapper class="border-b border-border">
  <x-container>
    <x-layout.list>
      <div class="flex flex-col gap-xs">
        <x-type.kicker message="{!! $content['kicker'] !!}" />
        <x-type.headline message="{!! $content['headline'] !!}" />
        <x-type.copy message="{!! $content['copy'] !!}" />
      </div>
      <x-layout.grid>
        @repeat(3)
          <x-card.person />
        @endrepeat
      </x-layout.grid>
    </x-layout-list>
  </x-container>
</x-wrapper>