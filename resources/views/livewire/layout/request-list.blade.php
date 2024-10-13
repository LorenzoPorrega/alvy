<li class="dark" x-data="{ open: false }"
  wire:click="selectRequestsList({{ $requestsList->id }}),expandedRequestsList({{ $requestsList->id }})">
  <button @click="open = !open; if (open) { $wire.loadRequests() }"
    class="w-full flex items-center justify-between text-sm font-medium text-gray-800 dark:text-gray-200
          truncate select-none flex-row justify-items-center px-3 my-1.5 cursor-pointer
          hover:bg-slate-300 focus-within:border-l-2 focus-within:border-honey-500 border-l-2 border-l-transparent
          hover:dark:bg-slate-600 transition-colors duration-300 ease-in-out">
    <span>{{ $requestsList->name }}</span>

    <svg :class="{ 'rotate-180': open, 'rotate-0': !open }" class="w-4 h-4 transition-transform duration-200 transform"
      fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
    </svg>
  </button>

  <div x-show="open">
    <ul>
      @foreach ($requests as $request)
        <li wire:click="selectRequest({{ $request->id }})">
          <livewire:layout.request :request="$request" :key="$request->id" />
        </li>
      @endforeach
    </ul>
  </div>
</li>
