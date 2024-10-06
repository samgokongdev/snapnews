<?php

use Livewire\Volt\Component;

new class extends Component {
  //
}; ?>

<div class="mt-6 text-hitam">
    <div class="flex justify-between items-center">
        <div>
            <h3 class="font-bold text-base">Artikel Terpopuler</h3>
        </div>
        <x-button.button3>View All</x-button.button3>
    </div>
    <div class="mt-4">
        <x-horizontalscroll class="space-x-4 lg:hidden">
            <x-newscard :imageDir="'assets/images/illustration2.webp'"
                        :totalViews="'10.000'"
                        :categoryLogo="'W'"
                        :categoryName="'World Economy'"
                        :postDate="'Now'"
                        :newsTitle="'In-Depth Analysis: Global Economic Trends'"/>
            <x-newscard :imageDir="'assets/images/illustration2.webp'"
                        :totalViews="'12.000'"
                        :categoryLogo="'W'"
                        :categoryName="'World Economy'"
                        :postDate="'Now'"
                        :newsTitle="'In-Depth Analysis: Global Economic Trends'"/>
            <x-newscard :imageDir="'assets/images/illustration2.webp'"
                        :totalViews="'13 .000'"
                        :categoryLogo="'W'"
                        :categoryName="'World Economy'"
                        :postDate="'Now'"
                        :newsTitle="'In-Depth Analysis: Global Economic Trends'"/>
            <x-newscard :imageDir="'assets/images/illustration2.webp'"
                        :totalViews="'13 .000'"
                        :categoryLogo="'W'"
                        :categoryName="'World Economy'"
                        :postDate="'Now'"
                        :newsTitle="'In-Depth Analysis: Global Economic Trends'"/>
        </x-horizontalscroll>
        <div class="grid-cols-4 gap-4 hidden lg:grid">
            <x-newscard :imageDir="'assets/images/illustration2.webp'"
                        :totalViews="'13 .000'"
                        :categoryLogo="'W'"
                        :categoryName="'World Economy'"
                        :postDate="'Now'"
                        :newsTitle="'In-Depth Analysis: Global Economic Trends'"/>
            <x-newscard :imageDir="'assets/images/illustration2.webp'"
                        :totalViews="'13 .000'"
                        :categoryLogo="'W'"
                        :categoryName="'World Economy'"
                        :postDate="'Now'"
                        :newsTitle="'In-Depth Analysis: Global Economic Trends'"/>
            <x-newscard :imageDir="'assets/images/illustration2.webp'"
                        :totalViews="'13 .000'"
                        :categoryLogo="'W'"
                        :categoryName="'World Economy'"
                        :postDate="'Now'"
                        :newsTitle="'In-Depth Analysis: Global Economic Trends'"/>
            <x-newscard :imageDir="'assets/images/illustration2.webp'"
                        :totalViews="'13 .000'"
                        :categoryLogo="'W'"
                        :categoryName="'World Economy'"
                        :postDate="'Now'"
                        :newsTitle="'In-Depth Analysis: Global Economic Trends'"/>
        </div>
    </div>


    <div class="flex justify-between items-center mt-6">
        <div>
            <h3 class="font-bold text-base">Penulis Gokil</h3>
        </div>
        <x-button.button3>View All</x-button.button3>
    </div>
    <div class="mt-4">
        <x-horizontalscroll class="space-x-4">
            <x-authorcard :logo="'I'" :authorName="'Insider Report'"/>
            <x-authorcard :logo="'J'" :authorName="'Jack The Ripper Goks Banget No Debat'"/>
            <x-authorcard :logo="'L'" :authorName="'Lambemu Cok'"/>
            <x-authorcard :logo="'A'" :authorName="'Awokwkwkwkwkwkkw'"/>
        </x-horizontalscroll>
    </div>

    <div class="flex justify-between items-center mt-6">
        <div>
            <h3 class="font-bold text-base">Daftar Artikel</h3>
        </div>
        <x-button.button3>View All</x-button.button3>
    </div>
    <hr class="mt-4 border-[2px] border-hitam"/>
    <div class="mt-4">
        <div class="flex space-x-4">
            <x-button.button4 class="bg-white border-hitam border-2 shadow-[2px_2px_0px_0px] shadow-hitam">
                Trending
            </x-button.button4>
            <x-button.button4>
                Teknologi
            </x-button.button4>
            <x-button.button4>Bisnis</x-button.button4>
            <x-button.button4>Kuliner</x-button.button4>
            <x-button.button4>Sains</x-button.button4>
        </div>
    </div>

    <div class="mt-4 space-y-4">
        <div class="flex items-center justify-center space-x-2 lg:space-x-4">
            <div class="flex flex-col w-3/5">
                <span class="text-xs lg:text-3xl text-merah font-bold">Science</span>
                <span class="my-2 lg:my-6 text-base lg:text-4xl text-hitam font-bold">Navigating the Cosmos: A Space Exploration Odyssey</span>
                <span class="text-xs lg:text-base text-hitam font-medium">1 Days Ago</span>
            </div>
            <div class="w-2/5">
                <img class="rounded-lg border-2 border-hitam shadow-[2px_2px_0px_0px] shadow-hitam w-full max-h-auto"
                     src="assets/images/illustration1.webp" alt=""/>
            </div>
        </div>

        <div class="flex items-center justify-center space-x-4">
            <div class="flex flex-col w-3/5">
                <span class="text-xs lg:text-3xl text-merah font-bold">Science</span>
                <span class="my-2 lg:my-6 text-base lg:text-4xl text-hitam font-bold">Navigating the Cosmos: A Space SSS SSS Exploration Odyssey</span>
                <span class="text-xs lg:text-base text-hitam font-medium">1 Days Ago</span>
            </div>
            <div class="w-2/5">
                <img class="rounded-lg border-2 border-hitam shadow-[2px_2px_0px_0px] shadow-hitam w-full max-h-auto"
                     src="assets/images/illustration2.webp" alt=""/>
            </div>
        </div>
    </div>

    <x-footer/>
</div>
