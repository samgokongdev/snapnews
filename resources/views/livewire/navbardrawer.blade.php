<?php

use Livewire\Volt\Component;

new class extends Component {
  //
}; ?>

<nav x-show="open"
     x-transition:enter="transition transform ease-out duration-300"
     x-transition:enter-start="-translate-x-full"
     x-transition:enter-end="translate-x-0"
     x-transition:leave="transition transform ease-in duration-300"
     x-transition:leave-start="translate-x-0"
     x-transition:leave-end="-translate-x-full"
     class="fixed top-0 bottom-0 left-0 z-30 block w-full h-full min-h-screen overflow-y-auto text-gray-400 transition-all duration-300 ease-in-out bg-putih shadow-lg overflow-x-hidden">
    <div class="container mx-auto">
        <div class="mt-12 ml-6 lg:mx-72">
            <x-button.button5>
                <svg class="w-8 h-8" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor"
                     viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"></path>
                </svg>
            </x-button.button5>
        </div>
        <div class="mt-10 mx-6 lg:mx-72 lg:max-w-80">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <span class="flex font-bold text-3xl text-white rounded-lg w-20 h-20 text-center justify-center items-center bg-biru border-2 border-hitam shadow-[1px_2px_0px_0px] shadow-hitam">AS</span>
                    <div class="flex flex-col ms-4 space-y-2">
                        <h3 class="text-base text-hitam font-bold">Sarah Lawson</h3>
                        <span class="text-base text-abu font-semibold">@sarah_lawson</span>
                    </div>
                </div>
                <div class="flex">
                <span class="rounded lgp-2 bg-white border-2 border-hitam shadow-[2px_2px_0px_0px] shadow-hitam">
                    <svg class="w-8 h-8 text-hitam" data-slot="icon" fill="none" stroke-width="1.5"
                         stroke="currentColor"
                         viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"></path>
                    </svg>
                </span>
                </div>
            </div>
        </div>
        <div class="mt-10 mx-6 lg:mx-72 lg:max-w-80">
            <ul class="space-y-2">
                <x-navbarlist :listTittle="'Home'" :active="true">
                    <x-iconset.homew6/>
                </x-navbarlist>
                <x-navbarlist :listTittle="'Explore'" :active="false">
                    <x-iconset.newspaper-w6/>
                </x-navbarlist>
                <x-navbarlist :listTittle="'My Bookmark'" :active="false">
                    <x-iconset.bookmark-w6/>
                </x-navbarlist>
                <x-navbarlist :listTittle="'Notification'" :active="false">
                    <x-iconset.notification-w6/>
                </x-navbarlist>
                <x-navbarlist :listTittle="'Help'" :active="false">
                    <x-iconset.help-w6/>
                </x-navbarlist>
                <x-navbarlist :listTittle="'Setting'" :active="false">
                    <x-iconset.setting-w6/>
                </x-navbarlist>
            </ul>
        </div>
        <div class="mt-20 mx-6 lg:mx-72 lg:max-w-80">
            <div class="flex text-merah items-center px-4 py-4 w-full rounded-full border-2 border-transparent cursor-pointer hover:bg-merah hover:text-white hover:border-2 hover:border-hitam hover:shadow-[2px_2px_0px_0px] hover:shadow-hitam">
                <svg class="w-6 h-6" data-slot="icon" fill="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd"
                          d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3 3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6Zm-5.03 4.72a.75.75 0 0 0 0 1.06l1.72 1.72H2.25a.75.75 0 0 0 0 1.5h10.94l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 0 0-1.06 0Z"></path>
                </svg>
                <span class="ms-2 font-bold text-base">Log Out</span>
            </div>
        </div>
    </div>
</nav>
