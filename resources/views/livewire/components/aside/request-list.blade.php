<!-- RequestsList -->
@dd($requests)
<li x-data="{ open: false }" wire:click="$dispatch('openTab', { id: {{ $requestsList->id }}, type: 'requestsList' })">
  <button
    class="w-full flex items-center justify-between text-sm font-medium text-gray-800
        dark:text-gray-200 truncate select-none flex-row justify-items-center px-3
          my-1.5 cursor-pointer hover:bg-slate-300 hover:dark:bg-slate-600  
        focus-within:border-honey-500 border-l-2 border-l-transparent
          focus-within:border-l-2 transition-colors duration-300 ease-in-out">

    <div x-on:click.stop="open = !open; if (open) { $wire.loadRequests() }"
      class="text-gray-800 dark:text-gray-200 hover:bg-slate-200  
          hover:dark:bg-slate-500 rounded">
      <svg :class="{ 'rotate-90': open, 'rotate-0': !open }" class="w-5 h-5 transition-transform duration-200 transform"
        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
        class="feather feather-chevron-right">
        <polyline points="9 6 15 12 9 18"></polyline>
      </svg>
    </div>

    <span class="w-full ml-2 text-left py-1">{{ $requestsList->title }}</span>

  </button>

  <div x-show="open">
    <ul>
      @foreach ($requests as $request)
        <livewire:components.aside.request :request="$request" :key="$request->id" />
      @endforeach
    </ul>
  </div>
</li>
<!-- End RequestsList -->