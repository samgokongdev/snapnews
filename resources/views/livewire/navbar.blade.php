<?php

use Livewire\Volt\Component;

new class extends Component {
  public function goToNewsList()
  {
	return $this->redirect('/', navigate: true);
  }
}; ?>

<nav class="mx-6 lg:mx-80">
    <div class="flex justify-between items-center mt-12">
        <x-snapnewslogo/>
        @if(\Illuminate\Support\Facades\Route::is(['home','artikel','author']))
            <x-hamburger x-on:click="open = ! open"/>
        @endif




        @if(\Illuminate\Support\Facades\Route::is('wellcome'))
            <x-button.button wire:click="goToNewsList()">
                Skip
            </x-button.button>
        @endif
    </div>
</nav>

