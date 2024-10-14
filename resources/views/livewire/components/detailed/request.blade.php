<div>
  <form wire:submit.prevent="sendRequest">
    <div>
      <label for="url">URL:</label>
      <input type="text" wire:model="url" id="url">
      @error('url')
        <span class="error">{{ $message }}</span>
      @enderror
    </div>

    <div>
      <label for="method">Method:</label>
      <select wire:model="method" id="method">
        <option value="GET">GET</option>
        <option value="POST">POST</option>
        <option value="PUT">PUT</option>
        <option value="DELETE">DELETE</option>
      </select>
      @error('method')
        <span class="error">{{ $message }}</span>
      @enderror
    </div>

    <div>
      <label for="payload">Payload (for POST/PUT):</label>
      <textarea wire:model="payload" id="payload"></textarea>
    </div>

    <button type="submit">Send Request</button>
  </form>

  <!-- Display the response -->
  @if ($response)
    <div class="response-container">
      <h3>Response:</h3>
      <pre>{{ json_encode($response, JSON_PRETTY_PRINT) }}</pre>
    </div>
  @endif
</div>
