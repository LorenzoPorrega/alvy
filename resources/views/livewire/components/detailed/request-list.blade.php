<div class="h-full w-full flex flex-row p-4 border-t border-solid border-gray-50 dark:border-gray-700">
  <section class="">
    <input type="text" wire:model.live="requestsListTitle"
      wire:change="$dispatch('updateTabTitle', { tabId:{{ $tabId }}, requestsListId: {{ $requestsListId }}, title: '{{ $requestsListTitle }}'})">
  </section>
  <section></section>
</div>
