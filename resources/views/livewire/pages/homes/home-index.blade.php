<div class="home-index-section p-4">
  <h1 class="text-center">Halaman Home</h1>
</div>

@push('scripts')
  <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
  <script>
    // Enable pusher logging - don't include this in production
    // Pusher.logToConsole = true;

    var pusher = new Pusher('8646005c0dbdc19b6b8e', {
      cluster: 'ap1'
    });

    var channel = pusher.subscribe('messages');
    channel.bind('message-created', function(data) {
      console.log(JSON.stringify(data));
    });
  </script>
@endpush
