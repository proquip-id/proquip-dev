<?php

namespace App\Http\Livewire\Pages\Messages;

use Livewire\Component;

class MessageIndex extends Component
{

  public $messages = [
    'Message 1',
    'Message 2',
  ];

  public function render()
  {
    return view('livewire.pages.messages.message-index');
  }

  public function pushMessage($message)
  {
    $this->messages[] = $message;
  }
}
