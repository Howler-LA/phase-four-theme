<x-wrapper class="border-b border-border">
  <x-container>
    <x-layout.list>
      <div class="flex flex-col gap-xs">
        <x-type.kicker message="{!! $content['kicker'] !!}" />
        <x-type.headline message="{!! $content['headline'] !!}" />
        <x-type.copy message="{!! $content['copy'] !!}" />
      </div>
      <x-nested-content class="w-full">
        @repeat(4)
          <x-nested-content.item 
            headline="What's the best thing about Switzerland?" 
            message="I don't know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat."
          />
        @endrepeat
      </x-nested-content>
    </x-layout-list>
  </x-container>
</x-wrapper>