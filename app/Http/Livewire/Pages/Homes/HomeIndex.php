<?php

namespace App\Http\Livewire\Pages\Homes;

use App\Events\MessageCreated;
use Livewire\Component;

class HomeIndex extends Component
{
  public function render()
  {
    return view('livewire.pages.homes.home-index');
  }
}
