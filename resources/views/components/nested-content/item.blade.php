<div x-data="{open:false}" class="pt-6">
  <dt>
    <button @click="open=!open" type="button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-0" aria-expanded="false">
      <span class="text-base font-semibold leading-7">What&#039;s the best thing about Switzerland?</span>
      <span class="ml-6 flex h-7 items-center">
        <svg :class="open ? 'hidden':'block'" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
        </svg>
        <svg :class="open ? 'block':'hidden'" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
        </svg>
      </span>
    </button>
  </dt>
  <dd x-show="open" class="mt-2 pr-12">
    <p class="text-base leading-7 text-gray-600">I don&#039;t know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</p>
  </dd>
</div>