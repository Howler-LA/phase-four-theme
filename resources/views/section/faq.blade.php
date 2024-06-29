<x-layout.wrapper class="border-b border-border">
  <x-layout.container>
    <x-layout.list>
      <div class="flex flex-col gap-xs text-center justify-center">
        <x-type.headline message="Frequently Asked Questions" />
        <x-type.copy message="We’re a dynamic group of individuals who are passionate about what we do." />
      </div>
      <x-accordion class="w-full max-w-3xl mx-auto">
        @repeat(4)
          <x-accordion.item 
            headline="What's the best thing about Switzerland?" 
            message="I don't know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat."
          />
        @endrepeat
      </x-accordion>
    </x-layout-list>
  </x-layout.container>
</x-layout.wrapper>