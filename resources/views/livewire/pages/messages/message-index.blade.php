<div class="message-index-section">
  <h1 class="text-center">Message Index</h1>

  <div class="border">
    @foreach ($messages as $messageIndex => $message)
      {{ $loop->iteration }}. {{ $message }} <br />
    @endforeach
  </div>

</div>

@push('scripts')
  <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
  <script>
    // Enable pusher logging - don't include this in production
    // Pusher.logToConsole = true;

    const pusher = new Pusher('8646005c0dbdc19b6b8e', {
      cluster: 'ap1'
    });

    const channel = pusher.subscribe('messages');
    channel.bind('message-created', function(data) {
      @this.pushMessage(data.message)
    });
  </script>
@endpush
