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
      @foreach ($openedTabs as $tabId => $tab)
        <div class="relative border-r border-solid border-gray-50 dark:border-gray-700 group/tab">
          <button wire:click.stop="selectTab({{ $tabId }})"
            class="px-4 py-2 max-w-40 flex text-gray-800 dark:text-gray-200 hover:bg-slate-300 hover:dark:bg-slate-600 {{ $activeTab === $tabId ? 'bg-gray-50 dark:bg-gray-800' : '' }}">
            @if ($tab['method'])
              {{ $tab['method'] }}
            @else
              <svg width="25px" height="25px" viewBox="0 0 24 24" stroke="#fa9a00" fill="none"
                xmlns="http://www.w3.org/2000/svg" class="inline-block pr-1">
                <path
                  d="M3 8.2C3 7.07989 3 6.51984 3.21799 6.09202C3.40973 5.71569 3.71569 5.40973 4.09202 5.21799C4.51984 5 5.0799 5 6.2 5H9.67452C10.1637 5 10.4083 5 10.6385 5.05526C10.8425 5.10425 11.0376 5.18506 11.2166 5.29472C11.4184 5.4184 11.5914 5.59135 11.9373 5.93726L12.0627 6.06274C12.4086 6.40865 12.5816 6.5816 12.7834 6.70528C12.9624 6.81494 13.1575 6.89575 13.3615 6.94474C13.5917 7 13.8363 7 14.3255 7H17.8C18.9201 7 19.4802 7 19.908 7.21799C20.2843 7.40973 20.5903 7.71569 20.782 8.09202C21 8.51984 21 9.0799 21 10.2V15.8C21 16.9201 21 17.4802 20.782 17.908C20.5903 18.2843 20.2843 18.5903 19.908 18.782C19.4802 19 18.9201 19 17.8 19H6.2C5.07989 19 4.51984 19 4.09202 18.782C3.71569 18.5903 3.40973 18.2843 3.21799 17.908C3 17.4802 3 16.9201 3 15.8V8.2Z"
                  stroke="#fa9a00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            @endif
            <span class="truncate w-full">
              {{ $tab['title'] }}
            </span>
            <div class="h-full absolute z-50 top-0 right-0 min-w-8 flex items-center justify-center group-hover/tab:bg-slate-300  
                    group-hover/tab:dark:bg-slate-600">
              <div wire:click.stop="closeTab({{ $tabId }})"
                class="hidden group-hover/tab:flex text-gray-800 dark:text-gray-200 hover:bg-slate-200  
                    hover:dark:bg-slate-500 rounded">
                <svg width="22px" height="22px" viewBox="0 -0.5 25 25" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M6.96967 16.4697C6.67678 16.7626 6.67678 17.2374 6.96967 17.5303C7.26256 17.8232 7.73744 17.8232 8.03033 17.5303L6.96967 16.4697ZM13.0303 12.5303C13.3232 12.2374 13.3232 11.7626 13.0303 11.4697C12.7374 11.1768 12.2626 11.1768 11.9697 11.4697L13.0303 12.5303ZM11.9697 11.4697C11.6768 11.7626 11.6768 12.2374 11.9697 12.5303C12.2626 12.8232 12.7374 12.8232 13.0303 12.5303L11.9697 11.4697ZM18.0303 7.53033C18.3232 7.23744 18.3232 6.76256 18.0303 6.46967C17.7374 6.17678 17.2626 6.17678 16.9697 6.46967L18.0303 7.53033ZM13.0303 11.4697C12.7374 11.1768 12.2626 11.1768 11.9697 11.4697C11.6768 11.7626 11.6768 12.2374 11.9697 12.5303L13.0303 11.4697ZM16.9697 17.5303C17.2626 17.8232 17.7374 17.8232 18.0303 17.5303C18.3232 17.2374 18.3232 16.7626 18.0303 16.4697L16.9697 17.5303ZM11.9697 12.5303C12.2626 12.8232 12.7374 12.8232 13.0303 12.5303C13.3232 12.2374 13.3232 11.7626 13.0303 11.4697L11.9697 12.5303ZM8.03033 6.46967C7.73744 6.17678 7.26256 6.17678 6.96967 6.46967C6.67678 6.76256 6.67678 7.23744 6.96967 7.53033L8.03033 6.46967ZM8.03033 17.5303L13.0303 12.5303L11.9697 11.4697L6.96967 16.4697L8.03033 17.5303ZM13.0303 12.5303L18.0303 7.53033L16.9697 6.46967L11.9697 11.4697L13.0303 12.5303ZM11.9697 12.5303L16.9697 17.5303L18.0303 16.4697L13.0303 11.4697L11.9697 12.5303ZM13.0303 11.4697L8.03033 6.46967L6.96967 7.53033L11.9697 12.5303L13.0303 11.4697Z"
                    fill="#111827" />
                </svg>
              </div>
            </div>
          </button>
        </div>
      @endforeach
    </div>
  @endif
</div>
