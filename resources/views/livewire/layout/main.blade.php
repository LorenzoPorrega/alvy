<!-- Main -->
<div class="h-full">
  @if (empty($openTabs) && $selectedTab == '')
    <div class="dark h-full flex flex-col items-center justify-center text-gray-800 dark:text-gray-200">
      <svg fill="#fa9a00" width="250px" height="250px" viewBox="0 0 24 24" opacity="0.2" xmlns="http://www.w3.org/2000/svg">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <path
            d="m20.895 7.553-2-4A1.001 1.001 0 0 0 18 3h-5c-.379 0-.725.214-.895.553L10.382 7H6c-.379 0-.725.214-.895.553l-2 4a1 1 0 0 0 0 .895l2 4c.17.338.516.552.895.552h4.382l1.724 3.447A.998.998 0 0 0 13 21h5c.379 0 .725-.214.895-.553l2-4a1 1 0 0 0 0-.895L19.118 12l1.776-3.553a1 1 0 0 0 .001-.894zM13.618 5h3.764l1.5 3-1.5 3h-3.764l-1.5-3 1.5-3zm-8.5 7 1.5-3h3.764l1.5 3-1.5 3H6.618l-1.5-3zm12.264 7h-3.764l-1.5-3 1.5-3h3.764l1.5 3-1.5 3z">
          </path>
        </g>
      </svg>
      <span class="">Open a List, a Request or create one:</span>
      <div class="mt-2 flex gap-4">
        <button type="button" class="rounded py-1 px-2 bg-gray-50 dark:bg-gray-800 hover:bg-slate-300 hover:dark:bg-slate-600">List</button>
        <button type="button" class="rounded py-1 px-2 bg-gray-50 dark:bg-gray-800 hover:bg-slate-300 hover:dark:bg-slate-600">Request</button>
      </div>
    </div>
  @else
    <livewire:layout.tabs :openTabs="$openTabs" :selectedTab="$selectedTab" />
  @endif
</div>
{{-- End Main --}}
