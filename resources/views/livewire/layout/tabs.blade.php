<div class="tabs-container">
  <ul class="tabs flex">
    @foreach ($openTabs as $tabId => $tab)
      <li class="mr-4">
        <button wire:click="selectTab('{{ $tabId }}')"
          class="inline-block py-2 px-4 text-sm font-medium hover:text- {{ $selectedTab === $tabId ? 'border-b-2 border-honey-300' : '' }}
          dark:text-white">
          {{ $tab['name'] }}
          <span wire:click="removeTab('{{ $tabId }}')" class="ml-2 text-honey-700 ursor-pointer">x</span>
        </button>
      </li>
    @endforeach
  </ul>

  <div class="tab-content">
    {{-- @if ($selectedTab && array_key_exists($selectedTab, $openTabs)) --}}
      @if ($openTabs[$selectedTab]['type'] === 'list')
        {{-- <livewire:layout.request-list :requestsList="$openTabs[$selectedTab]['id']" /> --}}
      @elseif($openTabs[$selectedTab]['type'] === 'request')
        {{-- <livewire:layout.request :request="$openTabs[$selectedTab]['id']" /> --}}
      @endif
    {{-- @else --}}
    {{-- @endif --}}
  </div>
</div>
