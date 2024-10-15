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
    <div class="flex overflow-x-scroll overscroll-x-none no-scrollbar">
      @foreach ($openedTabs as $index => $tab)
        <div class="relative max-w-xs">
          <button wire:click="selectTab({{ $index }})"
            class="px-4 py-2 truncate {{ $activeTab === $index ? 'bg-blue-500 text-white' : 'bg-gray-200' }}">
            @if ($tab['method'])
              {{ $tab['method'] }}
            @else
            <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block">
              <path d="M3 8.2C3 7.07989 3 6.51984 3.21799 6.09202C3.40973 5.71569 3.71569 5.40973 4.09202 5.21799C4.51984 5 5.0799 5 6.2 5H9.67452C10.1637 5 10.4083 5 10.6385 5.05526C10.8425 5.10425 11.0376 5.18506 11.2166 5.29472C11.4184 5.4184 11.5914 5.59135 11.9373 5.93726L12.0627 6.06274C12.4086 6.40865 12.5816 6.5816 12.7834 6.70528C12.9624 6.81494 13.1575 6.89575 13.3615 6.94474C13.5917 7 13.8363 7 14.3255 7H17.8C18.9201 7 19.4802 7 19.908 7.21799C20.2843 7.40973 20.5903 7.71569 20.782 8.09202C21 8.51984 21 9.0799 21 10.2V15.8C21 16.9201 21 17.4802 20.782 17.908C20.5903 18.2843 20.2843 18.5903 19.908 18.782C19.4802 19 18.9201 19 17.8 19H6.2C5.07989 19 4.51984 19 4.09202 18.782C3.71569 18.5903 3.40973 18.2843 3.21799 17.908C3 17.4802 3 16.9201 3 15.8V8.2Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            @endif
            {{ $tab['title'] }}
          </button>
          <button wire:click="closeTab({{ $index }})" class="absolute top-0 right-0 text-red-600">x</button>
        </div>
      @endforeach
    </div>
  @endif
</div>
