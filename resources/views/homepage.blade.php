<x-snaplayout>
    <div class="mx-6 lg:mx-80">
        <div class="relative w-full mt-6">
            <!-- Icon -->
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                <svg class="w-6 h-6" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor"
                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"></path>
                </svg>
            </span>
            <!-- Input -->
            <input type="text"
                   class="pl-10 w-full py-4 text-sm font-bold border-2 border-hitam shadow-[2px_2px_0px_0px] focus:shadow-none shadow-hitam rounded-md focus:ring-2 focus:ring-hitam focus:border-transparent"
                   placeholder="Search...">
        </div>
        <livewire:newslist/>
    </div>
</x-snaplayout>