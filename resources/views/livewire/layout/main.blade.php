<div class="dark h-full">
  @if (empty($openedTabs))
    <div class="dark h-full flex flex-col items-center justify-center text-gray-800 dark:text-gray-200">
      <x-icons.app-logo width="250px" height="250px" opacity="0.2" class="hidden md:block transition" />
      <span class="text-center">Open a List, a Request or create one:</span>
      <div class="mt-2 flex gap-4">
        <button type="button"
          class="rounded py-1 px-2 bg-gray-50 dark:bg-gray-800 hover:bg-slate-300 hover:dark:bg-slate-600 transition-colors duration-300 ease-in-out">List</button>
        <button type="button"
          class="rounded py-1 px-2 bg-gray-50 dark:bg-gray-800 hover:bg-slate-300 hover:dark:bg-slate-600 transition-colors duration-300 ease-in-out">Request</button>
      </div>
    </div>
  @else
    <div class="flex space-x-4">
      @foreach ($openedTabs as $index => $tab)
        <div class="relative">
          <button wire:click="selectTab({{ $index }})"
            class="px-4 py-2 {{ $activeTab === $index ? 'bg-blue-500 text-white' : 'bg-gray-200' }}">
            {{ $tab['title'] }}
          </button>
          <button wire:click="closeTab({{ $index }})" class="absolute top-0 right-0 text-red-600">x</button>
        </div>
      @endforeach
    </div>
  @endif
</div>
