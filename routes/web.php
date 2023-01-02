<?php

use App\Events\MessageCreated;
use App\Http\Livewire\Pages\Messages\MessageForm;
use App\Http\Livewire\Pages\Messages\MessageIndex;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', App\Http\Livewire\Pages\Homes\HomeIndex::class);
Route::get('/message/created', function () {

  MessageCreated::dispatch('Hello World');

  return 'Created';
});

Route::get('/messages', MessageIndex::class);
Route::get('/messages/form', MessageForm::class);
