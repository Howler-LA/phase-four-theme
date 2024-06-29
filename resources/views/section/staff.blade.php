<x-layout.wrapper class="bg-stone-50">
  <x-layout.container>
    <x-layout.list>
      <div class="flex flex-col gap-xs">
        <x-type.headline message="Meet our Team" />
        <x-type.copy message="We’re a dynamic group of individuals who are passionate about what we do." />
      </div>
      <x-layout.grid columns="4">
        @repeat(4)
          <x-cards.person 
            name="Joe Rogan" 
            position="Art Director" 
            message="Working Hard, Hardly Working"
          />
        @endrepeat
      </x-layout.grid>
    </x-layout-list>
  </x-layout.container>
</x-layout.wrapper>