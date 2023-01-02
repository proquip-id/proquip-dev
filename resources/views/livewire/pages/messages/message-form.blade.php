<div class="message-form-section">
  <form wire:submit.prevent="sendMessage">
    <input type="text" wire:model.defer="message">
    <button>Send</button>
  </form>
</div>
