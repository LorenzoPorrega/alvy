<!-- Request -->
{{-- @dd($request->method) --}}
<li wire:click.stop="$dispatch('openTab', { id: {{ $request->id }}, type: 'request', title: '{{ $request->title }}', method: '{{ $request->method->type }}' })" class="relative"
  x-data='{ open_{{ $request->id }} : false }'>
  <div
    class="flex w-full py-0.5 select-none hover:cursor-pointer group/request hover:bg-slate-300 hover:dark:bg-slate-600"
    :class="open_{{ $request->id }} === true ? 'bg-slate-300 dark:bg-slate-600' : ''">

    <!-- First element: Fixed width, content aligned to the right -->
    <div class="flex-none w-14 text-right me-2 flex items-center justify-end">
      <span
        class="{{ $request->method->bg_color . ' ' . $request->method->text_color . ' ' . $request->method->dark_bg_color . ' ' . $request->method->dark_text_color }} text-micro font-medium px-1 py-0.5 rounded group-hover/request:rounded-none ease-in duration-100">
        {{ strtoupper($request->method->type) }}
      </span>
    </div>

    <!-- Second element: Takes up necessary space only -->
    <div class="flex-auto">
      <span class="text-sm font-medium text-gray-800 dark:text-gray-200 truncate">
        {{ $request->title }}
      </span>
    </div>

    <!-- Third element: Aligned to the right -->
    <button type="button" id="menu-button" aria-expanded="true" aria-haspopup="true"
      x-on:click.stop="open_{{ $request->id }} = !open_{{ $request->id }}"
      :class="open_{{ $request->id }} === true ? 'block bg-slate-400 dark:bg-slate-700' : 'hidden'"
      class="flex mr-2 h-6 px-[6px] group-hover/request:block hover:bg-slate-200 hover:dark:bg-slate-500 rounded-[1.75px] focus:outline-none">

      <svg class="text-gray-800 dark:text-gray-200 h-full" fill="currentColor" viewBox="0 0 32.055 32.055"
        height="15px" width="15px">
        <g>
          <path d="M3.968,12.061C1.775,12.061,0,13.835,0,16.027c0,2.192,1.773,3.967,3.968,3.967c2.189,0,3.966-1.772,3.966-3.967
        C7.934,13.835,6.157,12.061,3.968,12.061z M16.233,12.061c-2.188,0-3.968,1.773-3.968,3.965c0,2.192,1.778,3.967,3.968,3.967
        s3.97-1.772,3.97-3.967C20.201,13.835,18.423,12.061,16.233,12.061z M28.09,12.061c-2.192,0-3.969,1.774-3.969,3.967
        c0,2.19,1.774,3.965,3.969,3.965c2.188,0,3.965-1.772,3.965-3.965S30.278,12.061,28.09,12.061z" />
        </g>
      </svg>

    </button>


    <!-- Dropdown Menu -->
    <div x-show='open_{{ $request->id }}'
      class="absolute right-1 top-5 z-10 mt-2 w-fit rounded-sm bg-gray-200 dark:bg-gray-800 shadow-lg ring-1 ring-inset ring-slate-600 dark:ring-slate-300 ring-opacity-5 focus:outline-none"
      role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"
      style="display: {{ $activeDropdownId === $request->id ? 'block' : 'none' }};">
      <div class="py-1" role="none">
        <a href="#" class="block px-4 text-sm text-gray-800 dark:text-gray-200" role="menuitem" tabindex="-1"
          id="menu-item-0">Account</a>
        <a href="#" class="block px-4 text-sm text-gray-800 dark:text-gray-200" role="menuitem" tabindex="-1"
          id="menu-item-1">Support</a>
        <a href="#" class="block px-4 text-sm text-gray-800 dark:text-gray-200" role="menuitem" tabindex="-1"
          id="menu-item-2">License</a>
      </div>
    </div>

  </div>
</li>
<!-- End Request -->
