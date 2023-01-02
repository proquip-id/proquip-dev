<?php

namespace App\Http\Livewire\Pages\Messages;

use Livewire\Component;
use App\Events\MessageCreated;

class MessageForm extends Component
{


  public function render()

  {
    return view('livewire.pages.messages.message-form');
  }

  public $message = '';

  public function sendMessage()
  {
    MessageCreated::dispatch($this->message);
  }
}
