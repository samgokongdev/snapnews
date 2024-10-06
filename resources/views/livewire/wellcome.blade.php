<?php

use Livewire\Volt\Component;

new class extends Component {
  //
}; ?>

<div class="mx-6 lg:mx-80">
    <div class="flex flex-col min-h-screen">
        <div class="mt-10">
            <div class="h-[400px] w-full ">
                <img src="assets/images/illustration1.webp" alt="Image"
                     class="border-4 border-hitam rounded-xl h-full w-full object-cover">
            </div>
        </div>
        <div class="mt-6">
            <h1 class="text-hitam text-4xl font-bold">Unleash the Power of Informations.</h1>
            <p class="mt-4 font-medium">Empower your day with the latest headlines at your fingertips.</p>
        </div>
        <div class="flex items-center mt-4">
            <div class="flex mr-4">
                <img src="https://via.placeholder.com/100" alt="Avatar 1"
                     class="w-12 h-12 rounded-full border-2 border-white">
                <img src="https://via.placeholder.com/100" alt="Avatar 1"
                     class="w-12 h-12 rounded-full border-2 border-white -ml-6 z-20">
                <img src="https://via.placeholder.com/100" alt="Avatar 1"
                     class="w-12 h-12 rounded-full border-2 border-white -ml-6 z-20">
                <img src="https://via.placeholder.com/100" alt="Avatar 1"
                     class="w-12 h-12 rounded-full border-2 border-white -ml-6 z-20">
            </div>
            <div class="flex flex-col text-hitam justify-center">
                <span class="font-bold text-lg">10K+ User</span>
                <span class="text-[10px] text-base leading-tight">Have used the SnapNews Apps!</span>
            </div>
        </div>
        <div class="mt-8">
            <x-button.button2 class="w-full">Get Started</x-button.button2>
            <p class="text-sm text-hitam font-medium text-center mt-6">Already have an account?
                <span class="text-merah font-bold cursor-pointer hover:text-red-700">Sign In Now</span>
            </p>
        </div>
    </div>
    <x-footer/>
</div>
