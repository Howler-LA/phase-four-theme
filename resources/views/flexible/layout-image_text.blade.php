<x-wrapper class='border-b border-border'>
  <x-container>
    <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2 items-center">
      <div class="lg:pr-lg">
        <div class="lg:max-w-lg flex flex-col gap-xs">
          <x-type.kicker message="{!! $content['kicker'] !!}" />
          <x-type.headline message="{!! $content['headline'] !!}" />
          <x-type.copy message="{!! $content['copy'] !!}" />
        </div>
      </div>
      <div class="w-[125%] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem] md:-ml-4 lg:-ml-0 overflow-hidden">
        <img 
          src="https://tailwindui.com/img/component-images/dark-project-app-screenshot.png" 
          alt="Product screenshot" 
          class="w-full" 
          width="2432" 
          height="1442"
        >
      </div>
    </div>
  </x-container>
</x-wrapper>
