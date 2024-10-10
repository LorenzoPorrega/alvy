<div class="tabs-container">
  <!-- Elenco delle tab -->
  <ul class="tabs flex">
    @foreach ($openTabs as $tabId => $tab)
      <li class="mr-4">
        <button wire:click="selectTab('{{ $tabId }}')"
          class="inline-block py-2 px-4 text-sm font-medium hover:text- {{ $selectedTab === $tabId ? 'border-b-2 border-honey-300' : '' }}
          dark:text-white">
          {{ $tab['name'] }}
          <!-- Pulsante per chiudere la tab -->
          <span wire:click="removeTab('{{ $tabId }}')" class="ml-2 text-honey-700 ursor-pointer">x</span>
        </button>
      </li>
    @endforeach
  </ul>

  <!-- Contenuto della tab selezionata -->
  <div class="tab-content">
    @if ($selectedTab && array_key_exists($selectedTab, $openTabs))
      @if ($openTabs[$selectedTab]['type'] === 'list')
        <!-- Visualizza il contenuto di una RequestList -->
        <livewire:layout.request-list :requestsList="$openTabs[$selectedTab]['id']" />
      @elseif($openTabs[$selectedTab]['type'] === 'request')
        <!-- Visualizza il contenuto di una Request -->
        <livewire:layout.request :request="$openTabs[$selectedTab]['id']" />
      @endif
    @else
      <div class="p-4">Seleziona una tab per visualizzare il contenuto.</div>
    @endif
  </div>
</div>
