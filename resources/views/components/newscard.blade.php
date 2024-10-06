<div class="max-w-60 lg:max-w-full flex-shrink-0 text-hitam">
    <div class="relative">
        <div class="absolute flex items-center px-2 py-1 border-2 bg-white right-0 top-0 mt-2 mr-2 rounded-full border-hitam">
            <svg class="text-merah w-4 h-4" data-slot="icon" fill="none" stroke-width="2.5" stroke="currentColor"
                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
            </svg>
            <span class="text-xs ms-1 text-hitam font-semibold">{{$totalViews}}</span>
        </div>
        <div class="w-full h-auto bg-gray-200">
            <img src="{{$imageDir}}" class="w-full h-full object-cover rounded-lg shadow-neo3"
                 alt="Cover Image">
        </div>
    </div>
    <div class="mb-1 mt-4">
        <div class="flex justify-between items-center">
            <div class="flex items-center">
                <span class="font-bold text-lg text-white rounded-lg px-2.5 py-1 bg-biru border-2 border-hitam shadow-[1px_2px_0px_0px] shadow-hitam">{{$categoryLogo}}</span>
                <h5 class="text-xs font-bold ms-2">{{$categoryName}}</h5>
            </div>
            <span class="font-medium">{{$postDate}}</span>
        </div>
        <div class="mt-2">
            <h3 class="text-lg font-bold">
                {{$newsTitle}}
            </h3>
        </div>
    </div>
</div>