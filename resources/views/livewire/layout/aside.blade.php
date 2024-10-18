<!-- Aside -->
<aside class="border-r border-solid border-gray-50 dark:border-gray-700">
  <div class="h-full w-56 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
    {{-- <div class="flex h-12 px-3">
      <div class="self-center min-w-12">
        <x-icons.app-logo width="50" height="50" fill="#fa9a00" />
      </div>
      <span class="self-center ms-2 text-2xl font-bold text-gray-800 dark:text-gray-300 select-none">ALVY</span>
    </div> --}}
    
    <div class="py-4">
      <ul>
        @foreach ($requestsLists as $requestsList)
          <livewire:components.aside.request-list :requestsList="$requestsList" :key="$requestsList->id"/>
        @endforeach
      </ul>
    </div>
  </div>
</aside>
<!-- End Aside -->
